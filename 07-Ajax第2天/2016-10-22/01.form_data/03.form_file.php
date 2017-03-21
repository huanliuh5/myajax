<?php 
	// 处理 上传的文件
	// 如果是上传文件那么 $_POST中是有值的 但是 我们只能够获取到 上传文件的 名字而已
	// print_r($_POST);

	// $_FILES 获取上传的文件的 超全局对象 (关系型数组)
	// 最外层的 关系数组
	print_r($_FILES);
	
	// 让php代码 停顿一会 传入的值 是秒
	sleep(1);

	// print_r($_FILES['starImg']);

	// Array ( [name] => 鑺卞簵.png [type] => image/png [tmp_name] => D:\wamp\tmp\php74.tmp [error] => 0 [size] => 245025 )


	// 首先获取上传的  key 对应的文件
	$starImage = $_FILES['starImg'];

	// 移动的文件
	$moveFilePath = $starImage['tmp_name'];

	// 想要放置的位置   updateFiles/鑺卞簵.png
	$toFilePath =  'updateFiles/'.$starImage['name'];
	// 移动 上传的文件
	/*
		参数1:想要移动的 文件
		参数2:将移动的文件 保存到什么位置
	*/
	move_uploaded_file($moveFilePath,$toFilePath);
 ?>