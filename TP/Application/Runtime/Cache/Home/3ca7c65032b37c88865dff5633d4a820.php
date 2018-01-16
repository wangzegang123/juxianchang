<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
   <title>微信</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="keywords" content="现场摇一摇,免费">
    <meta name="description" content="微信现场摇一摇配置视频教程 请用电脑打开若有不清楚的地方可咨 喔！">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Home/css/wexbox-common.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/wexboxgw.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/service.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/showfz.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/wexboxgwb.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/swiper.hdp.css" type="text/css">
    <script src="j/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/dialog-min.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/ui-dialog.css" type="text/css">
    <script type="text/javascript" src="/Public/Home/js/jquery.tipsy.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/tipsy.css" type="text/css">
    <script type="text/javascript" src="/Public/Home/js/swiper.min.js"></script>
    <script src="/Public/Home/js/share.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/share_style0_32.css">
</head>
<body>
<div class="header">
    <div class="inner clearfix">
        <h1 class="logo left">
            <a href="http://www.juxianchang.com/">微信大屏幕</a>
            <a href="http://www.juxianchang.com/" class="btn-back">回首页</a>      </h1>
        <button class="btn-menu js_BtnMenu right"><span></span><span></span><span></span></button>
        <div class="nav-login right"><a href="http://wall.juxianchang.com/app/index.php?i=52&amp;c=entry&amp;do=manage_login&amp;m=meepo_xianchang" rel="external nofollow" title="登录">登录</a></div>
        <ul class="nav-list right js_navList">
            <li><a href="http://www.juxianchang.com/case" title="精选案例">案例</a></li>
            <li><a href="http://demo.juxianchang.com/" title="演示" rel="external nofollow" target="_blank">演示<em class="icon-hot"></em></a></li>
            <li><a href="http://www.juxianchang.com/3d" title="3D签到">3D签到</a></li>
            <li><a href="http://www.juxianchang.com/jiaocheng" title="微信墙教程">使用教程</a></li>
            <li><a href="http://www.juxianchang.com/mall" title="服务定价">服务定价</a></li>
            <li><a href="http://user.juxianchang.com/register.html" rel="external nofollow" title="申请开通">申请开通<em class="icon-hot"></em></a></li>
        </ul>
    </div><!-- inner or inner2 end-->
</div>
<script>
    $(function(){
        $('.js_BtnMenu').on('click', function(){
            if ($(this).hasClass('curr')) {
                $(this).removeClass('curr');
                $('.js_navList').hide();
            } else {
                $(this).addClass('curr');
                $('.js_navList').show();
            }
        });
        if ($(window).width()>768){
            $('.js_navList li.cooperate').mouseover(function(){
                $(this).children('.subnav').show();
            });
            $('.js_navList li.cooperate').mouseleave(function(){
                $(this).children('.subnav').hide();
            });
        } else {
            $('.js_navList li.cooperate').children('.subnav').show();
        }
    });
    //二级菜单
    $(".nav-list > li").mouseenter(function(){
        $(this).find('.subnav').show();
        $(this).addClass('shadow');
    }).mouseleave(function(){
        $(this).find('.subnav').hide();
        $(this).removeClass('shadow');
    });
</script>

<div class="wrap" id="wrap">
  <div id="top"></div>
  <div class="header">
     <div class="inner clearfix">
      <h1 class="logo left">
        <a href="http://www.juxianchang.com/">微信大屏幕</a>
        <a href="http://www.juxianchang.com/" class="btn-back">回首页</a>      </h1>
      <button class="btn-menu js_BtnMenu right"><span></span><span></span><span></span></button>
                    <div class="nav-login right"><a href="http://wall.juxianchang.com/app/index.php?i=52&amp;c=entry&amp;do=manage_login&amp;m=meepo_xianchang" rel="external nofollow" title="登录">登录</a></div>
            <ul class="nav-list right js_navList">
	  <li class=""><a href="http://www.juxianchang.com/case" title="精选案例">案例</a></li>
	 <li class=""><a href="http://demo.juxianchang.com/" title="演示" rel="external nofollow" target="_blank">演示<em class="icon-hot"></em></a></li>
			  <li><a href="http://www.juxianchang.com/3d" title="3D签到">3D签到</a></li>
        <li><a href="http://www.juxianchang.com/jiaocheng" title="微信墙教程">使用教程</a></li>
        <li><a href="http://www.juxianchang.com/mall" title="服务定价">服务定价</a></li>
    
       <li><a href="http://user.juxianchang.com/register.html" rel="external nofollow" title="申请开通">申请开通<em class="icon-hot"></em></a></li>
     </ul>
 </div><!-- inner or inner2 end-->
 </div><!-- header end-->
  <script>
  $(function(){

    $('.js_BtnMenu').on('click', function(){
        if ($(this).hasClass('curr')) {
        $(this).removeClass('curr');
        $('.js_navList').hide();
      } else {
        $(this).addClass('curr');
        $('.js_navList').show();
      }
    });
    
  
    if ($(window).width()>768){
  	$('.js_navList li.cooperate').mouseover(function(){
  	  $(this).children('.subnav').show();
  	});
  	$('.js_navList li.cooperate').mouseleave(function(){
  	  $(this).children('.subnav').hide();
  	});
    } else {
      $('.js_navList li.cooperate').children('.subnav').show();
    }
  });

  
  //二级菜单
  $(".nav-list > li").mouseenter(function(){
    $(this).find('.subnav').show();
    $(this).addClass('shadow');
  }).mouseleave(function(){
    $(this).find('.subnav').hide();
    $(this).removeClass('shadow');
  });


  </script>

  <!-- <div style="height:50px;"></div> -->
  <div class="container clearfix">
    <div class="casedetail casedetail-type1">
      <div class="case-part1 clearfix">
        <div class="textdetail">
            <h1>微信墙跑马摇一摇怎么做？</h1>
            <div class="shop-d">
              <center> <span class="date-act">来源：</span>&nbsp;&nbsp;&nbsp;<span>更新时间：2016-03-12</span></center> 
                          </div>

   
             <div class="detail-scroll">
              <div class="swiper-container gallery-top swiper-container-horizontal">
                <div id="caseLeft3" class="swiper-button-Prev swiper-button-disabled"><em></em></div>
                  <div id="caseRight3" class="swiper-button-Next swiper-button-disabled"><em></em></div>
               
              </div>
         
            </div>
                    </div>
      </div>
	
	
	
	<!--end .case-part1-->
	
   
      <div class="case-part2 clearfix">
        <div class="textbox ">
          <div class="textdetail">
            <p></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px;">微信墙又被称为微信大屏幕，在微信墙怎么做_微信上墙怎么申请？【新手必看】中小编已经告诉大家如何发送消息上墙了。微信墙最具互动，最火爆的功能之一就是微信墙摇一摇了，也有人叫微信墙跑马或者微信墙摇一摇跑马，其实就是跑道赛马的一种摇一摇模式。聚现场微信墙摇一摇模块不仅有跑道赛马摇一摇，还有炫彩喷泉摇一摇，可以根据自己的现场活动需要选择不同的摇一摇样式使用哦。</span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px;"><br></span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px;">&nbsp;<span style="margin: 0px; padding: 0px; list-style: none; color: #00B0F0; font-size: 20px;"><strong>微信墙跑马摇一摇效果图</strong></span></span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);">&nbsp;<img src="/Public/Home/images/14814500392.png" alt="QQ截图20160910234138.jpg" width="600" height="337" border="0" vspace="0" style="width: 600px; height: 337px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);">&nbsp;<img src="/Public/Home/images/14814500409.png" alt="14785108840.png" width="600" height="299" border="0" vspace="0" style="width: 600px; height: 299px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500412.png" alt="14785108998.png" width="600" height="337" border="0" vspace="0" style="width: 600px; height: 337px;"></p><p style="text-align: center;"><img src="/Public/Home/images/14814500411.png" style="width: 600px; height: 320px;" width="600" height="320" border="0" vspace="0" alt=""></p><p style="text-align: center;"><img src="/Public/Home/images/14814500421.png" style="width: 600px; height: 450px;" width="600" height="450" border="0" vspace="0" alt=""></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; list-style: none;"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px;"></span></strong></p><hr><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; list-style: none;"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px;">摇一摇注意事项：</span></strong></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px; color: #17365D;">1、摇一摇赛道模式 的摇一摇跑马功能需要有人到达终点才会结束，然后大屏幕显示排名。测试的时候，亲们请不要摇到一半然后就关掉，这样下一轮的时候会有上一轮的数据的哦（情况就是下一轮倒计时完毕的时候，会显示上一轮的人还在原来的位置，继续摇一摇，才重头开始），如果是正式活动，就会显得好像有问题（服务器君无辜躺枪）。所以，</span><strong style="margin: 0px; padding: 0px; list-style: none;"><span style="color: #FF0000; margin: 0px; padding: 0px; list-style: none; font-size: 16px;">赛道跑马摇一摇模式测试的时候一定要坚持跑到终点哦亲</span></strong><span style="color: #0000FF; margin: 0px; padding: 0px; list-style: none; font-size: 16px;">！<span style="margin: 0px; padding: 0px; list-style: none; font-size: 16px; color: #17365D;">或者记得后台清除掉测试数据！</span></span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;">2、摇一摇跑马比赛本身是大屏幕显示的前十名可以理解为比赛的排名，并非中奖者。至于是给前几名颁奖还是说每一轮奖励的人数都不一样（比如有的客户第一轮摇一摇是奖励前三名，第二轮是奖励前五名），现场主持人灵活应变直接告诉大家就好了。</span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;">同时摇一摇跑马支持给前10名设置发微信红包，红包大小可设定，可设置是否能重复中奖，是否开启红包。</span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;">3、赛道跑马摇一摇模式默认不屏蔽中奖者，原因是中奖者不固定（见上一条事项）。如果您需要中奖者在后面的摇一摇不再中奖，需要在摇一摇结束之后 &nbsp;关闭可重复中奖，这样后面的摇一摇，他就不会再次中奖了。（此处的屏蔽中奖会导致微信抽奖也不会中）</span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;">4、如果有特殊需要，在摇一摇倒计时的界面显示奖品，可通过后台设定的哟。</span></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;"></span></p><hr><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 16px; margin: 0px; padding: 0px; list-style: none; color: #17365D;"></span>如何配置：</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);">进入跑马摇一摇后</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);">以下区域是电脑端的界面配置，支持自定义元素，元素设置得漂亮，整个活动也加分哟。</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500422.png" alt="微信墙跑马摇一摇,微信大屏幕摇一摇" width="640" height="369" border="0" vspace="0" style="width: 640px; height: 369px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500429.png" alt="微信墙跑马摇一摇,微信大屏幕摇一摇" width="640" height="361" border="0" vspace="0" style="width: 640px; height: 361px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500434.png" alt="微信墙跑马摇一摇,微信大屏幕摇一摇" width="640" height="347" border="0" vspace="0" style="width: 640px; height: 347px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);">下面是手机端的基本配置，传好图片就ok</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500438.png" alt="微信墙跑马摇一摇,聚现场,微信大屏幕摇一摇" width="640" height="320" border="0" vspace="0" style="width: 640px; height: 320px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);">如果需要发红包的话，就需要填写下面的参数哟，最好联系客服协助</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><img src="/Public/Home/images/14814500447.png" alt="微信墙跑马摇一摇,聚现场,微信大屏幕摇一摇" width="640" height="331" border="0" vspace="0" style="width: 640px; height: 331px;"></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><strong>这些部分的内容填写完毕后，我们就可以去增加游戏轮数，开启正式的活动啦！</strong></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><strong><img src="/Public/Home/images/14814500440.png" alt="微信墙跑马摇一摇,聚现场,微信大屏幕摇一摇" width="640" height="185" border="0" vspace="0" style="width: 640px; height: 185px;"></strong></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><strong>这里添加轮数和游戏的结束方式。注意：冠军和两强结束领奖台只会弹出1-2个人，但是总榜上都会显示</strong></p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 14px; line-height: 20px; text-indent: 28px; color: rgb(100, 100, 100); font-family: &#39;Microsoft yahei&#39;, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><strong><img src="/Public/Home/images/1481450039.png" alt="微信墙跑马摇一摇,聚现场,微信大屏幕摇一摇" width="640" height="327" border="0" vspace="0" style="width: 640px; height: 327px;"></strong></p><p></p>
          </div>

		
                   <!--	<div class="article_bm">【<a href="#">返回顶部</a>】 【<a href="javascript:window.print()">打印此页</a>】 【<a href="#" onclick="javascript:window.close();">关闭</a>】</div>
                          -->  <ul class="news_other">
                                <li class="pre">上一篇：<a href="<?php echo U('nane');?>">微信3d签到！聚现场如何实现？</a> </li>
                                <li class="next">下一篇：<a href="<?php echo U('six');?>">怎么做？【新手必看】</a> </li>
                            </ul> 
          <script>
              window._bd_share_config = {
              //此处添加分享具体设置
              common : {
                  //此处放置通用设置
                  bdText : "#微信大屏幕# #微信墙# 我在@微盒互动 微信墙跑马摇一摇怎么做？ ",
                  bdUrl : "",
                  bdPic : "http://www.juxianchang.com/statics/images/nopic.gif",
                  searchPic : 0,
                  render : true
              },
              share : [
                  //此处放置分享按钮设置
                  { "bdSize" : 32, }
              ]
              }
              //以下为js加载部分
              with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
            </script>
        </div>
        <!--end:左侧-->
        <div class="related-case clearfix">
          <!--start:推荐案例-->
        </div>
      </div><!--end .case-part2-->
      <!--end .case-part4-->
    </div><!--end .casedetail-->
  </div>
    </div>
    
<div class="bdsharebuttonbox bdshare-button-style0-32" data-tag="share" data-bd-bind="1515048740358">
    <!-- 此处添加展示按钮 -->
    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
    <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
    <a class="bds_sqq" data-cmd="sqq" href="http://www.juxianchang.com/jiaocheng/101.html#" title="分享到QQ好友"></a>
    <a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
    <a class="bds_qzone" data-cmd="qzone" href="http://www.juxianchang.com/jiaocheng/101.html#" title="分享到QQ空间"></a>
    <a class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
    <a class="bds_more" data-cmd="more">更多</a>
    <a class="bds_count" data-cmd="count" title="累计分享0次">0</a>
</div>
<script>
    window._bd_share_config = {
        //此处添加分享具体设置
        common : {
            //此处放置通用设置
            bdText : "#微信大屏幕# #微信墙# 我在@微盒互动 怎么做微信摇一摇_如何进行现场微信抽奖？【视频教程】 ",
            bdUrl : "",
            bdPic : "http://www.juxianchang.com/statics/images/nopic.gif",
            searchPic : 0,
            render : true
        },
        share : [
            //此处放置分享按钮设置
            { "bdSize" : 32, }
        ]
    }
    //以下为js加载部分
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
<!--end:左侧-->
<div class="related-case clearfix">
    <!--start:推荐案例-->
    <div class="cases-about1 left">
        <p class="rc-top clearfix">
            <span class="rc-tit">推荐案例</span>
        </p>
        <div class="related-cases-list2">
            <div class="swiper-container swiper-container-horizontal">
                <ul id="caseList2" class="swiper-wrapper clearfix" style="transition-duration: 0ms; transform: translate3d(-260px, 0px, 0px);"><li class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="1" style="width: 260px;">

                    <span class="pic"> <a href="http://www.juxianchang.com/xinwen/58.html" target="_blank"><img src="/Public/Home/images/1478527513.jpg" alt="福建商会年会微信上墙活动场面火爆"></a></span>
                    <span class="title"><a href="http://www.juxianchang.com/xinwen/58.html" title="福建商会年会微信上墙活动场面火爆" target="_blank" style="color:#42566c;">福建商会年会微信上墙活动场面火爆</a></span>
                </li>
                    <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 260px;">

                        <span class="pic"> <a href="http://www.juxianchang.com/xinwen/59.html" target="_blank"><img src="/Public/Home/images/thumb_456_215_20150129092431292.jpeg" alt="兰姬妮微商代理招商会"></a></span>
                        <span class="title"><a href="http://www.juxianchang.com/xinwen/59.html" title="兰姬妮微商代理招商会" target="_blank" style="color:#42566c;">兰姬妮微商代理招商会</a></span>
                    </li>
                    <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 260px;">
                        <span class="pic"> <a href="http://www.juxianchang.com/xinwen/58.html" target="_blank"><img src="/Public/Home/images/1478527513.jpg" alt="福建商会年会微信上墙活动场面火爆"></a></span>
                        <span class="title"><a href="http://www.juxianchang.com/xinwen/58.html" title="福建商会年会微信上墙活动场面火爆" target="_blank" style="color:#42566c;">福建商会年会微信上墙活动场面火爆</a></span>
                    </li>
                    <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 260px;">

                        <span class="pic"> <a href="http://www.juxianchang.com/xinwen/59.html" target="_blank"><img src="/Public/Home/images/thumb_456_215_20150129092431292.jpeg" alt="兰姬妮微商代理招商会"></a></span>
                        <span class="title"><a href="http://www.juxianchang.com/xinwen/59.html" title="兰姬妮微商代理招商会" target="_blank" style="color:#42566c;">兰姬妮微商代理招商会</a></span>
                    </li></ul>
            </div>
            <div class="txtcenter">
                <a href="javascript:void(0);" id="casePrev2" class="prev"></a>
                <div id="casePager2" class="case-pages2"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                <a href="javascript:void(0);" id="caseNext2" class="next"></a>
            </div>
        </div>
    </div>
    <!--end:推荐案例-->
    <!--start:最新案例-->
    <div class="cases-about2 right">
        <p class="rc-top clearfix">
            <a href="http://www.juxianchang.com/case" class="more right">更多</a>
            <span class="rc-tit">最新案例</span>
        </p>
        <ul class="related-case-list">
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/126.html" class="case-img2"><img src="/Public/Home/images/20171030010804910.jpg" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/126.html">微信墙助力长安马自达第二代CX-5重庆上市发布会！</a>
                </p>
            </li>
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/125.html" class="case-img2"><img src="/Public/Home/images/20170927112056224.jpg" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/125.html">微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!</a>
                </p>
            </li>
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/123.html" class="case-img2"><img src="/Public/Home/images/20170823081217424.png" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/123.html">北京微信红包雨,聚现场助力管家帮家政日启动仪式。</a>
                </p>
            </li>
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/122.html" class="case-img2"><img src="/Public/Home/images/20170823074729810.png" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/122.html">3D签到微信墙助【中国平安】人力峰会盛典！</a>
                </p>
            </li>
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/121.html" class="case-img2"><img src="/Public/Home/images/20170819105020371.jpg" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/121.html">重庆西旅会带你逛现场！微信摇一摇抽大奖... 各种耍事任你嗨！</a>
                </p>
            </li>
            <li class="clearfix">
                <a href="http://www.juxianchang.com/case/120.html" class="case-img2"><img src="/Public/Home/images/20170819105210624.jpg" alt=""></a>
                <p class="words-right">
                    <a href="http://www.juxianchang.com/case/120.html">满满的感动！微信3D签到，微信许愿墙弹幕助力重庆师范大学涉外商院2017毕业典礼现场！</a>
                </p>
            </li>
        </ul>
    </div>
    <!--end:最新案例-->
</div>
<script>
    $(function(){
        $('.case-list li:nth-child(3n)').css('marginRight', 0);


        $('#caseList3,#caseLeft3, #caseRight3').mouseover(function(){
            $('#caseLeft3, #caseRight3').css({ opacity:'1',zIndex:'10' });
        }).mouseout(function(){
            $('#caseLeft3, #caseRight3').css({ opacity:'0',zIndex:'-10' });
        });


        var galleryTop = new Swiper('.gallery-top', {
            nextButton: '#caseRight3',
            prevButton: '#caseLeft3',
            pagination: '#casePager3',
            paginationClickable: true,
            spaceBetween: 0,
            paginationBulletRender: function (index, className) {
                var thumbStr = '';
                thumbStr += '<li class="'+className+'"><img src="'+thumbCovers[index]+'" alt=""></li>';
                return thumbStr;
            },
        });


        var caseSwiper = new Swiper('.related-cases-list2 .swiper-container', {
            nextButton: '#caseNext2',
            prevButton: '#casePrev2',
            pagination: '#casePager2',
            spaceBetween: 0,
            loop:true
        });
    });
</script>
<!-- <script type="text/javascript" src="http://www.juxianchang.com/statics/js/show_picture.js"></script>
<script type="text/javascript" src="http://www.juxianchang.com/api.php?op=count&id=101&modelid=1"></script>-->

<script>

    $(function(){


        if ($('#js_funcsScence').width()<695){
            var js_funcsScenceW = $('#js_funcsScence').width();
            $('#js_funcsScence li.swiper-slide').css({ width:js_funcsScenceW-20 });
            var myswiperScence = new Swiper('#js_funcsScence', {
                pagination: '#naviScence',
                paginationClickable: true,
                effect : 'slide',
                autoHeight:true,
                spaceBetween: 0,
                loop: true
            });
            $(window).resize(function(){
                var js_funcsScenceW = $('#js_funcsScence').width();
                $('#js_funcsScence li.swiper-slide').css({ width:js_funcsScenceW-20 });
                var myswiperScence = new Swiper('#js_funcsScence', {
                    pagination: '#naviScence',
                    paginationClickable: true,
                    effect : 'slide',
                    autoHeight:true,
                    spaceBetween: 0,
                    loop: true
                });
            });
        } else {
            var myswiperScence = new Swiper('#js_funcsScence', {
                pagination: '#naviScence',
                paginationClickable: true,
                prevButton:'#js_funcsScencePrev',
                nextButton:'#js_funcsScenceNext',
                initialSlide :3,
                autoHeight:true,
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflow: {
                    rotate: 20,
                    stretch: 10,
                    depth: 700,
                    modifier: 1.56,
                    slideShadows : true
                }
            });

        }


        var bodyw= $('body').width();
        if (bodyw>1100) {
            $('#js_casesBooking li').mouseover(function(){
                $(this).find('.pics-intro').show();
                $('#js_casesBooking li .pics').css({ boxShadow:'none' });
            })
            $('#js_casesBooking li .pics-intro').mouseleave(function(){
                $(this).hide();
                $('#js_casesBooking li .pics').css({ boxShadow:'0 3px 10px rgba(0,0,0,0.5)' });
            });
        }
        var length = $('#js_casesBooking li').length;
        for (var i=0; i<=length; i++){
            $('#js_casesBooking li:nth-child('+i+')').find('.pics').addClass('js_casesBooking'+i);
            $('#js_casesBooking li:nth-child('+i+')').find('.swiper-pagination').addClass('navi'+i);
            var myswiper = new Swiper('.js_casesBooking'+i, {
                pagination: '.navi'+i,
                paginationClickable: true,
                effect : 'slide',
                spaceBetween: 0,
                autoplay:2000,
                speed: 1000,
                loop: true
            });
        }
    }
    })

    })
    //tab切换
    function nTabs(tabObj, obj) {
        var tabList = document.getElementById(tabObj).getElementsByTagName("a");
        for (i = 0; i < tabList.length; i++) {
            if (tabList[i].id == obj.id) {
                document.getElementById(tabObj + i).className = "curr";
                document.getElementById(tabObj + 'Con' + i).style.display = "block";
            } else {
                document.getElementById(tabObj + i).className = " ";
                document.getElementById(tabObj + 'Con' + i).style.display = "none";
            }
        }
    }
</script>
<div class="footter">
    <div style="clear: both"></div>
    <p class="noewr">Copyright © 2015 聚现场·微信互动大屏幕 版权所有 渝ICP备15000126号-1</p>
    <p>地址/Add：重庆· 江北区观音桥COSMO大厦24层   电话:023-64262166   15702388083 </p>
</div>
<div class="keifu" style="height: 345px; top: 186.5px;">
    <div class="keifu_tab">
        <div class="icon_keifu" style="top: 122px;"></div>
        <div class="keifu_box">
            <div class="keifu_head"><a href="javascript:void(0)" class="keifu_close"></a></div>
            <ul class="keifu_con">
                <li>聚现场-乐乐<br><a target="_blank" title="聚现场乐乐" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes"><img src="/Public/Home/images/qq.png"></a></li>
                <br> <li>聚现场-阳阳<br><a target="_blank" title="聚现场阳阳" href="http://wpa.qq.com/msgrd?v=3&amp;uin=214023493&amp;site=qq&amp;menu=yes"><img src="/Public/Home/images/qq.png"></a></li>
                <br> <li>聚现场-售后<br><a target="_blank" title="聚现场售后" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes"><img src="/Public/Home/images/qq.png"></a></li>

                <li> </li></ul>
            <div class="keifu_bot"></div>
        </div>
    </div>
</div>

<script>
    $(function(){
        var KF = $(".keifu");
        var wkbox = $(".keifu_box");
        var kf_close = $(".keifu .keifu_close");
        var icon_keifu = $(".icon_keifu");
        var kH = wkbox.height();
        var kW = wkbox.width();
        var wH = $(window).height();
        KF.css({height:kH});
        icon_keifu.css("top",parseInt((kH-100)/2));
        var KF_top = (wH-kH)/2;
        if(KF_top<0) KF_top=0;
        KF.css("top",KF_top);
        $(kf_close).click(function(){
            KF.animate({width:"0"},200,function(){
                wkbox.hide();
                icon_keifu.show();
                KF.animate({width:26},300);
            });
        });
        $(icon_keifu).click(function(){
            $(this).hide();
            wkbox.show();
            KF.animate({width:kW},200);
        });
    });
</script>
<script>
    var roleid = 0;
    if (self != top && roleid == 12) {
        $('.header').addClass('hidden');
        $('.huixiaoerzx').removeClass('hidden');
        //$('body').css('background','#FFFFFF');
        //$('#wrap').css("background","#FFFFFF");
        $('body').css("height","1300px");
        $('.order').css('box-shadow','1px 1px 5px 1px rgba(0, 0, 0, .1)');
        //$('.order').css('margin','auto');
        $('.menu2').addClass('hidden');
        $('.footer').addClass('hidden');
    }

    function getStyle(obj,name){
        if(obj.currentStyle){
            return obj.currentStyle[name];
        }else{
            return getComputedStyle(obj,false)[name];
        };

    };

    function startMove(obj, attr, iTarget){
        clearInterval(obj.timer);
        obj.timer = setInterval(function(){
            var curr = 0;
            if(attr == 'opacity'){
                curr = Math.round(parseFloat(getStyle(obj,attr))*100);
            }else{
                curr = parseInt(getStyle(obj,attr));
            };

            var speed = (iTarget-curr)/6;
            speed = speed>0?Math.ceil(speed):Math.floor(speed);

            if(curr == iTarget){

                clearInterval(obj.timer);

            }else{

                if(attr == 'opacity'){

                    obj.style.filter = 'alpha(opacity:'+(curr + speed)+')';
                    obj.style.opacity = (curr + speed)/100;

                }else{

                    obj.style[attr] = curr + speed + 'px';

                };
            };

        },30);

    };

</script>
<div class="popmayer hidden"></div>
<div class="pop-common pop-pay" style="display:none;position:fixed;" id="commMsgLayer">
    <div class="inner-pop">
        <div class="pop-top">
            <span class="poptit">提示信息</span>
        </div>
        <div class="pop-main">
            <p class="pop-tips" style="padding:0;  word-wrap: break-word;word-break: break-all;text-align:center;"></p>
            <p class="pop-wrap-btn">

            </p>
        </div>
    </div>
</div>

<a href="http://www.juxianchang.com/jiaocheng/101.html#top" id="scrollUp" style="display: none; position: fixed; z-index: 2147483647;"></a>
<script type="text/javascript" src="/Public/Home/js/jquery.scrollUp.min.js"></script>

<script>
    var companyId = 0;

    $(function(){

        var bodyH = $(window).height();
        if ($('.wrap').height() < bodyH){
            $('.wrap').css({ minHeight:(bodyH-80) });
            $('.footer').css({ position:'fixed', left:'0px', bottom:'0px', width:'100%' })
        } else {
            $('.footer').css({ position:'static', width:'100%' })
        }

        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '', // Text for element
            activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });
</script>
<script>
    function showCommMsg(data){
        if(!data.title) data.title = '提示信息';
        $('#commMsgLayer .poptit').html(data.title);
        $('#commMsgLayer .pop-tips').html(data.content);
        $('.popmayer, #commMsgLayer').show();

        //$('#commMsgLayer').css({
        //  'margin-top': (-$('#commMsgLayer').height()/2)+'px'
        //});
        $('#commMsgLayer .js_close').one('click', function(){
            if(data.closeFn) data.closeFn();
            $('.popmayer, #commMsgLayer').hide();
        });
    }
    var autoHeight=function(){
        var l=$(".sidebar2").height();
        var r=$(".order-main").height();
        if(r>l){
            $(".sidebar2").css('height',r+100);
        }
    }

    $(function (){
        //除首页外高度不够给div.container填补padding值
        var winHeight = $(window).height(),
                pagesHeight = $(document.body).height(),
                diffHeight = winHeight - pagesHeight;
        if( winHeight > pagesHeight ){
            $('.container').css("paddingBottom", diffHeight+20);
        }else{
            $('.container').css("paddingBottom", "");
        }
    });
</script>
<!--百度统计-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?08100f796f807b97c6fd87f5214fb7b6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https'){
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else{
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<script>
    $(function(){
        if (document.cookie.indexOf('_test_server') != -1) {
            $(".footer").append('<a href="javascript:void(0);" style="position: fixed; left: 0px; bottom: 5px; background: #fff000; padding: 3px;">##</a>');
        }
    });
</script>

<a id="scrollUp" href="http://www.juxianchang.com/jiaocheng/101.html#top" title=""></a>
</body>
</html>