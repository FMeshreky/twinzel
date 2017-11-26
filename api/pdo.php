<?php

class DB {

  private $pdo;

  public function __construct($dbServername, $dbName, $dbUsername, $dbPassword) {

    $pdo = new PDO('mysql:host='.$dbServername.';dbname='.$dbName.';charset=utf8', $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo = $pdo;

  }

  public function query($query, $params = array()) {

    $statement = $this->pdo->prepare($query);
    $statement->execute($params);

    if (explode(' ', $query)[0] == 'SELECT') {

    $data = $statement->fetchAll();
    return $data;
    }
  }
}

 ?>
