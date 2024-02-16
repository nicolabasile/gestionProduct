<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
       
        <label for="name">name</label>
        <input type="text" name="name"> <br>
        <label for="numProduct">numProduct</label>
        <input type="text" name="numProduct"> <br>
        <label for="Price">Price</label>
        <input type="number" name="Price"> <br>
        <label for="description">description</label>
        <input type="text" name="description"> <br>

        <input type="submit" value="Creer">
    </form>

    <?php
 
 require_once('utils/DBconnect.php');
 require_once('dao/productdao.php');
 require_once('dao/imp/iproductimp.php');

 $productdao = new iproductdaoimp();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Vérification si les champs requis sont présents dans la requête
        if (
            isset($_POST['name'])
            && isset($_POST['numProduct'])
            && isset($_POST['Price'])
            && isset($_POST['description'])
        ) {
            
            $name = $_POST['name'];
            $numProduct = $_POST['numProduct'];
            $Price = $_POST['Price'];
            $description= $_POST['description'];

            $productdao->saveProduct($name, $numproduct, $Price,$description);
        }
    }
?>
</body>

</html>