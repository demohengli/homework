<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx7c81e32a9099df82", "9db99b1524d55e3e5a85bbefc9e09186");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>欢迎来到爱鲜蜂</title>
	<link rel="stylesheet" type="text/css" href="css/rest.css">
	<link rel="stylesheet" type="text/css" href="css/foot.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<meta name="viewport" content = "width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
	<script type="text/javascript">
	document.documentElement.style.fontSize = innerWidth/4.14 +"px";
    window.onresize =function(){
      document.documentElement.style.fontSize = innerWidth/4.14 + "px";
    }
    </script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script data-main = "app.js" type="text/javascript" src = "js/require.js"></script>
</head>
<body>
	<div class="allMain">
		<div class="home"></div>
		<div class="market"></div>
		<div class="order"></div>
		<div class="mine"></div>
	</div>
	
	<footer class="footer">
		<dl>
			<dt class="dt1"><a href="#home"></a></dt>
			<dd><a href="#home">首页</a></dd>
		</dl>
		<dl>
			<dt class="dt2"><a href="#market"></a></dt>
			<dd><a href="#market">闪送超市</a></dd>
		</dl>
		<dl>
			<dt class="dt3" id="dt3"><div class="dogdiv">0</div><a href="#order"></a></dt>
			<dd><a href="#order">购物车</a></dd>
		</dl>
		<dl>
			<dt class="dt4"><a href="#mine"></a></dt>
			<dd><a href="#mine">我的</a></dd>
		</dl>
	</footer>
	<div id="tmp"></div>
</body>
	<script >
		wx.config({
		    debug: true,
		    appId: '<?php echo $signPackage["appId"];?>',
		    timestamp: <?php echo $signPackage["timestamp"];?>,
		    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
		    signature: '<?php echo $signPackage["signature"];?>',
		    jsApiList: []
 		});
	</script>
</html>