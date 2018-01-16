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
  <script>
 
    $('.js_BtnMenu').on('click', function(){
        if ($(this).hasClass('curr')) {
        $(this).removeClass('curr');
        $('.js_navList').hide();
      } else {
        $(this).addClass('curr');
        $('.js_navList').show();
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

  <style type="text/css">
    .location-shopcar .padding-fix {
      padding:0px;
    }
	.funcs-list3 li .price-prev {
    display: block;
    font-size: 12px;
    color: #666;
    text-decoration: line-through;
    margin: -3px 0 0;
  </style>
  <!--end:header-->
  <div class="inner2 location clearfix">
    <div class="left">
     <a href="http://www.juxianchang.com/wxfunction/">功能服务</a> &gt; <a href="http://www.juxianchang.com/wxfunction/kphd/">跨屏互动</a> &gt;   <a href="http://www.juxianchang.com/wxfunction/kphd/17.html">自定义背景</a> 
    </div>
    <div class="location-shopcar js_locationShopcar right">

   </div>
  </div>
  <!--start:-->
  <div class="inner2">
    <div class="column2 clearfix">
      <div class="column2-pic left js_funcPic">
        <div id="js_funcPicBig" class="swiper-container  gallery-top">
          <div class="swiper-pagination"></div>
          <ul class="swiper-wrapper column2-pic-big">
                        <li class="swiper-slide"><img src="/Public/Home/images/20161001014249906.png"></li>
                      </ul>
        </div>
        <div id="js_funcPicSmall" class="swiper-container gallery-thumbs">
          <ul class="swiper-wrapper column2-pic-small clearfix">
                      </ul>
        </div>
      </div>
      <div class="column2-con left">
        <h3>自定义背景 </h3>
        <p>rere功夫功夫功夫功夫</p>
        <p class="price">￥<span>0元/天</span></p>
		  <p style="display: block; font-size: 12px; color:red;text-decoration: line-through; margin: -3px 0 0;"><span></span></p>
    <div class="tag">
		         	
			
			</div>
        <div class="options">
          <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes" class="btn-buy btn-normal btn-buy">立即联系</a>
          
         <div id="js_iconShopcar" class="icon-shopcar js_iconShopcar"><i></i></div>

                              
        </div>
      </div>
    </div>
    <div class="clearfix">
      <div class="sidebar left">
        <h3 class="title1">推荐功能</h3>
        <ul class="mall-list3">
                                       <li>  
                <a href="http://www.juxianchang.com/wxfunction/baoming/30.html">
                  <img src="/Public/Home/images/1481354053.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">邀请函</span>                  
                </a>
              </li>
                           <li>  
                <a href="http://www.juxianchang.com/wxfunction/baoming/27.html">
                  <img src="/Public/Home/images/1481354098.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">电子票</span>                  
                </a>
              </li>
                           <li>  
                <a href="http://www.juxianchang.com/wxfunction/hudong/25.html">
                  <img src="/Public/Home/images/1481354140.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">现场直播</span>                  
                </a>
              </li>
                           <li>  
                <a href="http://www.juxianchang.com/wxfunction/hudong/23.html">
                  <img src="/Public/Home/images/20161007100007101.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">摇一摇</span>                  
                </a>
              </li>
                           <li>  
                <a href="http://www.juxianchang.com/wxfunction/kphd/22.html">
                  <img src="/Public/Home/images/1481354369.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">自定义LOGO</span>                  
                </a>
              </li>
                           <li>  
                <a href="http://www.juxianchang.com/wxfunction/hudong/21.html">
                  <img src="/Public/Home/images/1481354241.png" style="border-radius:50px;" width="90" height="90">
				  <br>
                    <span class="title2">投票</span>                  
                </a>
              </li>
                                           <li>
          </li></ul>
		
      </div>

      <div class="detail right">
                <div class="detail-tab js_detailTab clearfix">
          <ul class="left">
            <li><a href="http://www.juxianchang.com/wxfunction/kphd/17.html#jsDetailIntro">详情介绍</a></li>
                                              
          </ul>
          <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes" class="btn-shopcar"><em></em>立即联系</a>
        </div>
      <div id="jsDetailIntro" class="detail-con">
          <div class="txt">
           <p>rere功夫功夫功夫功夫</p>		   </div>
        </div>
       
      </div>
      <!--end:detail-->
    </div>
  </div>
  <!--end:-->
</div>
<div class="keifu" style="height: 345px; top: 199.5px;">
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
<a href="http://www.juxianchang.com/wxfunction/kphd/17.html#top" id="scrollUp"></a>
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

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?cbc479ac4119d55c0b8a663cd1ccbdec";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!--百度统计-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c7a5bdab1ca800634638e6c2b6c570dc";
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
    $(".footer").append('<a href="javascript:void(0);" style="position: fixed; left: 0px; bottom: 5px; background: #fff000; padding: 3px;">这是测试机</a>');
  }
});
</script>

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
<div class="popmayer hidden">
</div>
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
<script type="text/javascript" src="/Public/Home/js/jquery.scrollUp.min.js">
</script>
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
<a id="scrollUp" href="http://www.juxianchang.com/jiaocheng/101.html#top" title="">
</a>
</body>
</html>