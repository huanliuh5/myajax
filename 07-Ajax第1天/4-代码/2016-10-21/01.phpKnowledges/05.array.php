<?php 
	header('content-type:text/html; charset= utf-8');
	// php中的普通数组  
	//  var arr = [1,2,3,'fox','jack','rose'];  arr[4];

	// php中的写法 跟js类似 能够一直往里面添加元素,类型是不限制的
	$peopleArr = array(1,2,3,'jack','rose','iceMountain',false);

	// 获取 数组中的元素
	echo $peopleArr[5];

	echo "<br>";

	// php中的 关系型数组 取值的时候 使用key 
	// 这里的=> 可以想象成 js中的 :
	// {name:'jack',age:18};
	$cartoonPerson = array('name' =>'喜洋洋' ,'friend'=>'懒洋洋','skill'=>'思考' );

	echo $cartoonPerson['friend'];

	echo "<br>";


 ?>