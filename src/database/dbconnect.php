<?php

  class DatabaseConnection {
    //    public function createConnect(): mysqli {
    //      $servername = "localhost";
    //      $username = "root";
    //      $password = "6996";
    //      $dbname = "shopping_cart_pure_php";
    //      $connect = new mysqli($servername, $username, $password, $dbname);
    //      if ($connect -> connect_error) {
    //        die("Connection Failed: " . $connect -> connect_error);
    //      }
    //      mysqli_set_charset($connect, "utf8");
    //      return $connect;
    //    }

    public function createConnect(): PDO {
      $servername = "localhost";
      $username = "root";
      $password = "6996";
      return new PDO(
        "mysql:host=$servername;dbname=shopping_cart_pure_php",
        $username,
        $password);
    }
  }