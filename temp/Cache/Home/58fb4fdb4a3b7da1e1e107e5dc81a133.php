<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title><?php if(($si['link'] == '/') OR ($si['link'] == '')): else: echo ($si['title']); ?>-<?php endif; echo ($s["sys_name"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo ($si['remark']?$si['remark']:$s['sys_describe']); echo ($so["title"]); ?>">
	<meta name="KeyWords" content="<?php echo ($si['keyword']?$si['keyword']:$s['sys_keyword']); echo ($so["title"]); ?>">
    <meta name="generator" content="Dswjcms! X1.0" />
    <meta name="author" content="Dswjcms! Team and Tf Team" />
    <meta name="copyright" content="2015-2016 Tf Inc." />
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <link href="__PUBLIC__/jc/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/jc/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="__PUBLIC__/jc/style.css">
    <link rel="shortcut icon" href="__PUBLIC__/bootstrap/img/favicon.ico">
<script type="text/javascript" src="__PUBLIC__/jc/js/jquery.min.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="__PUBLIC__/jc/js/move-top.js"></script>
<script type="text/javascript" src="__PUBLIC__/jc/js/easing.js"></script>
   
		
</head>
<body>
<!-- start header -->
<div class="header_btm">
	<div class="wrap">
    <div class=" head">
    <a href="__ROOT__/Site/listTpl/id/1.html">关于我们</a>
    	<div class="rights">
        <?php if($_SESSION['user_name']== ''): ?><a href="__ROOT__/Logo/login.html">登录</a>|<a href="__ROOT__/Logo/register.html">注册</a>
        <?php else: ?>
            <a href="__ROOT__/Center/order.html"><?php echo (session('user_name')); ?></a>|
            <a href="__ROOT__/Logo/exits.html">退出</a><?php endif; ?>
        </div>
    </div>
    </div>
</div>
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="/"><img src="__PUBLIC__/uploadify/uploads/logo/<?php echo ($s["sys_logo"]); ?>" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="__ROOT__/Goods/carts.html"><i ic="cart_total"></i></a>
				
                <?php if($_SESSION['amount']> 0 ): ?><i class="que"><?php echo (session('amount')); ?></i><?php endif; ?>
			</li>
		</ul>
		</div>
		<div class="h_search">
    		<form  action="__ROOT__/Goods/index.html" method="get">
    			<input name="search" type="text" value="<?php echo ($_GET['search']); ?>" placeholder="商品名">
    			<input type="submit" value="">
    		</form>
            
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="<?php echo ($active["index"]); ?>"><a href="/">主页</a></li> |
				<li class="<?php echo ($active["buckle"]); ?>"><a href="__ROOT__/Goods/index/mid/buckle.html">扣板</a></li> |
                <li class="<?php echo ($active["appliances"]); ?>"><a href="__ROOT__/Goods/index/mid/appliances.html">电器</a></li> |
                <li class="<?php echo ($active["accessories"]); ?>"><a href="__ROOT__/Goods/index/mid/accessories.html">配件</a></li> |
				<li class="<?php echo ($active["about"]); ?>"><a href="__ROOT__/Site/listTpl/id/1.html">关于我们</a></li> |
				<li class="<?php echo ($active["center"]); ?>"><a href="__ROOT__/Center/order.html">个人中心</a></li>
                
			</ul>
		</div>
		
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start slider -->		
	<link href="__PUBLIC__/jc/css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="__PUBLIC__/jc/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="__PUBLIC__/jc/js/jquery.cslider.js"></script>
		<!-- Owl Carousel Assets -->
		<link href="__PUBLIC__/jc/css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="__PUBLIC__/jc/js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
<!--头部 end -->

<!-- start slider -->
                <div class="kinMaxShow">
                <div id="kinMaxShow">
                    <?php if(is_array($shuff)): $i = 0; $__LIST__ = $shuff;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><div><a href="<?php echo ($ls["url"]); ?>"><img src="__PUBLIC__/uploadify/uploads/undefined/<?php echo ($ls["img"]); ?>"/></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                </div>
                <style>
                @media only screen and (max-width:767px)and (-webkit-min-device-pixel-ratio:2), only screen and (max-width:767px)and (min-resolution:192dpi) {
                .kinMaxShow{
                display: none;
                }
                }
                @media only screen and (min-width:480px)and (max-width:767px) {
                .kinMaxShow{
                display: none;
                }
                }
                @media only screen and (max-width:479px) {
                .kinMaxShow {
                display: none;
                }
                }
                
                #kinMaxShow .KMSPrefix_kinMaxShow_button{
                    margin: 0px auto;
                    width: <?php echo ($shcount*80); ?>px;
                    position: relative;
                    bottom: 20px;
                }
                #kinMaxShow .KMSPrefix_kinMaxShow_button{
                    margin: 0px auto;
                    width: <?php echo ($shcount*80); ?>px;
                    position: relative;
                }
                #kinMaxShow .KMSPrefix_kinMaxShow_button li{
                    display: inline-block;
                    width: 70px;
                    height: 10px;
                    background: none repeat scroll 0% 0% rgb(186, 186, 186);
                    margin: 0px;
                    border-radius: 3px;
                    border: none;
                    margin-right: 10px;	
                }
                #kinMaxShow .KMSPrefix_kinMaxShow_button li.KMSPrefix_kinMaxShow_focus{
                    background: none repeat scroll 0% 0% rgb(222, 222, 222);
                    border: none;
                }
                
                </style>
			</div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
    	<?php if(is_array($recommend)): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item" onclick="location.href='__ROOT__/Goods/details/id/<?php echo ($vo["id"]); ?>.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="__PUBLIC__/uploadify/uploads/commodity/<?php echo ($vo["zimg"]); ?>" >
			</div>
			<div class="cau_left">
				<h4><a href="__ROOT__/Goods/details/id/<?php echo ($vo["id"]); ?>.html">品牌<br/><?php echo ($vo["fname"]); ?></a></h4>
				<a href="__ROOT__/Goods/details/id/<?php echo ($vo["id"]); ?>.html" class="btn">购买</a>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>人气商品</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
        <?php if(is_array($sentiment)): $i = 0; $__LIST__ = $sentiment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($fd == 0 ): ?><div class="grids_of_3"><?php endif; ?>
			<div class="grid1_of_3">
				<a href="__ROOT__/Goods/details/id/<?php echo ($v["id"]); ?>.html">
					<img src="__PUBLIC__/uploadify/uploads/commodity/<?php echo ($v["zimg"]); ?>" alt=""/>
					<h3><?php echo ($v["title"]); ?></h3>
					<div class="price">
						<h4>￥<?php echo (number_format($v["price"],2,'.',',')); ?><span>购买</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
            <input name="" type="hidden" value="<?php echo ($fd++); ?>" />
            <?php if($fd == 3): ?><input name="" type="hidden" value="<?php echo ($fd=0); ?>" /><?php endif; ?>
       <?php if($fd == 0 ): ?><div class="clear"></div>
		</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>关于我们</h4>
				<ul class="f_nav">
					<li><a href="__ROOT__/Site/listTpl/id/1.html">关于我们</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>媒体报道</h4>
				<ul class="f_nav">
					<li><a href="__ROOT__/Site/listTpl/id/16.html">媒体报道</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>网站公告</h4>
				<ul class="f_nav">
					<li><a href="__ROOT__/Site/listTpl/id/32.html">网站公告</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>联系我们</h4>
				<div class="contact"><span>联系电话:</span><br/><span class="phone"><?php echo ($s["sys_phone"]); ?></span></div>
                <div class="contact"><span class="address">联系地址:<?php echo ($s["sys_officeAddress"]); ?></span></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				
			});
		</script>
        <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  <?php echo ($s["sys_copy"]); ?></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
<script>
//首页轮播
$(function(){$("#kinMaxShow").kinMaxShow();});
</script>
<script src="__PUBLIC__/js/jquery.kinMaxShow-1.1.min.js"></script>