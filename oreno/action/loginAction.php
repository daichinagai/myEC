<?php
        session_start();
        $name=$_POST['userName'];
        $pass=$_POST['password'];

        $_SESSION['userName']=$name;
        $pdo=new PDO("mysql:host=localhost;dbname=ecsite;charset=utf8","root","mysql");
        $stmt=$pdo->query("select * from account WHERE userName='".$name."';");

        while($row=$stmt->fetch()){
            if($row['password']==$pass){
                $_SESSION=array();
                $_SESSION['name']=$name;
                $_SESSION['loginFlg']=1;
                header('Location:../screen/userTop.php');
            }else{
                $_SESSION['loginError']="ユーザ名かパスワードが間違っています。";
                header('Location:../screen/login.php');
            }
        }
?>