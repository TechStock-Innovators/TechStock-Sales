<?php

use App\core\Controller;
use App\models\Users;
use App\helpers\Authenticator;

class Sales extends Controller
{
    protected $Auth;

    public function index()
    {
        return $this->view("Login/index");
    }

    public function __construct()
    {
        $this->Auth = new Authenticator();
    }
    
    public function logon()
    {
        if($this->Auth->validate($_POST["user"], $_POST["senha"])) {
            $this->Auth->gravaSessao($_POST["user"]);
            $this->redirect("Sales/dashboard");
        } else {
            $error = "MENSAGEM";
            return $this->view("Login/index", $error);
        }
    }

    public function dashboard()
    {
        return $this->view("Sales/index");
    }
}