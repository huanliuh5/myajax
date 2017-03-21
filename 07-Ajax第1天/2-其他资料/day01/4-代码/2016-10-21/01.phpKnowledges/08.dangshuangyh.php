<?php 
	// 如果只是 想要单纯的输出或者定义字符串 当双引号没有区别
	$str1 = '123';
	$str2 ="456";

	echo $str1.'<br>';
	echo $str2.'<br>';


	// 如果 双引号中 使用的 字符串名 刚好跟 一个变量的名字 一样 那么 会将变量的值 替换进去
	$foodName = 'westfloweregg';

	echo "$foodName";// 双引号
	echo '<br>';
	echo '$foodName'; // 单引号


	/*测试 代码段*/
	/*
	你好,我叫${1:name},我喜欢吃的东西是${2:foodName}
	你好,我叫name,我喜欢吃的东西是foodName
	你好,我叫西兰花,我喜欢吃的东西是炒蛋
	你好,我叫name,我喜欢吃的东西是foodName

	header('content-type:text/html; charset= utf-8');

	header('content-type:text/html; charset= utf-8');
	*/
 ?>