<?php

interface Iproductdao{
    function saveProduct($name, $numproduit, $price, $description) : bool;
    function getAllproduct() : array;
    function updateProduct($name, $numproduit, $price, $description,$id) : bool;
    function deleteProduct($id) : bool;
    function getProductById($id) : array;
    function getProductsByName($name) : array;
    function getProductsByPriceIn($minPrice, $maxPrice) : array ;


}