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
			<button onclick="getLocation">获取您的经纬度</button>
			<dt class="dt1"><a href="#home"></a></dt>
			<dd><a href="#home">首页</a></dd>
		</dl>
		<dl>
			<button onclick="openLocation">地图接口</button>
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
		    jsApiList: [
		    	'checkJsApi',
	        'onMenuShareWeibo',
	        'onMenuShareQZone',
	        'hideMenuItems',
	        'showMenuItems',
	        'hideAllNonBaseMenuItem',
	        'showAllNonBaseMenuItem',
	        'translateVoice',
	        'startRecord',
	        'stopRecord',
	        'onVoiceRecordEnd',
	        'playVoice',
	        'onVoicePlayEnd',
	        'pauseVoice',
	        'stopVoice',
	        'uploadVoice',
	        'downloadVoice',
	        'chooseImage',
	        'previewImage',
	        'uploadImage',
	        'downloadImage',
	        'getNetworkType',
	        'openLocation',
	        'getLocation',
	        'hideOptionMenu',
	        'showOptionMenu',
	        'closeWindow',
	        'scanQRCode',
	        'chooseWXPay',
	        'openProductSpecificView',
	        'addCard',
	        'chooseCard',
	        'openCard'
		    ]
 		});
	var latitude = 0,
		longitude = 0;
	function getLocation(){
		wx.getLocation({
	    type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
		    success: function (res) {
		        	latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
		        	longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
		        	var speed = res.speed; // 速度，以米/每秒计
		        	var accuracy = res.accuracy; // 位置精度
		        	alert("经度："+longitude);
		        	alert("纬度："+latitude);
		    	}
		});	
	};
	function openLocation(){
		wx.openLocation({
		    latitude: latitude, // 纬度，浮点数，范围为90 ~ -90
		    longitude: longitude, // 经度，浮点数，范围为180 ~ -180。
		    name: '', // 位置名
		    address: '', // 地址详情说明
		    scale: 1, // 地图缩放级别,整形值,范围从1~28。默认为最大
		    infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
		});
	}
	</script>
</html>