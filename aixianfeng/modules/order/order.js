define(["text!./order.html", "css!./order.css"], function(orderPage){
	return{
		init : function(){			
			$(".order").html(orderPage).show().siblings("div").hide();
		}
	}
});