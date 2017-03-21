<?php 
	header('content-type:text/html; charset= utf-8');
	// 循环 for  while dowhile  forin

	// for循环
	/*
	for(var i =0;i<10;i++){

	}
	*/
	for ($i=0; $i <10 ; $i++) { 
		echo '西兰花炒蛋';
		echo "<br>";
	}

	// while循环
	$count = 0;
	while ( $count<= 10) {
		// php中 如果要字符串拼接 使用的是  .   
		echo '爱吃水果和青菜,蹦蹦跳跳好可爱'.$count;
		echo "<br>";
		$count++;
	}

	// do while 循环

 ?>