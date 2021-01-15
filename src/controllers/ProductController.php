<?php

  require_once("./models/Product.php");

  class ProductController {
    private Product $products;

    public function __construct() {
      $this -> products = new Product();
    }

    public function handlingRoutes() {
      $act = isset($_GET['act']) ? $_GET['act'] : '';
      $id = isset($_GET['id']) ? $_GET['id'] : '';

      switch ($act) {
        case "":
          $this -> index();
          break;
        case "detail":
          $this -> detail($id);
          break;
        case "cart":
          $this -> cart($id);
          break;
        default:
          echo "404 NOT FOUND";
          break;
      }
    }

    public function index() {
      $products = $this -> products -> getAllProduct();
      include_once("./views/list.php");
    }

    public function detail($id) {
      if ($id) {
        $details = $this -> products -> getProductDetailById($id);
        include_once("./views/detail.php");
      } else {
        echo "404 NOT FOUND";
      }
    }

    public function cart($id) {
      $id = intval($id);
      if (!empty($_POST["quantity"])) {
        $productById = $this -> products -> getProductDetailById($id);
        $itemArray = array(
          $productById[0]["id"] => array(
            'id' => $productById[0]["id"],
            'name' => $productById[0]["_name"],
            'color' => $productById[0]["color"],
            'size' => $productById[0]["size"],
            'quantity' => $_POST["quantity"],
            'price' => $productById[0]["price"],
            'img' => $productById[0]["img"]
          )
        );

        if (!empty($_SESSION["cart_item"])) {
          if (in_array($productById[0]["id"], array_keys($_SESSION["cart_item"]))) {
            foreach ($_SESSION["cart_item"] as $key => $value) {
              if ($productById[0]["id"] == $key) {
                if (empty($_SESSION["cart_item"][$key]["quantity"])) {
                  $_SESSION["cart_item"][$key]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$key]["quantity"] += $_POST["quantity"];
              }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
          }
        } else {
          $_SESSION["cart_item"] = $itemArray;
        }
      }
      include_once("./views/cart.php");
    }
  }




