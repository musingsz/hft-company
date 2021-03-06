<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>产品下载</title>
	<link href="__PUBLIC__/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		#c2{
			background-color: #F4F4F4;
			height: auto;
		}
		#c2 img{
			width: 100%;
			/*margin-left: 30px;*/
			margin-bottom: 20px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<!-- 引入能够动态分配数据的公共模板文件 -->
	<?php echo R('Public/header', '', 'Widget');?>
	
<style type="text/css">
	#c2 img{
		max-width: 80%;
	}
</style>


<img src="__PUBLIC__/Images/<?php echo ($img_url); ?>" style=" width: 100%;" alt="#">

	<div id="main">
		<div class="container" id="summary-container">
	        <div class="row">
	        	<span id="sign">1</span>
	            <style type="text/css">
	#main{
        margin: 0px auto;
        width: 74%;
        height: auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #c1{           
        height: auto;
        background-color: #AB0900;
        padding: 16px 0px 16px 14px;        
    }
    #c1 .menu-title{
        padding: 5px 0px 5px 10px;
        font-size: 24px;
        color: white;
        margin-bottom: 10px;
    }
    #left-menus div{
        padding: 0px 0px 0px 10px;
        margin-bottom: 5px;
    }
    #left-menus div:hover{
        background-color: #ECABA8;
    }
    .signs{
        background-color: #ECABA8;
    }
    .hover-signs{
        background-color: #AB0900;
    }
    .left-menu-a{
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        font-family: "微软雅黑";
        font-family: "微软雅黑" !important;
    }
    #left-menus div:hover .left-menu-a{
        text-decoration: none;
        color: black;
    }
    .menu-a{
        color: black;
    }
    .hover-menu-a{
        color: white;
    }

    #sign{
        display: none;
    }
</style>


<div class="col-md-2" id="c1">
	<div class="menu-title">个人支付</div>
	<span></span>
	<div id="left-menus">
		<div id="sign2"><a class="left-menu-a" href="__APP__/Personalpay/product_introduction">产品介绍</a></div>
	</div>
</div>


<script type="text/javascript">
	window.onload = function(){
		var sign = $('#sign').html();
		for(var i = 1; i < 3; i++){
			if (i == sign){
				$("#sign" + i).addClass('signs');
				$("#sign" + i + " a:only-child").removeClass('hover-menu-a');
				$("#sign" + i + " a:only-child").addClass('menu-a');
			}else{
				$("#sign" + i).addClass('hover-signs');
				$("#sign" + i + " a:only-child").addClass('hover-menu-a');
			}
		}
	}
</script>
	            <div class="col-md-8" id="c2">
	            	<a href="#"><img src="__PUBLIC__/Images/20141125171107_67829.png" alt=""></a>
	              	<img src="__PUBLIC__/Images/20141030145207_11213.png">
	            </div>
	            <div>
              		<?php echo ($page); ?>
              	</div>
	        </div>
	    </div>
	</div>

	<style type="text/css">
	#gotop{
        position: fixed;
        bottom: 50px;
        right: 15px;
        cursor: pointer;
    }
</style>


<div id="gotop">
    <img src="__PUBLIC__/Images/goto_top.png" alt="回到顶部" title="回到顶部" onclick="backToTop()" />
</div>


<script type="text/javascript">
	var scrolldelay;

    function backToTop() {
        scrolldelay = setInterval(ScrolltoTop, 10);
    }

    function ScrolltoTop() {
        window.scrollBy(0, -100);
        var h = getScrollTop();
        if (h <= 2) {
            //当到达顶部时  清除setInterval()方法 
            clearInterval(scrolldelay);
        }
    }

	//获取滚动条距离顶端的距离 
    function getScrollTop() {
        var scrollPos;
        if(window.pageYOffset){
            scrollPos = window.pageYOffset;
        }else if(document.compatMode && document.compatMode != 'BackCompat'){ 
            scrollPos = document.documentElement.scrollTop; 
        }else if(document.body){
            scrollPos = document.body.scrollTop; 
        }
        return scrollPos;
    }
</script>
	<!-- 引入能够动态分配数据的公共模板文件 -->
	<?php echo R('Public/footer', '', 'Widget');?>



	<!--[if lte IE 9]>
	<script src="__PUBLIC__/vendor/bootstrap/js/respond.min.js"></script>
	<script src="__PUBLIC__/vendor/bootstrap/js/html5shiv.js"></script>
	<![endif]-->
	<!-- <script src="http://libs.baidu.com/jquery/1.10.2/jquery.js"></script> -->
	<script src="__PUBLIC__/vendor/bootstrap/js/jquery-1.9.1.js"></script>
    <script src="__PUBLIC__/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          
      });
    </script>
</body>
</html>