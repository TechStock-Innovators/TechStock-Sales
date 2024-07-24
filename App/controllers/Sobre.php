<?php

use App\core\Controller;

class Sobre extends Controller
{
    public function index()
    {
        $this->view('Sobre/index');
    }
}