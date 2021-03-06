<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>肺康复首页v</title>
	<link rel="stylesheet" href="/statics/sham/css/reset.css" />
	<script type="text/javascript" src="/statics/sham/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/statics/sham/js/home.js"></script>
    <!--banner-->
    <script src="/statics/sham/js/jquery-ui-1.8.6.core.widget.js"></script>
    <script src="/statics/sham/js/jqueryui.bannerize.js"></script>
    <link rel="stylesheet" type="text/css" href="/statics/sham/css/easy-responsive-tabs.css " />
    <script src="/statics/sham/js/easyResponsiveTabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#banners').bannerize({
                shuffle: 1,
                interval: "5"
            });
            $(".ui-line").hover(function(){
                $(this).addClass("ui-line-hover");
                $(this).find(".ui-bnnerp").addClass("ui-bnnerp-hover");
            },function(){
                $(this).removeClass("ui-line-hover");
                $(this).find(".ui-bnnerp").removeClass("ui-bnnerp-hover");
            });
        });
        $(document).ready(function() {
	        //Horizontal Tab
	        $('#parentHorizontalTab').easyResponsiveTabs({
	            type: 'default', //Types: default, vertical, accordion
	            width: 'auto', //auto or any width like 600px
	            fit: true, // 100% fit in a container
	            tabidentify: 'hor_1', // The tab groups identifier
	            activate: function(event) { // Callback function if tab is switched
	                var $tab = $(this);
	                var $info = $('#nested-tabInfo');
	                var $name = $('span', $info);
	                $name.text($tab.text());
	                $info.show();
	            }
	        });

	    });
    </script>
    <!-- banner end -->
</head>
<body>
	<div class="head">
		<div class="top_nav">
			<div class="block">
				肺康复网欢迎您的来访~
				<div class="head_r">
					<a href="" class="login">登录</a>
					<a href="" class="regist">注册</a>
				</div>
				<div class="head_rw">
					<a href="">费医生APP</a>
					|
					<a href="">智能硬件</a>
					|
					<a href="">微信</a>
					|
					<a href="">微博</a>
					|
					<a href="">论坛</a>
				</div>
			</div>
		</div>
		<div class="head_top">
			<a href="" class="logo">
				<img src="/statics/sham/images/logo.jpg" alt="">
			</a>
			<div class="ser_n">
				<form id="" class="" name="searchForm">
					<span class="ipt1"><input name="" type="text" id="" placeholder="请输入您要搜索的信息" value="" class=""></span>
					<span class="ipt2"><input type="submit" name="" class="" value=" "></span>
				</form>
				<dl>
					<dt>热门搜索：</dt>
					<dd><a href="">肺纤维化</a></dd>
					<dd><a href=""><span>肺气肿</span></a></dd>
					<dd><a href="">肺心病</a></dd>
					<dd><a href="">慢阻肺</a></dd>
				</dl>
			</div>
			<div class="ewm">
				<img src="/statics/sham/images/ewm.jpg" alt="">
			</div>
		</div>
		<div class="nav">
			<div id="navList" class="navlist-wrap">
				<div class="navlist clearfix">
					<a href="javascript:;" class="nav_list">首页</a>
					<a href="javascript:;" class="nav-btn" data-device="#iphoneItem">信息资讯<span>&nbsp;&nbsp;&nbsp;</span></a>
					<a href="javascript:;" class="nav-btn" data-device="#ipadItem">医学文献<span>&nbsp;&nbsp;&nbsp;</span></a>
					<a href="javascript:;">呼吸大讲堂</a>
					<a href="javascript:;">在线商城</a>
					<a href="javascript:;">照护中心</a>
				</div>
			</div>
			<div class="top-nav">
				<div id="expandZone" class="expand active">
					<div class="download">

						<div id="iphoneItem" class="item">
							<div class="download-list">
								<a href="">肺纤维化</a>
								<a href="">肺气肿</a>
								<a href="">肺心病</a>
								<a href="">慢阴肺</a>
								<a href="">肺纤维化</a>
								<a href="">肺气肿</a>
								<a href="">肺心病</a>
								<a href="">肺纤维化</a>
								<a href="">肺心病</a>
								<a href="">慢阴肺</a>
								<a href="">肺纤维化</a>
								<a href="">肺气肿</a>
		
							</div>
						</div>
						<div id="ipadItem" class="item">
							<div class="download-list">
								<a href="">慢阴肺</a>
								<a href="">肺纤维化</a>
								<a href="">肺气肿</a>
								<a href="">肺心病</a>
								<a href="">肺纤维化</a>
								<a href="">慢阴肺</a>
								<a href="">肺纤维化</a>
							
							</div>
						</div>
	
					</div>
					<div id="closeBtn" class="close-btn"></div>
				</div>
			</div>
		</div>
	</div>