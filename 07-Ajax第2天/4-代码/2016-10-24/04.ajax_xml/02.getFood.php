<?php 
	// 设置返回的类型为 xml
	header('content-type:text/xml; charset= utf-8');

	// 读取 并返回
	echo file_get_contents('info/foods.xml');

 ?>