<?php session_start(); ?>
<!--Destroy session - session_unset() => Clear cart-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/style-cart.css">
  <link rel="stylesheet" href="public/css/table-option.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="https://i.pinimg.com/originals/1c/54/f7/1c54f7b06d7723c21afc5035bf88a5ef.png" type="image/icon type">
  <title>Shopping Cart</title>
</head>
<body>
<div class="container">
  <header class="header-bar">
    <div class="header-bar__app-name">
      <h1>Shopping Cart - Pure PHP MVC</h1>
    </div>
    <div class="header-bar__profile">
      <img src="https://assets.materialup.com/uploads/e6793585-6ec8-4c1a-8c83-1e0b58041338/preview.png" alt="avt.jpg">
      <span>Thiện Phạm</span>
    </div>
  </header>
    <?php
      require "./controllers/ProductController.php";
      $productController = new ProductController();
      $productController -> handlingRoutes();
    ?>
</div>
</body>
</html>