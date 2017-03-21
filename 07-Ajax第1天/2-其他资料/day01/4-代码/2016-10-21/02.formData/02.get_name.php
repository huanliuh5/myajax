<?php 
	header('content-type:text/html; charset= utf-8');
	// 拼接结果 $_GET 都是大写字母
	$starName = $_GET['name'];

	echo  '<h1>哎呀,你也喜欢'. $starName.'</h1>';
 ?>