<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0086)http://wall.juxianchang.com/app/index.php?i=1&c=entry&rid=12&do=wall&m=meepo_xianchang -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <title>聚现场微信大屏幕 - 聚现场微信大屏幕</title>
    <link rel="stylesheet" type="text/css" href="/Public/Home/front_css/basic.css">
	<script type="text/javascript">
	var need_login = "1";
	var SCENE_INFO = {
        "title": "聚现场微信大屏幕",
        "top_title": ["\u5fae\u4fe1\u73b0\u573a\u4e92\u52a83D\u7b7e\u5230\u6f14\u793a","\u9047\u5230\u65e0\u6cd5\u6d4b\u8bd5\u7684\u529f\u80fd\uff0c\u8bf7\u8054\u7cfb\u5ba2\u670d"],
        "top_font_size": "40",
        "memo": "",
        "top_img": "http://of3kdd1ar.bkt.clouddn.com/images/1/2017/03/Q5gSN1py2MH28f6sex6eF0m31f65HP.png",
        "bg_img": "",
        "bottom_img": "http://of3kdd1ar.bkt.clouddn.com/images/1/2017/03/Q5gSN1py2MH28f6sex6eF0m31f65HP.png",
        "diy_css": ".top_title {padding-left: 500px;}.round-welcome {background-color: rgba(0, 0, 0, 0.2) !important;}.player .pnctx {right: -35px !important;}.pnctx::before {border-top: 0px !important; }",
        "keyword": "",
        "mp_username": "聚现场",
        "func": {
          "wall": "1",
          "lottery": "1",
          "shake": "1"
        },
        "navbar": {
          "wall": "1",
          "lottery": "1",
          "lottery_free": "1",
          "shake": "1",
          "shake_free": "1"
        }
      };
      var WALL_INFO = {
        "id": "12",
        "scene_id": 12,
        "title": "聚现场微信大屏幕",//网页顶部标题
        "show_style": "0",//滚动 或者 翻转
        "show_type": "0",//最新不循环或者随机循环
        "re_time": "3",
        "chistory": "15",
		"show_big":"1",
		"show_big_time":"4"
      };
	  var PATH_URL = "http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/piao/";
	  var $socket_url = "ws://hd.juxianchang.com:7272";
	  var show_msg_2=null;
	  var check_msg=null;
	  		var bd_show = 0;
	  	 
	  </script>
	  <style>
		#show_hide_nav{width: 100%;position: fixed;bottom: -10px;text-align: center;z-index:9998}	
		.Panel.Top{z-index:1}
		.lottery-right{z-index:10}
					.top_title {padding-left: 500px;}.round-welcome {background-color: rgba(0, 0, 0, 0.2) !important;}.player .pnctx {right: -35px !important;}.pnctx::before {border-top: 0px !important; }			  </style>
	  <script src="/Public/Home/front_js/tool.js" type="text/javascript" charset="utf-8"></script>
      <script src="/Public/Home/front_js/jquery-2.1.4.js"></script>
	  <script src="/Public/Home/front_js/jquery.hotkeys.min.js"></script>
	  <script src="/Public/Home/front_js/layer.js"></script><link rel="stylesheet" href="/Public/Home/front_css/layer.css" id="layuicss-layer">
	  <style>
#qd_persons {
  position:absolute;
  top:29px;
  width:300px;
  right:200px;
  color:#fff;
}
#qd_persons .price-div {
  font: 12px tahoma, Arial, Verdana, sans-serif;
}

#qd_persons div{
  float: left;
  text-align: center;
}

#qd_persons .price-icon {
  background: dimgrey;
  height:48px;
  line-height: 48px;
  font-size: 26px;
  font-weight: bold;
  float: left;
  padding: 0 15px;
  margin-right:10px;
}

#qd_persons .price-div  {
  background: dimgrey;
  width:100px;
  height:48px;
  line-height: 48px;
  padding: 0 15px;
  font-size: 26px;
}
</style><link rel="stylesheet" type="text/css" href="/Public/Home/front_css/screen_wall.css">
<script src="/Public/Home/front_js/wall_base.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Home/front_js/screen_wall.js" type="text/javascript" charset="utf-8"></script>
<style>
.jbshow{position: fixed; opacity:0; display:none;
top: 0;
left: 0;
bottom: 0;
right: 0;
background-color: rgba(0, 0, 0, 0.8);
z-index: 2;font-size:32px;box-sizing: border-box;padding:0;}
.jbshow p{ padding:0; margin:0 auto;}
.jbshow .jbleft{ width:100%; height:100%; text-align:center;
border-radius: 10px;overflow: hidden; position:relative; opacity:0}
.jbshow .jbmz{ padding: 25px;
position: absolute;
bottom: 0;
left: 0;
right: 0;
background-color: rgba(0, 0, 0, 0.45);
color: #fff;opacity:0}
.jbshow .closeico{
position: absolute;
display: block;
width: 40px;
height: 40px;
right: 6px;
top: 6px;
background: rgba(0, 0, 0,0.8);
border-radius: 100%;
text-indent: -9999px;
z-index: 3;cursor:pointer;
}
.jbshow .closeico:hover{
background: rgba(0, 177, 7, 1);
}
.jbshow .closeico:before {
position: absolute;
top: 6px;
left: 19px;
content: "";
display: block;
width: 2px;
height: 30px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}
.jbshow .closeico:after {
position: absolute;
top: 20px;
left: 5px;
content: "";
display: block;
width: 30px;
height: 2px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}

.jbshow .fxtx{
position: absolute;
top: 10px;
left: 10px;
height: 60px;
overflow: hidden;
border-radius: 100px;
background-color: rgba(255, 255, 255, 0.95);
text-align: left;z-index: 10; opacity:0;box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
}
.jbshow .fxtx img{
width: 50px;
height: 50px;
border-radius: 100%;
margin: 5px;
float: left;
}
.jbshow .fxtx .fsmz{
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
line-height: 60px;
color: #000;
font-size: 24px;
display: block;
text-align: left;
margin-left:60px;padding: 0 15px 0 10px;
}

.infostyle-show{
    text-align: center;
}
.infostyle-show{
    line-height: 100%;
}
.MsgList div:hover .infostyle-show {
    display: block;
}
.infostyle-show {
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    box-shadow: -6px 0 30px rgba(0,0,0,.4);
    display: none;
}
.cotrol-style {
    position: absolute;
	 width: 100%;
    height: 100%;
    text-align: center;
    vertical-align: middle;
    font-size: 32px;
    line-height: 32px;
    display: block;
	background: url(http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/next.png) center no-repeat;
    background-size: contain;
    cursor: pointer;
}
.infostyle-show {
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    box-shadow: -6px 0 30px rgba(0,0,0,.4);
    display: none;
}
.detail_Css{
    top: 110px;
    bottom: 81px;
}
.detail {
	position: absolute;
	background-color: rgb(255, 255, 255);
	display: none;
	border-radius:2px;
}

.detail .close {
	position: absolute;
	top: 10px;
	right: 13px;
	cursor: pointer;
}

.detail .top {
	overflow: hidden;
	width: 88%;
	margin-left: 6%;
	border-bottom: 1px solid gray;
	height: 150px;
	line-height: 150px;
}

.detail .top .header {
	background: url('http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/header_border.png') center no-repeat;
	background-size: 100px 100px;
	height: 100px;
	width: 100px;
	padding-top: 2px;
	float: left;
	margin-top: 33px;
}

.detail .top .header span {
	display: block;
	background: url('http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/header.jpg') white center no-repeat;
	background-size: cover;
	border-radius: 50px;
	width: 85px;
	height: 85px;
	margin-top: 7px;
	margin-left: 7.5px;
}

.detail .top .name {
	color: #e8023c;
	font-size: 28px;
	text-align: center;
	
	float: left;
	font-weight: bold;
	margin-left: 15px;
}

.detail .bottom {
	width: 90%;
	font-size: 30px;
	color: #E8023C;
	padding: 15px 62px;
	padding-right: 0;
	padding-top: 0;
	margin-top: 15px;
	font-weight: bold;
	height: 250px;
	word-break: break-all;
	overflow: hidden;
}

.detail .bottom .only_img{
	max-height: 250px;
	margin-top: 1%;

}
.MsgList .MsgItem {
	background-color:rgba(18, 96, 176, 0);
}
.msg_body .nickname{
	color:#ffffff;
	font-size:29px;
}
.msg_body .msgword{
	color:#ffffff;
	font-size:35px;
}
.fans_img{
	width:auto;
}
.Panel.MsgList { position: absolute; top: 110px; bottom:81px; opacity: 0; width: 90%;padding: 0 5%;display: none;}
</style></head>

<body class="FUN WALL">
<div class="jbshow  ">
   <b class="closeico">关闭</b><div class="fxtx"><img id="hdimg" src="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=wall&amp;m=meepo_xianchang"><span id="zsmc" class="fsmz"></span></div>
   <div class="jbleft" style=""><p class="jbmz"></p></div>
</div>   
<div class="Panel Top" style="top: 0px;">
<div class="top_menu">
    <img class="activity_logo" src="/Public/Home/front_images/Q5gSN1py2MH28f6sex6eF0m31f65HP.png" onerror="this.src=&#39;http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/icon/top.png&#39;">
    <div class="top_title" style="font-size: 40px">
			             
                         
               
    <div style="">遇到无法测试的功能，请联系客服</div><div style="">微信现场互动3D签到演示</div></div>
	    <img class="mp_account_codeimage" src="/Public/Home/front_images/lE2Sj6EO42mM42Jzm5AnZK6OHHWMfm.jpg" onerror="../attachment/qrcode_1.jpg">
</div>
</div><div class="Panel MsgList" style="display: block; opacity: 1;">
	
	
	<div class="MsgItem" msg_id="22837" style="margin-bottom: 5px; display: block;">
        <div class="head" style="background-image: url(&quot;http://wx.qlogo.cn/mmopen/EAYO0ibuUORNu1nN9GdUuvnMTZQBef3zkfiaDhlKF752E1ibspuuYSyPEZypmKw2XuZqkJsWSBQZmYepG3ouZcd30Z9sX5LNo1A/132&quot;); width: 77px; height: 77px; top: 20px; left: 20px;"></div>
		<div class="msg_body" style="margin-left: 127px;">
			<div class="nickname" style="">晚风</div>
			<div class="msgword" style="">海可枯石可烂</div>
		</div>
		<div class="infostyle-show" msg_id="22837"><span class="cotrol-style"></span></div>
    </div>
		<div class="MsgItem" msg_id="22838" style="margin-bottom: 3.5px; visibility: visible;">
        <div class="head" style="background-image: url(&quot;http://wx.qlogo.cn/mmopen/EAYO0ibuUORNu1nN9GdUuvnMTZQBef3zkfiaDhlKF752E1ibspuuYSyPEZypmKw2XuZqkJsWSBQZmYepG3ouZcd30Z9sX5LNo1A/132&quot;); width: 78px; height: 78px; top: 20px; left: 20px;"></div>
		<div class="msg_body" style="margin-left: 128px;">
			<div class="nickname" style="">晚风</div>
			<div class="msgword" style="">ill里好</div>
		</div>
		<div class="infostyle-show" msg_id="22838"><span class="cotrol-style"></span></div>
    </div><div class="MsgItem" msg_id="22839" style="margin-bottom: 3.5px; visibility: visible;">
        <div class="head" style="background-image: url(&quot;http://wx.qlogo.cn/mmopen/ajNVdqHZLLCMwx5YcnnBYfrna7rgjPUkf6E65dwOfOibowJ2Yy232Oib16SPhOn4arrpKpE9FoT1E7VNhln5aTZg/132&quot;); width: 78px; height: 78px; top: 20px; left: 20px;"></div>
		<div class="msg_body" style="margin-left: 128px;">
			<div class="nickname" style="">刘小杨</div>
			<div class="msgword" style="">很好奇</div>
		</div>
		<div class="infostyle-show" msg_id="22839"><span class="cotrol-style"></span></div>
    </div></div>  
<script>
</script>
<div class="detail" style="display: none;">
	<img class="close" src="/Public/Home/front_images/close.png">
	<div class="top">
		<div class="header"><span></span></div>
		<div class="name">赞木</div>
	</div>
	<div class="bottom">13975325125</div>
</div>
<script>
$(function(){
	$('body').on('click','.infostyle-show',function(){
			var _this = $(this);
			clearInterval(show_msg_2);
			var avatar = _this.siblings('.head').css("background-image");
			$(".detail .header span").css({"background-image":avatar});
			$(".detail .name").html(_this.siblings('.msg_body').find('.nickname').text());
			
			$(".detail .bottom").html(_this.siblings('.msg_body').find('.msgword').html());
			if($(".detail .bottom").find('.fans_img').length>0){
				$(".detail .bottom").find('.fans_img').attr('style','')
				$(".detail .bottom").find('.fans_img').attr('class','only_img')
			}
			if($(".detail .bottom").find('.dt_emo').length>0){
				$(".detail .bottom").find('.dt_emo').attr('style','')
			}
			var paddingleft = ($(window).width() - ($(".MsgItem").width()+10))/2;
			$(".detail").css({"width":$(".MsgItem").width()+10,"height":$(".MsgList").height(),"margin":"0 "+paddingleft+"px"});
			$(".detail").addClass('detail_Css');
			$(".detail").show();
		})
});
</script>
<link rel="stylesheet" type="text/css" href="/Public/Home/front_css/footer.css">
<link href="/Public/Home/front_css/app_common.css" rel="stylesheet">
														<link rel="stylesheet" type="text/css" href="/Public/Home/front_css/style2.css">
									<div class="Panel Bottom" style="bottom: 0px;">
<div class="bottommenu">
        <img class="support_logo" src="/Public/Home/front_images/Q5gSN1py2MH28f6sex6eF0m31f65HP.png" onerror="javascript:this.src=&#39;http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/icon/bottom.png&#39;">
        <div class="helperpanel pulse">
         <span class="ssgz"><p><span style="color: rgb(255, 255, 255);">由于测试者在游戏未结束时就关闭网页，导致部分功能无法正常测试，可联系客服QQ：2758820275 在线处理测试哦！</span></p></span>
    </div>
    <div class="navbar">
         <ul class="navbarmenu">
            <li class="curr">
              <a class="neicon small" id="show_qd_code">
                <img class="" src="/Public/Home/front_images/icons-003.png">
                <p>二维码</p>
              </a>
            </li>	
						    			            <li class="curr">
              <a onclick="document.getElementById(&#39;videoplay&#39;).style.display=&#39;block&#39;;" class="neicon small">
                <img class="" src="/Public/Home/front_images/icons-007.png">
                <p>视频</p>
              </a>
            </li>
			            <li class="curr">
              <a onclick="document.getElementById(&#39;skinLayer&#39;).style.display=&#39;block&#39;;" class="neicon small">
                <img class="" src="/Public/Home/front_images/icons-004.png">
                <p>皮肤</p>
              </a>
            </li>
			            <li class="curr">
              <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;do=wall&amp;m=meepo_xianchang" class="neicon small">
                <img class="" src="/Public/Home/front_images/icons-005.png">
                <p>宽屏</p>
              </a>
            </li>
            <li class="curr">
              <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=1&amp;do=wall&amp;m=meepo_xianchang" class="neicon small">
                <img class="" src="/Public/Home/front_images/icons-006.png">
                <p>小屏</p>
              </a>
            </li>
            <li class="curr">
              <a onclick="document.getElementById(&#39;popup&#39;).style.display=&#39;block&#39;;" class="neicon small">
                <img class="" src="/Public/Home/front_images/icons-001.png">
                <p>应用</p>
              </a>
            </li>
            <li class="curr">
              <a class="neicon small navbaritem fullscreen" href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=wall&amp;m=meepo_xianchang#">
                <img class="" src="/Public/Home/front_images/icons-002.png">
                <p>全屏</p>
              </a>
            </li>
          </ul>
        <div class="btn-popup hidden" id="popup">
            <i class="closeb" onclick="document.getElementById(&#39;popup&#39;).style.display=&#39;none&#39;;"></i>
            <i class="icon-arrow2"></i>
            <ul class="btn-list clearfix">
             			               <li class="curr">
                <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=qd&amp;m=meepo_xianchang" class="neicon">
                  <i class="ico001 meepo-signin"></i>
                  <p>签到</p>
                </a>
              </li>
             						 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=lizi&amp;m=meepo_xianchang" class="neicon">
				<i class="ico016 meepo-threed"></i>
                <p>粒子签到</p>
                </a></li>
										               <li class="curr">
                <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=wall&amp;m=meepo_xianchang" class="neicon wall">
                   <i class="ico002 meepo-msgNum"></i>
                  <p>微信上墙</p>
                </a>
              </li>
			  						               <li class="curr">
                <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=barwall&amp;m=meepo_xianchang" class="neicon wall">
                  <i class="ico003 meepo-holdscreen"></i>
                  <p>霸屏上墙</p>
                </a>
              </li>
			  						               <li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=lottory&amp;m=meepo_xianchang" class="neicon">
				<i class="ico004 meepo-gift"></i>
                <p>抽奖</p>
                </a></li>
			  						               <li class="curr">
                <a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=jb&amp;m=meepo_xianchang" class="neicon">
                  
				  <i class="ico005 meepo-guest"></i>
                  <p>嘉宾展示</p>
                </a>
              </li>
			   						 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=vote&amp;m=meepo_xianchang" class="neicon">
				<i class="ico006 meepo-vote"></i>
                <p>投票</p>
                </a></li>
			   						 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=shake&amp;m=meepo_xianchang" class="neicon">
				<i class="ico007 meepo-shake"></i>
                <p>摇一摇</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=cjx&amp;m=meepo_xianchang" class="neicon">
				<i class="ico011 meepo-pie"></i>
                <p>抽奖箱</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=redpack&amp;m=meepo_xianchang" class="neicon">
				<i class="ico017 meepo-redpacker"></i>
                <p>抢红包</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=ddp&amp;m=meepo_xianchang" class="neicon">
				<i class="ico009 meepo-mstching"></i>
                <p>对对碰</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=xc&amp;m=meepo_xianchang" class="neicon"><i class="ico010 meepo-photo"></i>
                <p>相册</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=xyh&amp;m=meepo_xianchang" class="neicon">
				<i class="ico012 meepo-mstching"></i>
                <p>幸运号码</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=zjd&amp;m=meepo_xianchang" class="neicon">
				<i class="ico015 meepo-stars"></i>
                <p>砸金蛋</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=dm&amp;m=meepo_xianchang" class="neicon">
				<i class="ico013 meepo-msgNum"></i>
                <p>上墙弹幕</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=xysjh&amp;m=meepo_xianchang" class="neicon">
				<i class="ico015 meepo-phone"></i>
                <p>幸运手机号</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=tshake&amp;m=meepo_xianchang" class="neicon">
				<i class="ico008 meepo-shake"></i>
                <p>团队摇一摇</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=dt&amp;m=meepo_xianchang" class="neicon">
				<i class="ico018 meepo-photo"></i>
                <p>现场答题</p>
                </a></li>
										 				<li class="curr"><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;small=0&amp;t=1515651080&amp;do=mshake&amp;m=meepo_xianchang" class="neicon">
				<i class="ico019 meepo-shake"></i>
                <p>猴子爬树</p>
                </a></li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=xys&amp;m=meepo_xianchang" class="neicon">
						<i class="ico001- meepo-heart"></i>
						<p>许愿树</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=shuqian&amp;m=meepo_xianchang" class="neicon">
						<i class="ico002- meepo-money"></i>
						<p>疯狂数钱</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=dzqy&amp;m=meepo_xianchang" class="neicon">
						<i class="ico002- meepo-edit"></i>
						<p>电子签约</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=ydj&amp;m=meepo_xianchang" class="neicon">
						<i class="ico001 meepo-shake"></i>
						<p>摇大奖</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=3dlottory&amp;m=meepo_xianchang" class="neicon">
						<i class="ico002- meepo-threed"></i>
						<p>3D抽奖</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=3dyyy&amp;m=meepo_xianchang" class="neicon">
						<i class="ico001- meepo-shake"></i>
						<p>3D摇一摇</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=swimming&amp;m=meepo_xianchang" class="neicon">
						<i class="ico018 meepo-shake"></i>
						<p>3D游泳</p>
					</a>
				</li>
										 				<li class="curr">
					<a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;do=horse&amp;m=meepo_xianchang" class="neicon">
						<i class="ico016 meepo-shake"></i>
						<p>3D赛马</p>
					</a>
				</li>
														<li class="curr">
					<a href="http://wall.juxianchang.com/shqd/3d/show1.html" class="neicon" target="_blank">
						<img src="/Public/Home/front_images/lB9U3O394VysIvaibSi9w4uIIE49l4.png" style="background-color:rgba:(0,0,0,0.2)">
						<p>手绘签到</p>
					</a>
				</li>
			            </ul>
          </div>
        </div>
        

</div>
</div>
<div class="videoplay" id="videoplay"> <i class="closeb" onclick="document.getElementById(&#39;videoplay&#39;).style.display=&#39;none&#39;;"></i>
  <video class="video_id" id="video_id" controls="" autoplay=""></video>
  <input id="v_file" type="file" style="display:none;" onchange="play()">
  <button id="play" onclick="yincang()" class="playbtn">打开MP4视频文件</button>
  <script>
function yincang(){
var v_file=document.getElementById('v_file');
v_file.click();
}
function play(){
var file = document.getElementById('v_file').files[0];
var url = URL.createObjectURL(file);
console.log(url);
document.getElementById("video_id").src = url;

}
</script> 
</div><div class="skinLayer" id="skinLayer"> <i class="closeb" onclick="document.getElementById(&#39;skinLayer&#39;).style.display=&#39;none&#39;;"></i>
	<div class="stylebg"></div>
	<div class="style-center">
		<div class="style-nav">
			<ul class="style-nav-list"><li id="li0" class="curr"><a href="javascript:getmbhtml(0,this);">所有风格</a></li></ul>
		</div>
		<div class="style-box">
			<ul class="style-img-list"><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=1&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/001s.jpg">
					<p>风格1</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=2&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap active"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/002s.jpg">
					<p>风格2</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=3&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/003s.jpg">
					<p>风格3</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=4&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/004s.jpg">
					<p>风格4</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=5&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/005s.jpg">
					<p>风格5</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=6&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/006s.jpg">
					<p>风格6</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=7&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/007s.jpg">
					<p>风格7</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=8&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/008s.jpg">
					<p>风格8</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=9&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/009s.jpg">
					<p>风格9</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=10&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/010s.jpg">
					<p>风格10</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=11&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/011s.jpg">
					<p>风格11</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=12&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/012s.jpg">
					<p>风格12</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=13&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/013s.jpg">
					<p>风格13</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=14&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/014s.jpg">
					<p>风格14</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=15&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/015s.jpg">
					<p>风格15</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=16&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/016s.jpg">
					<p>风格16</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=17&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/017s.jpg">
					<p>风格17</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=18&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/018s.jpg">
					<p>风格18</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=19&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/019s.jpg">
					<p>风格19</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=20&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/020s.jpg">
					<p>风格20</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=21&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/021s.jpg">
					<p>风格21</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=22&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/022s.jpg">
					<p>风格22</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=23&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/023s.jpg">
					<p>风格23</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=24&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/024s.jpg">
					<p>风格24</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=25&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/025s.jpg">
					<p>风格25</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=26&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/026s.jpg">
					<p>风格26</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=27&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/027s.jpg">
					<p>风格27</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=28&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/028s.jpg">
					<p>风格28</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=29&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/029s.jpg">
					<p>风格29</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=30&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/030s.jpg">
					<p>风格30</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=31&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/031s.jpg">
					<p>风格31</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=32&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/032s.jpg">
					<p>风格32</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=33&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/033s.jpg">
					<p>风格33</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=34&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/034s.jpg">
					<p>风格34</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=35&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/035s.jpg">
					<p>风格35</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=36&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/036s.jpg">
					<p>风格36</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=37&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/037s.jpg">
					<p>风格37</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=38&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/038s.jpg">
					<p>风格38</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=39&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/039s.jpg">
					<p>风格39</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=40&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/040s.jpg">
					<p>风格40</p>
				</a></li><li><a href="http://wall.juxianchang.com/app/index.php?i=1&amp;c=entry&amp;rid=12&amp;basic_style=41&amp;do=wall&amp;m=meepo_xianchang" class="style-imgwrap"><span class="style-select"></span><img class="style-img" src="/Public/Home/front_images/041s.jpg">
					<p>风格41</p>
				</a></li></ul>
		</div>
	</div>
</div>
<div class="loginform" style="z-index:100">
	  <div class="activity_title">现场登录</div>
	  <div>
		<input id="password" class="password" placeholder="请输入登录密码" type="password">
	  </div>
	  <div class="submitline">
		<button class="button-login">开启</button>
	  </div>
</div>
<div class="loader" style="display: none;">
	<div class="icon"></div>
</div>
    <div class="bigmpcodebar">
      <div class="closebutton"></div>
      <div class="label">扫描下面的二维码参与聚现场微信大屏幕</div>
	        <img src="/Public/Home/front_images/index.php" onerror="javascript:this.src=&#39;../attachment/qrcode_1.jpg&#39;;">
	</div>
	<div class="show_qrcode">
      <div class="closebutton"></div>
      <div class="label">扫描下面的二维码关注公众号</div>
      <img src="/Public/Home/front_images/lE2Sj6EO42mM42Jzm5AnZK6OHHWMfm.jpg" onerror="javascript:this.src=&#39;../attachment/qrcode_1.jpg&#39;;">
	</div>
	 <div id="leafContainer"></div>   
	<div id="effect"></div>
	<div id="show_hide_nav"><img src="/Public/Home/front_images/opened.png"></div>
  <script>var imgs = document.getElementsByTagName('img');for(var i=0, len=imgs.length; i < len; i++){imgs[i].onerror = function() {if (!this.getAttribute('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('http://wall.juxianchang.com/attachment/') == -1 ? this.src.replace('http://of3kdd1ar.bkt.clouddn.com/', 'http://wall.juxianchang.com/attachment/') : this.src.replace('http://wall.juxianchang.com/attachment/', 'http://of3kdd1ar.bkt.clouddn.com/');this.setAttribute('check-src', true);}}}</script>
  <!--星星效果-->
<script>
$(document).ready(function(){
	if ($(".bg_video").length > 0) {
		$(".bg_video").css({width: $("body").width() + 2,height:"auto",opacity: 1})
	}
	$("#show_hide_nav img").on('click',function() {
		if($("#panel_status").val()==0){
			$(this).attr("src",'http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/opened.png');
			hidetb();
		}else{
			showtb();
			$(this).attr("src",'http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/chosed.png');

		}
	});
	$("#bg_music").click(function(e){
			e.preventDefault();
			if ($(this).attr('data-status')!=1) {
                $("#audio")[0].play();
				$(this).attr('data-status','1');
				$(this).find('img').attr('src','http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/icon/icon_music.png');
			} else {
				$("#audio")[0].pause();
				$(this).attr('data-status','0');
				$(this).find('img').attr('src','http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/no_music.png');
			}
	});
	$("#show_qd_code").click('click',function(){
		$(".bigmpcodebar").slideUp()
		$(".show_qrcode").slideDown();
	});
	$(".show_qrcode .closebutton").on("click", function() {
			$(".show_qrcode").slideUp()
	});
});
function showtb() {
	$("#panel_status").val("0");
    $(".Panel.Top").css({
        top: "-" + $(".Panel.Top").height() + "px"
    });
    $(".Panel.Bottom").css({
        bottom: "-" + $(".Panel.Bottom").height() + "px"
    });
}
function hidetb() {
	$("#panel_status").val("1");
    $(".Panel.Top").css({
        top: 0
    });
    $(".Panel.Bottom").css({
        bottom: 0
    });
};
</script>
<input type="hidden" id="panel_status" value="1">
		
<script>
function bigsmall(n) {}
function getmbhtml(cateid) {
	$(".style-img-list").load("./index.php?i=1&c=entry&control=wall&rid=12&do=get_skins&m=meepo_xianchang&cateid=" + cateid);
	$(".style-nav-list li").each(function() {
	  $(this).removeClass("curr");
	});
	$("#li" + cateid).addClass("curr");
}
function getcatehtml() 
getcatehtml();
getmbhtml(0);//默认获取全部风格	 
function bingkjj(){
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=qd&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=lizi&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=wall&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=barwall&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=lottory&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=jb&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=vote&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=shake&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=cjx&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=redpack&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=ddp&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=xc&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=xyh&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=zjd&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=dm&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=xysjh&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=tshake&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=dt&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=mshake&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=xys&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=shuqian&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=dzqy&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=ydj&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  					  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=3dlottory&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  					  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=3dyyy&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=swimming&m=meepo_xianchang";
		  return false;
		});			    
	 		$(document).bind("keydown","",function(){
		  		  		  window.location.href = "./index.php?i=1&c=entry&rid=12&small=0&t=1515651080&do=horse&m=meepo_xianchang";
		  return false;
		});			    
	 		
}
//快捷键
	document.onkeypress=function(event){
		if($(".loginform").css("display")=='block'){
			return;
		}
		var e = event || window.event;
		var keyCode = e.keyCode || e.which;
		
        switch (keyCode) {
			 case 13://enter键
							 break;
			case 32://f4
			           		break;
			case 61://+号
				
				if ($("#bg_music").attr('data-status')!=1) {
					$("#audio")[0].play();
					$("#bg_music").attr('data-status','1');
					$("#bg_music").find('img').attr('src','http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/images/icon/icon_music.png');
				} else {
					$("#audio")[0].pause();
					$("#bg_music").attr('data-status','0');
					$("#bg_music").find('img').attr('src','http://wall.juxianchang.com/addons/meepo_xianchang/template/mobile/app/no_music.png');
				}
				
			 break;
			case 47:
			           		break;
			case 46://大于号
			           		break;
			case 44://小于号
						break;
			default:
			break;
		}
	}
</script>
</body></html>