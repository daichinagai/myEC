<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>ECあくせす</title>
    </head>
    <body>
        <header>
            <h1>ECあくせす</h1>
                <ul>
                    <a href="userTop.php"><li id="">トップ</li></a>
                    <a href="daily.php"><li id="menu">日用品</li></a>
                    <a href="food.php"><li id="menu">食品</li></a>
                    <li id="this">セール品</li>
                    <a href="logout.php"><li id="menu">ログアウト</li></a>
                </ul>
        </header>
        <main>
            <?php
            require_once('../action/searchAction.php');
                $pg=new search;
                $result=$pg->Product(3);
                while($row=$result->fetch()){
                    echo '<a id="PL" href="detail.php"><div id="list">
                        <img id="productList" src="../img/'.$row['photo'].'" height="100px" width="150px">
                        <p>商品名：'.$row['name'].'<br>価格：'.$row['sellPrice'].'円</p>
                        </div></a>';
                }
            ?>
        </main>
        