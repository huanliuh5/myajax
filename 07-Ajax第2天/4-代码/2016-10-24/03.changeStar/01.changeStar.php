<?php 
	// 获取index  取出来的是什么不重要 php中 会帮助我们自动的做类型转换
	$key = $_GET['index'];
	
	// 读取txt  string
	$starString = file_get_contents('info/stars.txt');

	// string->array
	$starArr = explode(',', $starString); 

	// 使用key 获取 对应的 值 并返回
	// 将key 传递给数组即可
	echo  $starArr[$key];
	
 ?>