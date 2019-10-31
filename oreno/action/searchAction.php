<?php
   class search{
        public function Product($category){
            $pdo=new PDO("mysql:host=localhost;dbname=product;charset=utf8","root","mysql");
            $stmt=$pdo->prepare('SELECT * FROM product WHERE category=?');
            $stmt->execute(array("$category"));
            return $stmt;
            
        }
    }
?>