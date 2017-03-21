<?php 
	// php中 有一个叫做 header的方法 能够接受参数 
	// 能够用来设置 浏览器解析的 编码格式
	// header('contentType:text/html,harset=utf-8');
	
	// 为了方便调用 可以设置为 代码块
	header('content-type:text/html; charset= utf-8');

	// js中的 方法调用
/*
function sayHI (data){
	console.log(data);
}

sayHI('西兰花');

alert('西兰花炒蛋好好吃');
*/

	$day = '星期六';
	// 选择语句
	switch ($day) {
		case '星期一':
			echo '上课听讲';
			break;
		case '星期二':
			echo '依旧精神饱满的上课';
			break;
		case '星期三':
			echo '精神饱满的自习';
			break;
		case '星期六':
			// echo 'sleep late good good study';
			echo '睡个懒觉 继续自习';
			break;
		default:
			# code...
			break;
	}


	echo "<br>";

	$foodName = '西兰花炒蛋';
	// if else 跟js一样
	if ($foodName=='西兰花炒蛋') {
		echo "哈哈哈,你们买不到";
	}else{
		echo '门口小摊上的东北大饼';
	}

 ?>


