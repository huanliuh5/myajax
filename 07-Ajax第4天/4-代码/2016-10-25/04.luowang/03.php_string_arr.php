<?php 
	header('content-type:text/html; charset= utf-8');
	// 读取json文件  string   
	$jsonString = file_get_contents('data/info.json');

	// 转化为 php中数组  array
	$phpArr = json_decode($jsonString); // 解码 将字符串 转化为 php中对象

	// print_r($phpArr); // 测试通过

	// 从数组中 随机获取一个值
	/*
		获取一个随机的index
		使用这个随机的index 获取 一个对应值
	*/
	$randomKey = array_rand($phpArr,1);

	// 使用随机的key 获取 对应的值  获取到的是一个 php中对象
	$php_obj = $phpArr[$randomKey];

	// 输出一个换行 为了测试
	// echo "<br>";

	// echo $value;
	// print_r会将 php中的 对象或者数组的值 转化为字符串进行传递
	// print_r($value);

	// 将 获取到的 php对象 转化为 json格式的字符串 {"name":"jack","age":"18"};
	echo  json_encode($php_obj);
 ?>