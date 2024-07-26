<?php

use App\core\Controller;
use App\models\Users;

class Sales extends Controller
{
    public function index()
    {
        return $this->view("Login/index");
    }
}