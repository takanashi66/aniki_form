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
	
	<?
		//$errorかつエラーがあれば
	 	if(isset($error) and count($error) > 0){
		  foreach($error as $key => $val) {
			  //エラーメッセージ表示
			  echo $key.': '.$val."<br>";
	  	}
		}
	?>

	<form action="confirmation.php" method="post">
		<label for="name">名前：</label><input type="text" name="name" id="name" value="<? echo isset($name) ? $name : ''; //値があれば値を戻す ?>" />
		<br />
		<label for="mail">メールアドレス：</label><input type="email" name="mail" id="mail" value="<? echo isset($mail) ? $mail : ''; //値があれば値を戻す　?>" />
		<br />
		<label for="male">男：</label><input type="radio" name="gender" id="male" value="male" 
			<? //値があるかつmaleだったら　チェックする
				if(isset($gender) && $gender == "male"){
					echo "checked";
				} ?>
		/>
		<label for="female">女：</label><input type="radio" name="gender" id="female" value="female" 
			<? //値があるかつfemaleだったら　チェックする
				 if(isset($gender) && $gender == "female"){
					echo "checked";
				} ?> 
		/>
		<br />
		<input type="submit" value="送信" />
	</form>
	
</body>
</html>