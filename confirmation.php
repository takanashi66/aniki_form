<?php
	
	//関数：htmlspecialchars
	function hsc($str){
		 return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}
	
	//エラーメッセージの配列
	$error = array();
	
	if(!$_POST){
		header("location: error.php");
		exit();
		
	}else{
		
		$name = hsc($_POST['name']);
		if(empty($name)){
			//エラーだったらメッセージを配列に入れる
			$error['name'] = "値が空です!!!";
		}
		
		$mail = hsc($_POST['mail']);
		if(empty($mail)){
			//エラーだったらメッセージを配列に入れる
			$error['mail'] = "値が空です!!!";
						
		}else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+\.([a-zA-Z]{2,3})$/", $mail)){
			//エラーだったらメッセージを配列に入れる
			$error['mail'] = "メールの形式が正しくありません!!!";
		}
		
		$gender = hsc($_POST['gender']);
		
		switch($gender){
			case "male":
				$gender = "男";
				break;
				
			case "female":
				$gender = "女";
				break;
				
			default:
			//エラーだったらメッセージを配列に入れる
				$error['gender'] = "値が空です!!!";
				break;
		}
	}
	
	//連想配列のキーを変数にして、値を入れる
	foreach ($_POST as $key => $val)
	{
		//$keyの前に$をつけると配列のkeyを変数として宣言できる
		 $$key = $val;
	}
	
	if(count($error) === 0){
		//エラーがなければ確認画面(confirmation_view.php)を表示
		require_once 'confirmation_view.php';
	}else{
		//エラーがあればフォーム(index.php)に戻る
		require_once 'index.php';
	}