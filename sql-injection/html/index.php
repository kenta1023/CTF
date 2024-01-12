<!DOCTYPE html>
<html>

	<head>
		<meta charaset="utf-8">
		<title>秘密のメモ管理サイト</title>
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<h1>秘密のメモ管理サイト</h1>
		<p>
			このページでは正しい名前とパスワードを入れることでその人のメモを表示します。<br>
			例としてユーザー名:<font color="blue">Bob</font>,パスワード:<font color="blue">D8GwwPx9e2T3</font>を入力してみてください。<br>
		</p>
		<form method="POST" action="">
			<input type="text" name="name" placeholder="ユーザー名を入力"><br>
			<input type="text" name="password" placeholder="パスワードを入力"><br>
			<input type="submit" value="ログイン" class="submit-btn">
		</from>
		<br>
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
			echo "ユーザー名またはパスワードが違います。";
		}
	}catch(PDOException $e){
		//コメントを解除でエラー文をweb上に表示
		//print($e->getMessage());
	}finally{
		$dbh = null;
	}
}
?>


