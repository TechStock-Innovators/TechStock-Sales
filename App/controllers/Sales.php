<?php

use App\core\Controller;
use App\models\Users;
use App\models\Messages;
use App\helpers\Authenticator;

class Sales extends Controller
{
    protected $Auth;

    public function index()
    {
        return $this->view("Login/index");
    }
    
    public function contatos()
    {
        $Mensagens = $this->model('Mensagens');
        $data = $Mensagens::findAll();

        return $this->view("Sales/ContactsList", ['mensagens'=> $data]);
    }
    
    public function usuarios()
    {
        return $this->redirect("User");
    }

    public function __construct()
    {
        $this->Auth = new Authenticator();
    }
    
    public function logon()
    {
        if($this->Auth->validate($_POST["user"], $_POST["senha"])) {
            $this->Auth->gravaSessao($_POST["user"]);
            $this->redirect("Sales", "dashboard");
        } else {
            $error = "MENSAGEM";
            return $this->view("Login/index", $error);
        }
    }

    public function dashboard()
    {
        return $this->view("Sales/index");
    }

    public function editar($id)
    {
        $Mensagens = $this->model('Mensagens');
        $data = $Mensagens::findById($id);

        return $this->view("Sales/ContactDetails", ["data" => $data[0]]);
    }

    public function delete($id)
    {
        $Mensagens = $this->model('Mensagens');
        try {
          $data = $Mensagens::deleteById($id);
    
          $data = $Mensagens::findAll();
          $this->view('Sales/ContactsList', [
            'mensagens' => $data, 
            'notify' => [
              'type' => 'success',
              'message' => 'Mensagens removido com sucesso!'
            ]
          ]);
        } catch (\Throwable $th) {
          $data = $Mensagens::findAll();
          $this->view('Sales/ContactsList', [
            'mensagens' => $data, 
            'notify' => [
              'type' => 'error',
              'message' => 'Falha ao remover Mensagens, tente novamente.'
            ]
          ]);
        }
      }

    public function salvar($id)
    {
        $feedback = $_POST["feedback"];
        $observacoes = $_POST["observacoes"];

        $Mensagens = $this->model('Mensagens');
        try {
            $Mensagens::insertMessageUpdate($id, $feedback, $observacoes);
      
            $data = $Mensagens::findAll();
            $this->view('Sales/ContactsList', [
              'mensagens' => $data, 
              'notify' => [
                'type' => 'success',
                'message' => 'Mensagem salva com sucesso!'
              ]
            ]);
          } catch (\Throwable $th) {
            $data = $Mensagens::findAll();
            $this->view('Sales/ContactsList', [
              'mensagens' => $data, 
              'notify' => [
                'type' => 'error',
                'message' => 'Falha ao salvar Mensagem, tente novamente.'
              ]
            ]);
          }
    }
}