<?php

namespace App\models;

use App\core\Database;
use App\models\DataObjects\User;
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
  
  public static function insertUser(User $user)
  {
    $conn = new Database();
    $result = $conn->executeQuery('INSERT INTO users (user, password, name, email, permission, section) 
                                    VALUES (:USER, :PASSWORD, :NAME, :EMAIL, :PERMISSION, :SECTION)', 
    array(
      ':USER' => $user->user,
      ':PASSWORD' => $user->password,
      ':NAME' => $user->name,
      ':EMAIL' => $user->email,
      ':PERMISSION' => $user->permission,
      ':SECTION' => $user->section,
    ));

    return $result;
  }

  public static function updateByUser(User $user)
  {
    $conn = new Database();
    $result = $conn->executeQuery('UPDATE users SET 
                                    user = :USER, 
                                    password = :PASSWORD, 
                                    nome = :NAME 
                                    WHERE id = :ID', array(
      ':ID' => $user->id,
      ':USER' => $user->user,
      ':PASSWORD' => $user->password,
      ':NAME' => $user->name
    ));

    return $result;
  }

  public static function deleteByUser(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('DELETE FROM users WHERE id = :ID', array(
      ':ID' => $id
    ));

    return $result;
  }

}