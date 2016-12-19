define(["text!./home.html","css!./home.css","../../js/jquery.lazyload.min.js"], function(homePage){
	return{
		init : function(){
			$(".home").html(homePage).show().siblings("div").hide();
			$(function(){
				//ajax请求首页
				$.get("data/homeData.json",{},callbackHome);
			});
		},
	}
});

function callbackHome(requestData){
	$("#tmp").load("templete/homeTmp.html",function(){
		var htmlStr = baidu.template("homeTmp",requestData);
		$("#homeId").html(htmlStr);
		$("#tmp").empty();
		$("img.lazy").lazyload();
		var mySwiper = new Swiper('.swiper-container', {
			autoplay: 2000,
			loop : true,
			pagination : '.swiper-pagination',
			mousewheelControl : true,
			autoplayDisableOnInteraction : false,
		  	});
		var num = parseInt($(".dogdiv").text());
			$(".home-main4_3").on("click",".home-main4_dd",function(e){
				var x = ((e.clientX)/100-1)+"rem";
				var y = ((e.clientY)/100-2.1)+"rem";
				var lis = $(this).parent().find("img").clone();
				lis.appendTo($("body"));
				lis.css({"position":"fixed","left":x,"top":y});
				lis.addClass("one");
				setInterval(function(){
					lis.remove();
				},1000);
				num+=1;
				$(".dogdiv").text(num);
			})
	});
}

