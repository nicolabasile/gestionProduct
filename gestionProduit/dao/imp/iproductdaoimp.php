<?php
class Iproductdaoimp implements IproductDao{
    private PDO $conn;
    public function __construct(){
        $this->conn = DBconnect::getInstance(
            "mysql:host=localhost;dbname=gestiondeproduit",
        "root",
        "")->getConnexion();
    }
    public function saveProduct($name, $numproduct, $price, $description) : bool{
        
    
        try {
            
            $query = "INSERT INTO produits (name, numProduct, price, description) VALUES (:name, :numProduct, :price, :description)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':numProduct', $numproduct);
            $stmt->bindValue(':price', $price);
            $stmt->bindValue(':description', $description);
            $stmt->execute();
            echo "produit ajouté avec succès";
            return true;
        } catch (PDOException $e) {
        echo "une erreur est survenue: ";
        }

        return false;
    }
    public function getAllproduct() : array{
        return array();
    }
    public function updateProduct($name, $numproduit, $price, $description,$id) : bool{
        return false;
    }
    public function deleteProduct($id) : bool{
        try {
            
            $query = "DELETE FROM product WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":id", $id);           
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
           
            echo $e->getMessage();
        }

                return false;
    }
       
    
    public function getProductById($id) : array{
        $result = [];
        try {
           
            $query = "SELECT * FROM product WHERE id = :id";
        
            $stmt = $this->conn->prepare($query);            
            $stmt->bindValue(':id', $id);            
            $stmt->execute();            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            
            echo $e->getMessage();
        }      
         

        return array();
    }
    public function getProductsByName($name) : array{
        $result = [];
        try {
           
            $query = "SELECT * FROM product WHERE like = :name";
        
            $stmt = $this->conn->prepare($query);            
            $stmt->bindValue(':name'.'%', $name.'%');            
            $stmt->execute();            
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            
            echo $e->getMessage();
        }      
        return $result;
    }
    public function getProductsByPriceIn($minPrice, $maxPrice) : array {
        $result = [];
        try {
           
            $query = "SELECT * FROM product WHERE price between :minPrice and :maxPrice ";
        
            $stmt = $this->conn->prepare($query);            
            $stmt->bindValue(':minPrice', $minPrice); 
            $stmt->bindValue(':maxPrice', $maxPrice);           
            $stmt->execute();            
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            
            echo $e->getMessage();
        
    }
    return $result;



}}