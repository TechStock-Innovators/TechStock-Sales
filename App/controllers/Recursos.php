<?php

use App\core\Controller;

class Recursos extends Controller
{
    public function index()
    {
        $this->view('Recursos/index');
    }
}