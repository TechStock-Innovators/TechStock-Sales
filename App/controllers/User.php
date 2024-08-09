<?php

use App\core\Controller;
use App\models\DataObjects\User as DataObjectsUser;

class User extends Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  {
    $Users = $this->model('Users'); // é retornado o model Users() 
    $data = $Users::findAll();
    $this->view('User/UsersList', [
      'users' => $data
    ]);
  }

  public function novoUsuario()
  {
    return $this->view('User/UsersAdd');
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      $data = $Users::findById($id);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function salvar()
  {
    $incomingUser = new DataObjectsUser();
    $incomingUser->id = 0;
    $incomingUser->name = $_POST["nome"];
    $incomingUser->user = $_POST["user"];
    $incomingUser->email = $_POST["email"];
    $incomingUser->password = $_POST["senha"];
    $incomingUser->section = $_POST["setor"];
    $incomingUser->permission = $_POST["permissao"];

    $Users = $this->model('Users');
    
    try {
      $Users::insertUser($incomingUser);

      $data = $Users::findAll();
      $this->view('User/UsersList', [
        'users' => $data, 
        'notify' => [
          'type' => 'success',
          'message' => 'Usuário salvo com sucesso!'
        ]
      ]);
    } catch (\Throwable $th) {
      $data = $Users::findAll();
      $this->view('User/UsersList', [
        'users' => $data, 
        'notify' => [
          'type' => 'error',
          'message' => 'Falha ao salvar usuário, tente novamente.'
        ]
      ]);
    }
    
  }

  public function delete(int $id)
  {
    $Users = $this->model('Users');
    try {
      $data = $Users::deleteByUser($id);

      $data = $Users::findAll();
      $this->view('User/UsersList', [
        'users' => $data, 
        'notify' => [
          'type' => 'success',
          'message' => 'Usuário removido com sucesso!'
        ]
      ]);
    } catch (\Throwable $th) {
      $data = $Users::findAll();
      $this->view('User/UsersList', [
        'users' => $data, 
        'notify' => [
          'type' => 'error',
          'message' => 'Falha ao remover usuário, tente novamente.'
        ]
      ]);
    }
  }

}