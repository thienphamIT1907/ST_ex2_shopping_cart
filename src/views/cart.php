<div class="back-button">
  <a href="index.php"> &#10150; Back</a>
</div>
<div class="table-users">
  <div class="header">Your Cart</div>

  <table cellspacing="0">
    <tr>
      <th>Image</th>
      <th>Name</th>
      <th>Color</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Delete</th>
    </tr>

    <?php
      if (isset($_SESSION["cart_item"])) {
        $totalQuantity = 0;
        $totalPrice = 0;
        foreach ($_SESSION["cart_item"] as $item) {
          $itemPrice = $item["quantity"] * $item["price"];
          ?>
          <tr>
            <td><img src="./public/images/<?php echo $item["img"] ?>" alt="item.jpg" style="width:50px;"></td>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo $item["color"]; ?></td>
            <td><?php echo $item["quantity"]; ?></td>
            <td><?php echo $item["price"]; ?></td>
            <td>
              <a href="index.php?act=remove&id=<?php echo $item["id"] ?>"> &#128465;</a>
            </td>
          </tr>
          <?php
          $totalQuantity += $item["quantity"];
          $totalPrice += ($item["price"] * $item["quantity"]);
        }
      }
    ?>
    <tr>
      <td colspan="2" align="right">Total:</td>
      <td ><?php echo $totalQuantity; ?></td>
      <td align="right" colspan="2"><strong><?php echo "$ " . $totalPrice; ?></strong></td>
      <td></td>
    </tr>
  </table>
</div>