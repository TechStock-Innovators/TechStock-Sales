<?php

namespace App\core;

class Helpers
{
    public function model($model)
    {
        require '../App/models/' . $model . '.php';
        $classe = 'App\\models\\' . $model;
        return new $classe();
    }
}