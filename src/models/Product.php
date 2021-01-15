<?php

  require_once "./database/dbconnect.php";

  class Product extends DatabaseConnection {
    protected ?PDO $pdoConnect;

    public function __construct() {
      $this -> pdoConnect = $this -> createConnect();
    }

    public function __destruct() {
      $this -> pdoConnect = null;
    }

    public function getAllProduct(): array {
      $getAllProductQuery = "SELECT * FROM product";
      $pdoStatement = $this -> pdoConnect -> prepare($getAllProductQuery);
      $pdoStatement -> execute();
      return $pdoStatement -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductDetailById($id): array {
      $productDetailByIdQuery = "SELECT * FROM product WHERE id =" . $id;
      $pdoStatement = $this -> pdoConnect -> prepare($productDetailByIdQuery);
      $pdoStatement -> execute();
      return $pdoStatement -> fetchAll(PDO::FETCH_ASSOC);
    }
  }