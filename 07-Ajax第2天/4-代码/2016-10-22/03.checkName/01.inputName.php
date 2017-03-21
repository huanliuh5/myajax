<?php 
	// 判断是否等于 西兰花
	// 获取用户名
	$userName = $_GET['userName'];

	// 判断并返回不同的结果
	if ($userName=='西兰花君') {
		echo 'you can not use';
	}else{
		echo "you can use";
	}

 ?>