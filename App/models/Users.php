<?php

namespace App\models;

use App\core\Database;
use PDO;

class Users
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  
  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado Username
  * @param    string     $user   Identificador único do usuário
  *
  * @return   array
  */
  public static function findByUser(string $user)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE user = :USER LIMIT 1', array(
      ':USER' => $user
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}