<?php 
	header('content-type:text/html; charset= utf-8');

	// 获取发送的值
	$sendMessage = $_POST['message'];

	switch ($sendMessage) {
		case '你好':
			// 返回一个默认值
			$messages = array(
					'好你个头',
					'ni hao',
					'阿尼阿瑟哟',
					'萨瓦迪卡'
				);
			// 想办法从中 获取一个值
			/*
				参数1:随机的数组
				参数2:取几个
			*/
			// 保存随机的可以
			$randomKey = array_rand($messages,1);
			echo  $messages[$randomKey];
			break;
			
		default:
			// 返回一个默认值
			$messages = array(
					'想吃点什么,跟我说,做给你吃',
					'怎么还不走,天天这么晚睡,这么晚起来',
					'记得穿秋裤,不要着凉了',
					'你不能吃辣,不能吃海鲜,不能吃油腻的食物',
					'你想吃点什么,就吃点什么'
				);
			// 想办法从中 获取一个值
			/*
				参数1:随机的数组
				参数2:取几个
			*/
			// 保存随机的可以
			$randomKey = array_rand($messages,1);
			echo  $messages[$randomKey];
			break;
	}
	
 ?>