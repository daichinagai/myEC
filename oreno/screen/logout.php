<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="3;URL=index.html">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>ECあくせす</title>
    </head>
    <body>
    <?php
        session_start();
        session_unset();
        $_SESSION['loginError']="ログアウトしました。";
        header('Location:login.php');
    ?>

        