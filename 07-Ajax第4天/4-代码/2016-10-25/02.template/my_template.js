/*  抽取为一个方法
	为了 替换 模板中的 {name}这类文字
	参数1:使用模板 既挖好坑的 字符串 {name} 这样的
	参数2:对象
 */
function my_template(templateString, obj) {
	// 定义正则
	var reg = /{(\w+)}/;

	// 查找并替换 需要通过循环的方式 去确定次数
	var result;
	// 这里只写了一个=号 会先将括号中的 代码执行掉 判断正则验证完毕之后的结果 如果为null 跳出
	while (result = reg.exec(templateString)) {
		// 进行替换  0:{name}  1:name
		// 从结果中获取 替换的文本 以及 属性的名字
		var replaceString = result[0];
		var key = result[1];

		// 替换我们传入的 这个 模板字符串
		templateString = templateString.replace(replaceString, obj[key]);
	}

	// 如果能够执行到这里 说明 替换完毕了
	// console.log(templateString);

	// 放心大胆的 return
	return templateString;
}
