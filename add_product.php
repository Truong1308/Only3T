<?php
require_once("./entities/product.class.php");


if (isset($_POST["btnsubmit"])) {
  //Get value from collection form
  $productName = $_POST["txtName"];
  $cateID = $_POST["txtCateID"];
  $price = $_POST["txtprice"];
  $quantity = $_POST["txtquantity"];
  $description = $_POST["txtdesc"];
  $picture = $_POST["txtpic"];

  $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);
  $result = $newProduct->save();

  if (!$result) {
    header("Location: add_product.php?failure");
  } else {
    header("Location: add_product.php?inserted");
  }
}
?>

<?php
if (isset($_GET["inserted"])) {
  echo "<h2>Thêm sản phẩm thành công</h2>";
}
?>

<form method="post">
  <div class="row">
    <div class="lbltitle">
      <label for="">Tên sản phẩm</label>
    </div>
    <div class="lblinput">
      <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />
    </div>
  </div>
  <div class="row">
    <div class="lbltitle">
      <label for="">
        Mô tả sản phẩm
      </label>
    </div>
    <div class="lblinput">
      <textarea name="txtdesc" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>" cols="21" rows="10"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="lbltitle">
      <label for="">
        Số lượng
      </label>
    </div>
    <div class="lblinput">
      <input type="number" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>" cols="21" rows="10"></input>
    </div>
  </div>
  <div class="row">
    <div class="lbltitle">
      <label for="">
        Giá
      </label>
    </div>
    <div class="lblinput">
      <input type="number" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>" cols="21" rows="10"></input>
    </div>
  </div>
  <div class="row">
    <div class="lbltitle">
      <label for="">
        Loại sản phẩm
      </label>
    </div>
    <div class="lblinput">
      <input type="number" name="txtCateID" value="<?php echo isset($_POST["txtCateID"]) ? $_POST["txtCateID"] : ""; ?>" cols="21" rows="10"></input>
    </div>
  </div>
  <div class="row">
    <div class="lbltitle">
      <label for="">
        Hình ảnh
      </label>
    </div>
    <div class="lblinput">
      <input type="text" name="txtpic" value="<?php echo isset($_POST["txtpic"]) ? $_POST["txtpic"] : ""; ?>" cols="21" rows="10"></input>
    </div>
  </div>

  <div class="row">
    <div class="submit">
      <input type="submit" name="btnsubmit" value="Thêm sản phẩm" />
    </div>
  </div>
</form>
<?php include_once("footer.php"); ?>