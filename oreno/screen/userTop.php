<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        slideWidth: 600
      });
    });
    </script>
        <title>ECあくせす</title>
    </head>
    <body>
        <header>
            <h1>ECあくせす</h1>
            <ul>
                <li id="this">トップ</li>
                <a href="daily.php"><li id="menu">日用品</li></a>
                <a href="food.php"><li id="menu">食品</li></a>
                <a href="sell.php"><li id="menu">セール品</li></a>
                <a href="logout.php"><li id="menu">ログアウト</li></a>
            </ul>
        </header>
        <main>
            <div class="fixcenter">
                <div class="slider">
                    <div><img src="../img/donatu.jpg" title="ドーナツ" width="400px" height="300px"></div>
                    <div><img src="../img/ichigo.jpg" title="イチゴ" width="400px" height="300px"></div>
                    <div><img src="../img/hasami.jpg" title="ハサミ" width="400px" height="300px"></div>
                </div>
            </div>
            <p id="greeting">&nbsp;<?php
                    session_start();
                    $name=$_SESSION['name'];
                    echo $name;
                ?>さん、ようこそ！<?php echo $name ?>さんのために、ECアクセスでは多彩な商品を取り揃えています。特にセールでは、様々な商品をお得な価格でご案内しております。ぜひご覧ください。</p>
            <p></p>
        </main>
    </body>