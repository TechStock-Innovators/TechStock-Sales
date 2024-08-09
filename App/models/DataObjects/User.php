<?php

namespace App\models\DataObjects;

class User
{
    public int $id;
    public string $name;
    public string $email;
    public string $section;
    public string $permission;
    public string $user;
    public string $password;
    public $created_at;
}