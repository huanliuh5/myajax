// 将get 跟post进行合并
/*	
	优化参数的传递 用户只需要 传递一个 参数即可
		改参数是对象
		工具函数中 直接使用 对象的属性即可
	将 中文内容 替换为 对应的 参数
	参数1:method 请求的方法
	参数2:data 发送的数据
	参数3:url 请求的url
	参数4;success 请求成功之后 调用的 函数 
*/
function ajax_total(option) {
	// 1.创建
	var ajax = new XMLHttpRequest();

	// 判断 请求的方法
	if (option.method=='get') {
		// 判断 是否需要传递数据
		if (option.data) {
			// xxx.php?name=jack
			option.url+='?';
			option.url+=option.data

			// open 并发送
			ajax.open(option.method,option.url);
			ajax.send();
		}else{
			//没有数据 直接url即可
			ajax.open(option.method,option.url);
			ajax.send();
		}
	}else{
		// 2.open
		ajax.open(option.method,option.url);

		// 设置 content-type
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 3.send
		ajax.send(option.data)
	}

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);

			// 调用 作为 参数 传递进来的 success
			option.success(ajax.responseText);

		}
	}
}


// 将 自己封装的方法 添加到 一个对象中
/*	
	提醒用户 不要定义my_$
	1.不会被轻易的覆盖
	2.添加多个
		调用的时候 比较统一  
					my_$.ajax_total
		 			my_$.ajax_get
		 			my_$.ajax_post

	命名空间:
		my_$  在这里 称之为 命名空间
*/
var my_$ = {
	ajax_total:function(option){
		// 1.创建
	var ajax = new XMLHttpRequest();

	// 判断 请求的方法
	if (option.method=='get') {
		// 判断 是否需要传递数据
		if (option.data) {
			// xxx.php?name=jack
			option.url+='?';
			option.url+=option.data

			// open 并发送
			ajax.open(option.method,option.url);
			ajax.send();
		}else{
			//没有数据 直接url即可
			ajax.open(option.method,option.url);
			ajax.send();
		}
	}else{
		// 2.open
		ajax.open(option.method,option.url);

		// 设置 content-type
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 3.send
		ajax.send(option.data)
	}

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);

			// 调用 作为 参数 传递进来的 success
			option.success(ajax.responseText);

		}
	}
	}
}
