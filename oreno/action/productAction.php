<?php
class product{
    function __construct(){
        $pdo->new PDO("mysql:host=localhost;dbname=product","root","mysql");
	}
    
    function searchCategory(){
        $stmt=$pdo->prepare("select * from product WHERE category=?");
        $stmt->bindValue($_POST['category']);
        $stmt->query();
    }
    
    function searchName(){
        $stmt=$pdo->prepare("select * from product WHERE category LIKE '%?%'");
        $stmt->bindValue($_POST['keyword']);
        $stml->query();
    }
}

