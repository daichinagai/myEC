<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>ECあくせす</title>
    </head>
    <body>
        <?php
        session_start();
        $familyName=$_SESSION['familyName'];
        $firstName=$_SESSION['firstName'];
        $address=$_SESSION['address'];
        $pass=$_SESSION['pass'];
        $userName=$_SESSION['userName'];
        ?>
        <ul>
            <h1>ECあくせす</h1>
            <li id="index.html">トップ</li>
            <a href="login.php"><li id="menu">ログイン</li></a>
            <a href="this"><li id="lastmenu">新規会員登録</li></a>
        </ul>
        <h1>新規ユーザ登録</h1>
        <p>新規ユーザー登録をご希望の方は、以下の情報をご入力ください。</p>
        <form method="post" action="">
            <table id="account">
                <tr>
                    <th>姓</th>
                    <td><input name="familyName" type="text" placeholder="姓" size="25" value=$familyName required="required"></td>
                </tr>
                <tr>
                    <th>名</th>
                    <td><input name="firstName" type="text" placeholder="姓" size="25" value=$firstName required="required"></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <select name="age">
                            <option>年齢を選択</option>
                            <script>
                                for(var i=16; i<=110; i++){
                                    document.write("<option value="+i+">"+i+"歳</option>");
                                }
                            </script>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><input name="address" type="text" placeholder="姓" size="25" value=$address required="required"></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input name="pass" type="password" placeholder="7桁で入力してください。" size="25" value=$pass required="required"></td>
                </tr>
                <tr>
                    <th>ユーザ名</th>
                    <td><input name="userName" type="text" placeholder="ユーザ名" size="25" value=$userName required="required"></td>
                </tr>
            </table>
            <input type="submit" value="確認画面にすすむ">
        </form>
    </body>
</html>