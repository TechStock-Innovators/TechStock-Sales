<?php

namespace App\models\DataObjects;

class Mensagem
{
    public int $id;
    public string $name;
    public string $email;
    public string $mensagem;
    public string $sucesso;
    public string $tentativas;
    public string $feedback;
    public string $observacoes;
}