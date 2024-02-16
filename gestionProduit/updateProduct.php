<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('utils/DBconnect.php');
    require_once('dao/productdao.php');
    require_once('dao/imp/iproductimp.php');
    require_once('model/Product.php');

    $productdao = new iProductDaoimp();
    $person_id = $_GET['id'];
    $result = $productdao->getProductById($product_id);
   
    $product = new Product($result['id'],$result['name'],$result['numProduct'],$result['price'],$result['description']);
    ?>
<form action="" method="post">
<label for="name">name</label>
        <input type="text" name="name"> <br>
        <label for="numProduct">numProduct</label>
        <input type="text" name="numProduct"> <br>
        <label for="Price">Price</label>
        <input type="number" name="Price"> <br>
        <label for="description">description</label>
        <input type="text" name="description"> <br>

        <input type="submit" value="mettre a jour">

</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $numProduct = $_POST['numProduct'];
    $productdao->updateProduct($product_id,$name,$description,$price,$numProduct);  

    header("Location: selectionPDO.php");
}
?>
</body>
</html>
