//  ajax_get
function ajax_get() {
	// 1.创建
	var ajax = new XMLHttpRequest();
 
	// 2.open
	// 如果 有数据
	if (数据) {
		// 修改url 为 xxx.php?+数据
		请求的url= 请求的url+"?"+数据;
		ajax.open('get',请求的url)
	}
	else{
		// 如果 没有数据
		ajax.open('get',请求的url);
	}

	// 3.send
	ajax.send();

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState ==4&&ajax.status==200) {
			console.log(ajax.responseText);
		}
	}

}


// ajax_post
function ajax_post() {
	// 1.创建
	var ajax = new XMLHttpRequest();
	// 2.open
	ajax.open('post',请求的url);

	// 设置 content-type
	ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

	// 3.send
	ajax.send(发送的数据)

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState==4&&ajax.status==200) {
			console.log(ajax.responseText);
		}
	}

	
}


// 将get 跟post进行合并
/*
	思路分析
*/
function ajax_chinese_parm() {
	// 1.创建
	var ajax = new XMLHttpRequest();

	// 判断 请求的方法
	if (方法=='get') {
		// 判断 是否需要传递数据
		if (数据) {
			// xxx.php?name=jack
			请求的url+='?';
			请求的url+=数据

			// open 并发送
			ajax.open(方法,请求的url);
			ajax.send();
		}else{
			//没有数据 直接url即可
			ajax.open(方法,请求的url);
			ajax.send();
		}
	}else{
		// 2.open
		ajax.open(方法,请求的url);

		// 设置 content-type
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 3.send
		ajax.send(发送的数据)
	}

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState==4&&ajax.status==200) {
			console.log(ajax.responseText);
		}
	}
}


// 将get 跟post进行合并
/*
	将 中文内容 替换为 对应的 参数
	参数1:请求的方法
	参数2:发送的数据
	参数3:请求的url 
	参数4;请求成功之后 调用的 函数 
*/
function ajax_total(method,data,url,success) {
	// 1.创建
	var ajax = new XMLHttpRequest();

	// 判断 请求的方法
	if (method=='get') {
		// 判断 是否需要传递数据
		if (data) {
			// xxx.php?name=jack
			url+='?';
			url+=data

			// open 并发送
			ajax.open(method,url);
			ajax.send();
		}else{
			//没有数据 直接url即可
			ajax.open(method,url);
			ajax.send();
		}
	}else{
		// 2.open
		ajax.open(method,url);

		// 设置 content-type
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 3.send
		ajax.send(data)
	}

	// 4.事件
	ajax.onreadystatechange = function () {
		// 5.判断并使用
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);

			// 调用 作为 参数 传递进来的 success
			success(ajax.responseText);
		}
	}
}