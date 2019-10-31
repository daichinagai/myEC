<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>ECあくせす</title>
        <script>
            function check(){
                alert('入力内容は正しいですか？');
                <?php session_unset();?>
            }
        </script>
    </head>
    <body>
        <?php
        
        session_start();
        $userName="";
        if(isset($_SESSION['userName'])){
            $userName=$_SESSION['userName'];
        }
        if(isset($_SESSION['loginError'])){
            $loginError=$_SESSION['loginError'];
        }
        
        ?>
        <header>
            <h1>ECあくせす</h1>
            <ul>
                <a href="index.html"><li id="menu">トップ</li></a>
                <a href="login.php"><li id="this">ログイン</li></a>
                <a href="newaccount"><li id="menu">新規会員登録</li></a>
            </ul>
        </header>
        <main>
            <h1>ログイン画面</h1>
            <p>以下の情報をご入力ください。</p>
            <?php
            if(isset($loginError)){
            echo $loginError;
            }?>
            <form action="../action/loginAction.php" method="post">
                <table align="center">
                    <tr>
                        <th>ユーザ名</th>
                        <td><input name="userName" type="text" placeholder="ユーザ名" size="25" required="required"  value="<?php echo $userName; ?>"> </td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td><input name="password" type="password" placeholder="パスワード" size="25" required="required"></td>
                    </tr>
                </table>
                <input type="submit" value="ログイン" onclick="check()">
            </form>
        </main>
    </body>