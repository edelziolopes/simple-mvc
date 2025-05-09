<?php
namespace Application\models;
use Application\core\Database;
use PDO;
class Produtos
{
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('
    SELECT * FROM tb_produtos'
  );
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}
