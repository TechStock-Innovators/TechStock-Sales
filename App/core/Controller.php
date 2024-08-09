<?php

namespace App\core;

class Controller
{
    public function model($model)
    {
        require '../App/models/' . $model . '.php';
        $classe = 'App\\models\\' . $model;
        return new $classe();
    }

    public function view(string $view, $data = [])
    {
        if($data != []) $ViewBag = $data;
        require '../App/views/' . $view . '.php';
    }

    public function pageNotFound()
    {
        $this->view('erro404');
    }

    public function redirect(string $controller, $method="index", $args = array())
    {
        $location = 'localhost:8085' . "/" . $controller . "/" . $method . "/" . implode("/",$args);

        header('Location: http://' . $location);
    }
}