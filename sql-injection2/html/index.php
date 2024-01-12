<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>秘密のメモ管理サイト2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>

    <script>
        function escapeInput(input) {
            var map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;',
                "`": '&#x60;',
                ";": '&#59;',
                "\\": '&#92;',
                "%": '&#37;',
                "_": '&#95;',
                ",": '&#44;',
                "(": '&#40;',
                ")": '&#41;'
            };
            return input.replace(/[&<>"';`\\%_,()]/g, function(m) { return map[m]; });
        }

        function handleFormSubmit(event) {
            event.preventDefault(); // フォームのデフォルトの送信を防ぐ

            //表示フォームの値を取得
            var nameInput = document.getElementsByName("name-form")[0].value;
            var passwordInput = document.getElementsByName("password-form")[0].value;

            // エスケープされた値を非表示の入力フィールドに設定
            document.getElementsByName("name")[0].value = escapeInput(nameInput);
            document.getElementsByName("password")[0].value = escapeInput(passwordInput);

            // エスケープされた値を持つ非表示のフォームを送信
            document.getElementById("hiddenForm").submit();
        }
    </script>

    <body>
        <h1>秘密のメモ管理サイト2</h1>
        <p>
            このページでは正しい名前とパスワードを入れることでその人のメモを表示します。<br>
            例としてユーザー名: <font color="red">Bob</font>, パスワード: <font color="red">D8GwwPx9e2T3</font> を入力してみてください。<br>
            不正な入力を防ぐため、特定の記号はエスケープ処理され送信されます。
        </p>

        <form onsubmit="handleFormSubmit(event)">
            <input type="text" name="name-form" placeholder="ユーザー名を入力"><br>
            <input type="text" name="password-form" placeholder="パスワードを入力"><br>
            <input type="submit" value="ログイン" class="submit-btn">
        </form>

        <form id="hiddenForm" method="POST" action="" style="display:none;">
            <input type="hidden" name="name" value="">
            <input type="hidden" name="password" value="">
        </form>
    </body>
</html>



<?php
$dsn = "mysql:dbname=sql-injection;host=mysql;charset=utf8mb4";
$db_user = "user";
$db_password = "user025pass";

if(!empty($_POST)){
	$name = $_POST['name'];
	$password = $_POST['password'];
	try{
		$dbh = new PDO($dsn, $db_user, $db_password);
		$sql = $dbh->prepare('SELECT * FROM userlist WHERE name=\'' . $name . '\' AND password=\'' . $password . '\' ;');
		$sql->execute();
		
		$result = $sql->fetch(PDO::FETCH_ASSOC);
		if ($result) {
			echo "<table>\n";
			echo "<tr><th>id</th><th>name</th><th>memo</th></tr>\n";
			do {
				echo "<tr>\n<td>". $result['id'] . "</td>\n";
				echo "<td>" . $result['name'] . "</td>\n";
				echo "<td>" . $result['memo'] . "</td>\n</tr>\n";
			} while ($result = $sql->fetch(PDO::FETCH_ASSOC));
			echo "</table>\n";
		} else {
			echo "<p>ユーザー名またはパスワードが違います。</P>";
		}
	}catch(PDOException $e){
		//コメントを解除でエラー文をweb上に表示
		//print($e->getMessage());
	}finally{
		$dbh = null;
	}
}
?>


