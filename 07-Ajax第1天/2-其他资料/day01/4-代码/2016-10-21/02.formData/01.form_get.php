<?php 
	header('content-type:text/html; charset= utf-8');
	// 输出一些基本内容
	// echo 'helloWorld';
	// 获取 提交的数据  
	// php中 为我们准备了 一个 超全局对象 $_GET
	// 会将 get 提交的数据 放置在 $_GET 这个 关系型数组中
	// array('key1'=>value1)
	// php中 另外一个 输出的方式 
	// print_r($_GET);


	// 获取 用户名以及密码 
	// key 是 表单元素的 name属性
	$userName = $_GET['name'];
	$userPass = $_GET['pass'];

	// 判断
	if ($userName=='tom'&&$userPass=='1234') {
		echo "<h1>恭喜你登陆成功</h1>";
	}else{
		echo "<h1>哥们,先注册吧^_^</h1>";
	}
	
 ?>