<?php 

	// 传入的文本 需要记忆 ,错了一个字母都不行
	header('content-type:text/html; charset= utf-8');

	echo '123';
	echo "<br>"; 
	$arr = array(1,2,3,4);
	for ($i=0; $i <4 ; $i++) { 
		echo $arr[$i];
		echo "<br>";
	}

	// 关系型数组 只能通过 key 进行获取 如果传入 错误的或者没有的key 会报错 错误信息中有 Undefined
	$person = array('name' => '牛肉板面','price'=>'10元');

	// echo $person[1]; 这样是错误的 使用了 未定义的key

	echo $person['name'];
	echo "<br>";

	// 关系型数组
	$nameArr = array(0=>'jack',1=>'rose',2=>'iceMountain');

	echo $nameArr[1];

 ?>