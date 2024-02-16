<?php
 require_once('utils/DBconnect.php');
 require_once('dao/productdao.php');
 require_once('dao/imp/iproductimp.php');

 $productdao = new iproductdaoimp();

 if(isset($_POST['id'])){
    $productdao->deleteProduct($_POST['id']);

    header('');
 }