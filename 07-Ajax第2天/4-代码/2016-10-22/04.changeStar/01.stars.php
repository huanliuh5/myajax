<?php 
	// 创建一个 关系型数组
	$stars =  array('jl' =>'imgs/jialing.jpg' ,'gyy'=>'imgs/gaoyuanyuan.jpg','zj'=> 'imgs/zhangjie.jpg');

	// 01.stars.php?starName=gyy
	// 获取$_GET提交的数据
	$key = $_GET['starName'];

	// 使用key 从数组中取出值 并返回
	echo $stars[$key];
 ?>