<div class="main">

  <?php

    foreach ($products as $product) {
      ?>
      <a class="main__item" href="index.php?act=detail&id=<?php echo $product["id"] ?>">
        <img class="product-img"
             src="./public/images/<?php echo $product["img"] ?>"
             alt="macbook">
        <div class="info">
          <span><?php echo $product["_name"] ?></span>
          <span class="info__price"><?php echo $product["price"] ?>$</span>
        </div>
      </a>
      <?php
    }
  ?>
</div>


