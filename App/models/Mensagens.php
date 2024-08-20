<?php

namespace App\models;

use App\core\Database;
use App\models\DataObjects\Mensagem;
use PDO;

class Mensagens
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
    $result = $conn->executeQuery('SELECT * FROM mensagens');
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
    $result = $conn->executeQuery('SELECT * FROM mensagens WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  
  
  public static function insertMessagem(Mensagem $mensagem)
  {
    $conn = new Database();
    $result = $conn->executeQuery('INSERT INTO mensagens (name, email, mensagem) 
                                    VALUES (:NAME, :EMAIL, :MENSAGEM)', 
    array(
      ':NAME' => $mensagem->name,
      ':EMAIL' => $mensagem->email,
      ':MENSAGEM' => $mensagem->mensagem
    ));

    return $result;
  }
  
  public static function insertMessageUpdate($id, $feedback, $observacoes)
  {
    $conn = new Database();
    $result = $conn->executeQuery('UPDATE mensagens SET 
                                    feedback = :FEEDBACK,
                                    observacoes = :OBSERVACOES
                                    WHERE id = :ID', 
    array(
      ':ID' => $id,
      ':FEEDBACK' => $feedback,
      ':OBSERVACOES' => $observacoes
    ));

    return $result;
  }

  public static function deleteById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('DELETE FROM mensagens WHERE id = :ID', array(
      ':ID' => $id
    ));

    return $result;
  }

}