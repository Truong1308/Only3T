<?php
require_once('./entities/product.class.php');
?>

<?php
include_once("header.php");
$prod = Product::list_product();

foreach ($prod as $item) {
  echo "<p>Tên sản phẩm" . $item["ProductName"] . "</p>";
}
include_once("footer.php");
?>

