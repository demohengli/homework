window.onload = function(){
	var num = parseInt($(".dogdiv").text());
	$(".main4_3").on("click",".main4_dd",function(e){
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
}