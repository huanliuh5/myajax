<?php 
	header('content-type:text/html; charset= utf-8');
	// get请求发送的参数
	echo  '你的名字是:'.$_GET['name'].'你的年龄是:'.$_GET['age'];

 ?>