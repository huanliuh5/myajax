<?php 
	// 数据代码分离
	// 读取文本 并返回
	// echo  file_get_contents('messages/totalMessages.txt');

	// 保存读取的数据
	$messagesStr = file_get_contents('messages/totalMessages.txt');

	// 为了用的方便 能够去随机获取一个值 
	// 字符串转化为数组 并且通过 ,分隔   str->array
	/*
		参数1:使用什么分隔
		参数2:分隔哪个字符串
	*/
 	$arr = explode(',',$messagesStr);

 	// print_r($arr);

 	// 随机的key
 	$randomKey = array_rand($arr,1);

 	// key对应的value 并返回
 	echo $arr[$randomKey];


 ?>