//config配置
require.config({
	paths:{
		//js文件省略掉文件类型
		// "a":"./a"
		"jquery":"./js/jquery-1.8.1",
		"Backbone":"js/backbone",
		"underscore":"./js/underscore",
		"text":"./js/text",
		"css":"./js/css",
		"swiper":"./js/swiper.min",
		"baidu":"./js/baiduTemplate"
	}
});
//使用backbone 路由
require(["jquery", "Backbone","swiper","baidu","router"], function($,Backbone){
	Backbone.history.start();
});