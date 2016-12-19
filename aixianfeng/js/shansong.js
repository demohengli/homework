window.onload = function(){
	/*$("#quan").click(function(){
		$(".xin").show();
	})*/
	$(".left").on("singleTap","li",function(e){
		console.log(e);
		$(this).addClass("#list");
	})
}