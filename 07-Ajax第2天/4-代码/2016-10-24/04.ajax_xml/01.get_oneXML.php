<?php 

	// 通过header方法 设置返回的内容是xml
	header('content-type:text/xml; charset= utf-8');

	// 读取xml
	$xmlString = file_get_contents('info/oneStar.xml');

	// 返回给浏览器
	echo $xmlString;

 ?>