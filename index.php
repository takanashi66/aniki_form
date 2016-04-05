<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<title>mailform</title>
</head>
<body>
	
	<form action="confirmation.php" method="post">
		<label for="name">名前：</label><input type="text" name="name" id="name" /><br />
		<label for="mail">メールアドレス：</label><input type="email" name="mail" id="mail" /><br />
		<label for="male">男：</label><input type="radio" name="gender" id="male" value="male" /><label for="female">女：</label><input type="radio" name="gender" id="female" value="female" /><br />
		<input type="submit" value="送信" />
	</form>
	
</body>
</html>