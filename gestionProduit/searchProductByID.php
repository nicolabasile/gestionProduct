<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">

<label for="id_product">Id du produit à rechercher :</label>
<input type="number" name="id_product">
<input type="submit" name="submit" value="Rechercher">

</form>

<?php

require_once('utils/DBconnect.php');
require_once('dao/productdao.php');
require_once('dao/imp/iproductimp.php');
require_once('model/Product.php');
if ($_SERVER['REQUEST_METHOD']=='GET'){
if (isset($_GET['id_product'])) {
    $id= $_GET['id_product'];
    $result = $productdao->getproductByid($id);


}
}


?>
</body>
</html>