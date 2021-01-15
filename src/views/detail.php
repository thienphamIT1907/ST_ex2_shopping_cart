<div class="back-button">
  <a href="index.php"> &#10150; Back</a>
</div>
<?php
  if (isset($details)) {
    foreach ($details as $detail) {
      ?>
      <div class="container-detail">
        <div class="container-detail__product-image">
          <img src="./public/images/<?php echo $detail["img"] ?>" alt="product-detail">
          <div class="quantity-color-size">
            <form action="index.php?act=cart&id=<?php echo $detail["id"]?>" id="option-form" method="post">
              <div class="color">
                <input type="radio" id="gray" name="color" value="Gray" checked>
                <label for="gray">Gray</label>
                <input type="radio" id="white" name="color" value="White">
                <label for="white">White</label>
                <input type="radio" id="pink" name="color" value="Pink">
                <label for="pink">Pink</label>
              </div>

              <div class="quantity">
                <label for="quantity-prod">Quantity: </label>
                <input id="quantity-prod" type="number" name="quantity" value="1">
              </div>
            </form>
          </div>
        </div>
        <div class="container-detail__product-information">
          <ul>
            <li style="padding-top: 0; margin-top: 0">
              <h1><?php echo $detail["_name"] ?></h1>
            </li>
            <li class="price"><h2><?php echo $detail["price"] ?>$</h2></li>
            <?php $preDetailString = explode("/", $detail["detail"]);
              foreach ($preDetailString as $info) {
                echo " <li>$info</li>";
              }
            ?>
          </ul>
          <input class="add-to-cart" type="submit" form="option-form" value="ADD TO CART">
        </div>
      </div>
      <?php
    }
  } else {
    echo "404 NOT FOUND";
  }
?>