<?php 
	header('content-type:text/html; charset= utf-8');
	// php 作为 非常方便, "最好的语言"
	// 基本上你能够想到的功能 在php中都有 对应的方法

	// 获取 数组的长度 count(数组) 返回 数组的长度 给我们
	

	$nameArr = array('葫芦娃','黑猫警长','巴拉巴拉小魔仙','熊出没');

	echo count($nameArr);

	// 循环数组 没有.length属性 通过count获取数组长度
	for ($i=0; $i <count($nameArr) ; $i++) { 
		echo $nameArr[$i].'<br>';
	}


	// 关系型数组
	$food = array('name'=>'西兰花炒蛋','cailiao1'=>'西兰花','cailiao2'=>'鸡蛋','color'=>'yellowgreen');

	// 循环 for in
	/*
		参数1:想要循环的 关系型数组
		参数2:关系型数组的 key 键
		参数3:key对应的value
	*/
	foreach ($food as $key => $value) {
		echo $key.'|||||'.$value.'<br>';
	}

 ?>