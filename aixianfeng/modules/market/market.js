define(["text!./market.html", "css!./market.css","js/jquery.fly.min.js"], function(marketPage){
	return{
		init : function(){			
			$(".market").html(marketPage).show().siblings("div").hide();
			$(function(){
				$.get("data/shops.json",{},callbackMarket);
			})
		}
	}
});

function callbackMarket(respondata){
	$("#tmp").load("templete/shops.html",function(){
		var htmlStr = baidu.template("shopTmp",respondata);
		$("#marketId").html(htmlStr);
		// $("#tmp").empty();

		var html2 = baidu.template("shopTmps",{shopdatas:respondata.data.products["104749"]});
		$(".chaoji").html(html2);
		$(".market-left").off().on("click","li",function(){
			var lis =$(this).attr("lid");
			var html1 = baidu.template("shopTmps",{shopdatas:respondata.data.products[lis]});
			$(".chaoji").html(html1);
		})
	});
}





