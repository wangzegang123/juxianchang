<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微信墙教程|微信墙</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <meta name="keywords" content="微信墙,微信大屏幕,3D签到,微信签到,微信红包雨,现场摇一摇,微信现场投票,微信上墙,电子签约,">
        <meta name="description" content="『聚现场』，是一款专业，简单，好用，个性化的场景互动（微信墙|微信大屏幕|智慧会议）
制作工具，包括微信上墙、签到、3D签到、签约、抽奖、投票等微现场互动功能，摇一摇、红包雨、打赏、数钱、对对碰、打赏、霸屏等有趣的现场互动大屏幕游戏，适用于年会、酒吧、夜店、婚礼婚庆、校园活动、培训、赛事、演出等各类活动微现场，高端定制，活动成本低，现场互动效果佳，微信增粉效果好">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Public/Home/css/all.css" type="text/css">
        <link rel="stylesheet" href="/Public/Home/css/fz.css" type="text/css">
        <link rel="stylesheet" href="/Public/Home/css/total.css" type="text/css">
        <script charset="utf-8" src="/Public/Home/js/b.js"></script><script charset="utf-8" src="https://tag.baidu.com/vcard/v.js?siteid=11464089&amp;url=http%3A%2F%2Fwww.juxianchang.com%2Fjiaocheng%2F3.html&amp;source=https%3A%2F%2Fwww.baidu.com%2Flink%3Furl%3Dm84oPv_V0gB1QSLlll7yj0_oYqXTix6z4-chBdnPuRKlgFooekdo8-n1yPxxGcve%26wd%3D%26eqid%3Da487628900014239000000025a56c7b4&amp;rnd=195658524&amp;hm=1"></script><script src="/Public/Home/js/hm.js"></script><script src="/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js"></script><script type="text/javascript" src="/Public/Home/js/all.js"></script>
        <style>
            .aldt{
                color: #686868;
                display: block;
                float: left;
                font-size: 14px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 350px;
            }
            .aldata{
                color: #b5b5b5;
                display: block;
                float: right;
                text-align: right;
                width: 95px;
            }
        </style>
        <script src="/Public/Home/js/pc_nb.js" charset="UTF-8">

        </script>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/main.css">
    <script type="text/javascript" src="http://p.qiao.baidu.com/cps/site/poll?cb=jsonp_bridge_1515654329172_8543663646110409&amp;l=1&amp;v=151503234331531619&amp;s=11464089&amp;e=24749122&amp;dev=0&amp;auth=%7B%22anonym%22%3A0%2C%22key%22%3A%222343139377234179395yjmr2622404744%22%2C%22sn%22%3A%22766138647%22%2C%22id%22%3A%22151503234331531619%22%2C%22from%22%3A4%2C%22token%22%3A%22bridge%22%7D&amp;_time=1515654329172" id="id_jsonp_bridge_1515654329172_8543663646110409" charset="utf-8">
    </script>
    </head>
<body>
<div class="header">
    
    <div class="inner2 clearfix">
        <h1 class="logo left">
            <a href="http://www.juxianchang.com/">聚现场-微信互动大屏幕</a>
        </h1>
        <button class="btn-menu js_BtnMenu right"><span></span><span></span><span></span></button>
        <div class="nav-login right"><a href="http://user.juxianchang.com/" rel="external nofollow" title="登录">登录</a></div>
        <ul class="nav-list right js_navList">
            <li><a href="http://www.juxianchang.com/case" title="精选案例">案例</a></li>
            <li><a href="http://demo.juxianchang.com/" title="演示" rel="external nofollow" target="_blank">演示<em class="icon-hot"></em></a></li>
            <li><a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" title="3D签到">3D签到</a></li>

            <li><a href="http://www.juxianchang.com/jiaocheng" title="使用教程">使用教程</a></li>
            <li><a href="http://www.juxianchang.com/mall" title="服务定价">服务定价</a></li>

            <li><a href="http://user.juxianchang.com/register.html" rel="external nofollow" title="免费开通">免费开通<em class="icon-hot"></em></a></li>

        </ul>
    </div>
    
</div>
<script>
    $(function(){
        /* 低分辨率导航js效果 */
        $('.js_BtnMenu').on('click', function(){
            if ($(this).hasClass('curr')) {
                $(this).removeClass('curr');
                $('.js_navList').hide();
            } else {
                $(this).addClass('curr');
                $('.js_navList').show();
            }
        });

        //合作渠道
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
<style>
    @media screen and (max-width:1024px){
        .keifu {width:100%;}
    }
    @media screen and (max-width:680px){
        .keifu{display: none;}
    }

</style>
<style>
    .main {
        background: none repeat scroll 0 0 #fff;
        margin: 0 auto;
        width: 980px;
    }
    .list_wjxwall {
        padding-top: 10px;
    }
    .crumbs {
        padding: 5px 20px;
    }
    #pages {
        font-size: 15px;
        font-weight: bold;
        height: 40px;
        margin: 5px 200px;
        text-align: center;
    }
    .intro {
        font-size: 16px !important;
        text-indent: 2em;
    }
    .innerimg_box img {
        background: none repeat scroll 0 0 #fff;
        border: 1px solid #dbdbdb;
        height: 154px;
        padding: 4px;
        width: 270px;
    }
    .box_content {
        position: relative;
        width: 650px;
    }.box_content p {
         color: #7a7a7a;
     }.fr {
          float: right;
      }a:link, a:visited {
           color: #333;
           text-decoration: none;
       }.fl {
            float: left;
        }ul, ol {
             margin-bottom: 10px;
             margin-top: 0;
         }.art_box, .art_img_box {
              background: none repeat scroll 0 0 #f1efef;
              border-bottom: 1px solid #dbdbdb;
              margin: 0 0 10px;
              padding: 15px;
              position: relative;
          }.box_content h2 {
               font-size: 18px;
               font-weight: bold;
               line-height: 26px;
               padding: 5px 0;
               text-indent: 3em;
           }.box_content p {
                color: #7a7a7a;
            }.intro {
                 font-size: 16px !important;
                 text-indent: 2em;
             }
</style>

<div class="wrap" id="wrap">
  <div id="top"></div>
<div class="main">
	<div class="list_wjxwall">
    	<div class="crumbs"><a href="http://www.juxianchang.com/">网站首页</a><span> &gt; </span><a href="http://www.juxianchang.com/jiaocheng/">微信墙教程</a> &gt;  列表</div>
    	        <ul class="list lh24 f14">
	<div class="art_img_box clearfix">
	<div class="fl innerimg_box">
	  <a target="_blank" title="教程二：如何配置微信大屏幕？" href="<?php echo U('lksix');?>">
							<img width="400" height="300" title="教程二：如何配置微信大屏幕？" alt="教程二：如何配置微信大屏幕？" class="home-thumb wp-post-image" src="http://qn.juxianchang.com/14957956575.png">								</a>
	</div>
    <div class="fr box_content">
					<h2><a target="_blank" title="教程二：如何配置微信大屏幕？" href="<?php echo U('lksix');?>">教程二：如何配置微信大屏幕？</a></h2>
					<p class="intro">微信墙_微信大屏幕_微信抽奖微盒微信大屏幕;专注微现场互动微信消息上墙、微信抽奖、现场摇一摇、微信3D签到、扫码签到等等教程二：消息   ...... <a target="_blank" title="教程二：如何配置微信大屏幕？" href="<?php echo U('lksix');?>">【点击查看信息】</a></p>
                   </div>
			<div class="news"></div>
             </div>
	
	<div class="art_img_box clearfix">
	<div class="fl innerimg_box">
	  <a target="_blank" title="聚现场：开通创建与平台绑定" href="<?php echo U('lkseven');?>">
							<img width="400" height="300" title="聚现场：开通创建与平台绑定" alt="聚现场：开通创建与平台绑定" class="home-thumb wp-post-image" src="http://www.juxianchang.com/uploadfile/2016/0513/thumb_400_300_20160513094910366.jpg">								</a>
	</div>
    <div class="fr box_content">
					<h2><a target="_blank" title="聚现场：开通创建与平台绑定" href="<?php echo U('lkseven');?>">聚现场：开通创建与平台绑定</a></h2>
					<p class="intro">教程一为最基础操作。...... <a target="_blank" title="聚现场：开通创建与平台绑定" href="<?php echo U('lkseven');?>">【点击查看信息】</a></p>
                   </div>
			<div class="news"></div>
             </div>
	
	<div class="art_img_box clearfix">
	<div class="fl innerimg_box">
	  <a target="_blank" title="盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇" href="<?php echo U('lkeight');?>">
							<img width="400" height="300" title="盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇" alt="盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇" class="home-thumb wp-post-image" src="http://www.juxianchang.com/uploadfile/2015/0126/thumb_400_300_20150126113458181.jpg">								</a>
	</div>
    <div class="fr box_content">
					<h2><a target="_blank" title="盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇" href="<?php echo U('lkeight');?>">盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇</a></h2>
					<p class="intro">微盒微信墙为了方便用户，已经预设了30多款不同风格的漂亮的主题模块，选择就可以使用。如果觉得预设的模板还不够有个性，不够突出主题，也   ...... <a target="_blank" title="盒子先生带你设置微信墙自定义背景，个性化时代岂能千篇" href="<?php echo U('lkeight');?>">【点击查看信息】</a></p>
                   </div>
			<div class="news"></div>
             </div>
	
	<div class="art_img_box clearfix">
	<div class="fl innerimg_box">
	  <a target="_blank" title="盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 " href="<?php echo U('lknane');?>">
							<img width="400" height="300" title="盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 " alt="盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 " class="home-thumb wp-post-image" src="http://www.juxianchang.com/uploadfile/2015/0126/thumb_400_300_20150126095038130.jpg">								</a>
	</div>
    <div class="fr box_content">
					<h2><a target="_blank" title="盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 " href="<?php echo U('lknane');?>">盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 </a></h2>
					<p class="intro">手机墙是微久信微信墙的一个特色，大家发送的上墙消息，不仅仅实时上墙，还同步出现在手机界面当中。
这个极大的解决了，大屏幕太远，发的消息看不清楚的问题...... <a target="_blank" title="盒子教你设置微信手机墙，不用看大屏幕也能玩得嗨 " href="<?php echo U('lknane');?>">【点击查看信息】</a></p>
                   </div>
			<div class="news"></div>
             </div>
	
        </ul>
        <div id="pages" class="text-c"><a class="a1">14条</a> <a href="<?php echo U('Lk1/index2');?>" class="a1">上一页</a> <a href="<?php echo U('Lk1/index');?>">1</a> <a href="<?php echo U('Lk1/index2');?>">2</a> <span>3</span> <a href="<?php echo U('Lk1/index3');?>" class="a1">下一页</a></div>
  </div>
  </div>
</div>
    
<script>
    var url = "http://www.juxianchang.com";
    $(function () {
        var qdStyleSwiper=new Swiper('#jsQdStyle',{
            autoplay:2000,
            speed:600,
            loop:true,
            autoplayDisableOnInteraction:false,
            nextButton: '#jsQdStyle .swiper-button-next',
            prevButton: '#jsQdStyle .swiper-button-prev',
        })

        $('.jsPopShow').click(function(){
            $('#jsPopTan').show();
        })
        $('#jsPopClose').click(function(){
            $('#jsPopTan').hide();
        })

        $('.js_btnContact').click(function () {
            if ($('.js_casesContact').hasClass('hidden')) {
                $('.js_casesContact').removeClass('hidden');
            } else {
                $('.js_casesContact').addClass('hidden');
            }
        });

        var bodyw = $('body').width();
        if (bodyw > 1100) {
            $('#js_casesBooking li').mouseover(function () {
                $(this).find('.pics-intro').show();
                $('#js_casesBooking li .pics').css({boxShadow: 'none'});
            })
            $('#js_casesBooking li .pics-intro').mouseleave(function () {
                $(this).hide();
                $('#js_casesBooking li .pics').css({boxShadow: '0 3px 10px rgba(0,0,0,0.5)'});
            });
        }
        var length = $('#js_casesBooking li').length;
        for (var i = 0; i <= length; i++) {
            $('#js_casesBooking li:nth-child(' + i + ')').find('.pics').addClass('js_casesBooking' + i);
            $('#js_casesBooking li:nth-child(' + i + ')').find('.swiper-pagination').addClass('navi' + i);
            var myswiper = new Swiper('.js_casesBooking' + i, {
                pagination: '.navi' + i,
                paginationClickable: true,
                effect: 'slide',
                spaceBetween: 0,
                autoplay: 2000,
                speed: 1000,
                loop: true
            });
        }

        //根据浏览器宽度设置导航样式
        if ($(window).width() < 525) {
            $('#js_navLit >div').addClass('nav-swiper-container');
            $('#js_navLit>div ul').addClass('swiper-wrapper ');
            $('#js_navLit>div ul li').addClass('swiper-slide');
            $('#js_navLit').append('<div class="swiper-button-prev btn-pre"></div>' + '<div class="btn-next swiper-button-next"></div>')


            var navSwiper = new Swiper('.nav-swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 1,
                grabCursor: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev'

            })
        }
        var oldPage = 0;
        $('#js_cons ul:eq(' + 0 + ') li').css('opacity', 1)
        $('#js_cons ul:eq(' + 0 + ') li').css({'opacity': 1})
        $('.funcs-scence3 .con').css({'height': $('#js_cons ul:eq(' + 0 + ')').height() + 'px'});

        $('#js_baNavs3 li').on('click', function () {
            var count = $('#js_baNavs3 li').index(this);

            $('#js_baNavs3 li').removeClass('curr');
            $('#js_baNavs3 li:eq(' + count + ')').addClass('curr');
            var goodsId = $(this).attr('data-goods');

            $('#btn-goods').attr('href', url + "/wxfunction/zservice/" + goodsId);
            $('#js_cons ul:eq(' + count + ')').css('display', 'block');
            $('.funcs-scence3 .con').animate({'height': $('#js_cons ul:eq(' + count + ')').height() + 'px'}, 1000);

            if (count != oldPage) {
                //判断创建的ul位置

                if (count > oldPage) {
                    for (var i = 0; i < $('#js_cons ul:eq(' + count + ') li').length; i++) {
                        //总运动时间相同
                        //第二行比第一行开始速度慢  Math.floor(i/3)判断为第几行
                        //每行第一个速度比第二个快  i%3 判断为第几行第几个
                        $('#js_cons ul:eq(' + count + ') li:eq(' + i + ')').css({
                            '-webkit-animation-name': 'moveLeft2',
                            'animation-name': 'moveLeft2',
                            '-webkit-animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + 's',
                            'animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-duration': 1.5 - (3 - i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            'animation-duration': 1.5 - (3 - i % 3) * .03 - Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-timing-function': 'ease-in-out',
                            'animation-timing-function': 'ease-in-out',
                            '-webkit-animation-fill-mode': 'forwards',
                            'animation-fill-mode': 'forwards',
                            '-webkit-animation-iteration-count': '1',
                            'animation-iteration-count': '1'
                        })
                    }
                    for (var i = 0; i < $('#js_cons ul:eq(' + oldPage + ') li').length; i++) {
                        //总运动时间相同
                        //第二行比第一行开始速度慢  Math.floor(i/3)判断为第几行
                        //每行第一个速度比第二个快  i%3 判断为第几行第几个
                        $('#js_cons ul:eq(' + oldPage + ') li:eq(' + i + ')').css({
                            '-webkit-animation-name': 'moveLeft1',
                            'animation-name': 'moveLeft1',
                            '-webkit-animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + 's',
                            'animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-duration': 1.5 - (3 - i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            'animation-duration': 1.5 - (3 - i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-timing-function': 'ease-in-out',
                            'animation-timing-function': 'ease-in-out',
                            '-webkit-animation-fill-mode': 'forwards',
                            'animation-fill-mode': 'forwards',
                            '-webkit-animation-iteration-count': '1',
                            'animation-iteration-count': '1'
                        })
                    }
                    oldPage = count;
                } else {
                    for (var i = 0; i < $('#js_cons ul:eq(' + count + ') li').length; i++) {
                        //总运动时间相同
                        //第二行比第一行开始速度慢  Math.floor(i/3)判断为第几行
                        //每行第一个速度比第二个快  i%3 判断为第几行第几个
                        $('#js_cons ul:eq(' + count + ') li:eq(' + i + ')').css({
                            '-webkit-animation-name': 'moveRight2',
                            'animation-name': 'moveRight2',
                            '-webkit-animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + .3 + 's',
                            'animation-delay': (3 - i % 3) * .04 + Math.floor(i / 3) * .1 + .3 + 's',
                            '-webkit-animation-duration': 1.5 - (3 - i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            'animation-duration': 1.5 - (3 - i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-timing-function': 'ease-in-out',
                            'animation-timing-function': 'ease-in-out',
                            '-webkit-animation-fill-mode': 'forwards',
                            'animation-fill-mode': 'forwards',
                            '-webkit-animation-iteration-count': '1',
                            'animation-iteration-count': '1'
                        })
                    }
                    for (var i = 0; i < $('#js_cons ul:eq(' + oldPage + ') li').length; i++) {
                        //总运动时间相同
                        //第二行比第一行开始速度慢  Math.floor(i/3)判断为第几行
                        //每行第一个速度比第二个快  i%3 判断为第几行第几个
                        $('#js_cons ul:eq(' + oldPage + ') li:eq(' + i + ')').css({
                            '-webkit-animation-name': 'moveRight1',
                            'animation-name': 'moveRight1',
                            '-webkit-animation-delay': (i % 3) * .03 + Math.floor(i / 3) * .1 + 's',
                            'animation-delay': (i % 3) * .03 + Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-duration': 1.5 - (i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            'animation-duration': 1.5 - (i % 3) * .04 - Math.floor(i / 3) * .1 + 's',
                            '-webkit-animation-timing-function': 'ease-in-out',
                            'animation-timing-function': 'ease-in-out',
                            '-webkit-animation-fill-mode': 'forwards',
                            'animation-fill-mode': 'forwards',
                            '-webkit-animation-iteration-count': '1',
                            'animation-iteration-count': '1'
                        })
                    }
                    oldPage = count;
                }
                setTimeout(function () {
                    $('#js_cons ul li').css('opacity', 0)
                    $('#js_cons ul:eq(' + count + ') li').css('opacity', 1);
                    $('#js_cons ul').css('display', 'none');
                    $('#js_cons ul:eq(' + count + ')').css('display', 'block');
                }, 1600)
            }

        });

        $('#js_baNavs3 li:first').click();



    });

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
<div class="menu2">
    <div class="inner2 clearfix">
        <ul class="menu2-list left">
            <li>
                <h3><a href="http://www.juxianchang.com/service/aboutus/">应用场景</a></h3>
                <p>企业年会 | 新品发布会 </p>
                <p>会议论坛 | 展会活动</p>
                <p>企业活动 | 婚庆相亲</p>
            </li>
            <li>
                <h3><a href="http://www.juxianchang.com/service/support/">服务支持</a></h3>
                <p><a href="http://www.juxianchang.com/service/support/">售后政策</a></p>
                <p><a href="http://www.juxianchang.com/service/support/">现场支持</a></p>
                <p><a href="http://www.juxianchang.com/service/support/">品牌定制</a></p>
            </li>
            <li>
                <h3><a href="http://www.juxianchang.com/service/aboutus/">资源下载</a></h3>
                <p><a href="http://www.juxianchang.com/tools/jxcweb.zip">专用浏览器</a></p>
                <p><a href="http://www.juxianchang.com/tools/guge.zip">其他浏览器</a></p>


            </li>
            <li>
                <h3><a href="http://www.juxianchang.com/service/aboutus/">关于我们</a></h3>
                <p><a href="http://www.juxianchang.com/service/aboutus/">商务合作</a></p>
                <p><a href="http://www.juxianchang.com/service/aboutus/">市场合作</a></p>
                <p><a href="http://www.juxianchang.com/service/aboutus/">加入我们</a></p>

            </li>
            <li class="last">
                <h3><a href="javascript:;">战略合作</a></h3>
                <p>微吼直播</p>
                <p>官方微信</p>
            </li>
        </ul>
        <div class="menu2-phone right">
            <h3><a href="tel:15702388083">15702388083</a></h3>

            <p>周一到周日    9:10-19:30</p>
            <p></p>
            <a href="javascript:;" style="CURSOR: pointer" class="btn-qqservice" onclick="javascript:window.open(&#39;http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes&#39;, &#39;_blank&#39;, &#39;height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no&#39;);" border="0" src="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes" alt="点击这里给我发消息"><em></em>QQ客服</a>
        </div>
    </div>
</div>
<div class="footter">

    <div style="clear: both"></div>
    <p class="noewr">Copyright © 2015 重庆果然科技有限公司 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">渝ICP备16010715号-2</a><a></a></p><a>
    <p>地址/Add：重庆· 江北区观音桥COSMO大厦24层</p>
</a></div><a>
    <!-- 代码部分begin -->
</a><div class="keifu" style="height: 355px; top: 206px;"><a>
</a><div class="keifu_tab"><a>
    <div class="icon_keifu" style="top: 127px;"></div>
</a><div class="keifu_box"><a>
</a><div class="keifu_head"><a></a><a href="javascript:void(0)" class="keifu_close"></a></div>
    <ul class="keifu_con">
        <li>聚现场-乐乐<br><a target="_blank" title="聚现场乐乐" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes" rel="external nofollow"><img src="/Public/Home/images/qq.png" height="22" width="92"></a></li>
        <br> <li>聚现场-阳阳<br><a target="_blank" title="聚现场阳阳" href="http://wpa.qq.com/msgrd?v=3&amp;uin=214023493&amp;site=qq&amp;menu=yes" rel="external nofollow"><img src="/Public/Home/images/qq.png" height="22" width="92"></a></li>
        <br> <li>聚现场-售后<br><a target="_blank" title="聚现场售后" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes" rel="external nofollow"><img src="/Public/Home/images/qq.png" height="22" width="92"></a></li>
        <li> </li></ul>
    <div class="keifu_bot"></div>
</div>
</div>
</div>
<script>$(function(){var KF=$(".keifu");var wkbox=$(".keifu_box");var kf_close=$(".keifu .keifu_close");var icon_keifu=$(".icon_keifu");var kH=wkbox.height();var kW=wkbox.width();var wH=$(window).height();KF.css({height:kH});icon_keifu.css("top",parseInt((kH-100)/2));var KF_top=(wH-kH)/2;if(KF_top<0)KF_top=0;KF.css("top",KF_top);$(kf_close).click(function(){KF.animate({width:"0"},200,function(){wkbox.hide();icon_keifu.show();KF.animate({width:26},300);});});$(icon_keifu).click(function(){$(this).hide();wkbox.show();KF.animate({width:kW},200);});});</script><script>var roleid=0;if(self!=top&&roleid==12){$('.header').addClass('hidden');$('.huixiaoerzx').removeClass('hidden');$('body').css("height","1300px");$('.order').css('box-shadow','1px 1px 5px 1px rgba(0, 0, 0, .1)');$('.menu2').addClass('hidden');$('.footer').addClass('hidden');}function getStyle(obj,name){if(obj.currentStyle){return obj.currentStyle[name];}else{return getComputedStyle(obj,false)[name];};};function startMove(obj,attr,iTarget){clearInterval(obj.timer);obj.timer=setInterval(function(){var curr=0;if(attr=='opacity'){curr=Math.round(parseFloat(getStyle(obj,attr))*100);}else{curr=parseInt(getStyle(obj,attr));};var speed=(iTarget-curr)/6;speed=speed>0?Math.ceil(speed):Math.floor(speed);if(curr==iTarget){clearInterval(obj.timer);}else{if(attr=='opacity'){obj.style.filter='alpha(opacity:'+(curr+speed)+')';obj.style.opacity=(curr+speed)/100;}else{obj.style[attr]=curr+speed+'px';};};},30);};</script>
<!-- wrap end-->
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
<a href="http://www.juxianchang.com/jiaocheng/index.html#top" id="scrollUp" style="display: none; position: fixed; z-index: 2147483647;"></a>
<script type="text/javascript" src="/Public/Home/images/tongji.js"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?43d2749eb596ae10194fc448ac5d5fa6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<a id="scrollUp" href="http://www.juxianchang.com/jiaocheng/index.html#top" title=""></a>
<ins id="newBridge"><!-- target: nodeBoard --><ins class="nb-nodeboard-base nb-nodeboard-position-base nb-nodeboard-left-bottom nb-hide" id="nb_nodeboard"><ins class="nb-nodeboard-contain-base nb-nodeboard-contain"><ins class="nb-nodeboard-top nb-nodeboard-top-9"><ins class="nb-head-title">请您留言</ins><ins class="nb-nodeboard-close" id="nb_nodeboard_close" data-type="min"></ins></ins><ins id="nb_nodeboard_text" class="nb-nodeboard-text"><p class="nb-nodeboard-company">聚现场离线电话</p><p class="nb-nodeboard-link">15702388083</p></ins><form id="nb_nodeboard_form" autocomplete="off" class="nb-board-form" action="http://p.qiao.baidu.com/cps//bookmanage/saveBook.action?userId=24749122" method="post" accept-charset="utf-8"><ins id="nb_nodeboard_set" class="nb-nodeboard-set"><ins class="nb-nodeboard-content"><textarea id="nb-nodeboard-set-content-js" name="content" data-ph="请在此输入留言内容，我们会尽快与您联系。（必填）" placeholder="请在此输入留言内容，我们会尽快与您联系。（必填）" class="nb-nodeboard-set-content"></textarea></ins><ins class="nb-nodeboard-name" style="z-index:6;"><ins class="nb-nodeboard-icon nodeName"></ins><input id="nb_nodeboard_set_name" data-write="0" name="visitorName" maxlength="30" class="nb-nodeboard-input" type="text" data-ph="姓名" placeholder="姓名"></ins><ins class="nb-nodeboard-name" id="nb_nodeboard_phone" style="z-index:5;"><ins class="nb-nodeboard-icon nodePhone"></ins><input id="nb_nodeboard_set_phone" name="visitorPhone" maxlength="30" class="nb-nodeboard-input" data-write="1" type="text" data-ph="电话（必填）" placeholder="电话（必填）"></ins><ins class="nb-nodeboard-name nb-nodeboard-ext-input" style="z-index:2;"><ins class="nb-nodeboard-icon nodeExt"></ins><input id="nb_nodeboard_ext_2" name="item0" class="nb-nodeboard-input" maxlength="50" type="text" data-write="0" data-ph="公司" placeholder="公司"></ins><ins class="nb-nodeboard-name nb-nodeboard-ext-input" style="z-index:1;"><ins class="nb-nodeboard-icon nodeExt"></ins><input id="nb_nodeboard_ext_1" name="item1" class="nb-nodeboard-input" maxlength="50" type="text" data-write="0" data-ph="活动日期" placeholder="活动日期"></ins></ins></form><ins class="nb-nodeboard-success" id="nb_nodeboard_success"><ins class="nb-success-box"><ins class="nb-success-icon"></ins><ins class="nb-success-title" id="nb_node_messagetitle">感谢留言</ins><ins class="nb-success-content" id="nb_node_messagecontent">我们会尽快与您联系</ins><ins id="sucess_close" class="nb-sucess-close">关闭</ins></ins></ins><ins class="nb-nodeboard-send" id="nb_node_contain"><ins id="nb_nodeboard_send" class="nb-nodeboard-send-btn nb-nodeboard-send-btn-9">发送</ins></ins></ins></ins><!-- end --><!-- target: iconIcon --><ins class="nb-icon-wrap nb-icon-base icon-right-bottom nb-icon-skin-0 nb-icon-icon" id="nb_icon_wrap" style=";width:193px;"><ins class="nb-icon-inner-wrap" style="height:77px;width:193px;;"><ins class="nb-icon-bridge0 nb-icon-bridge-base" data-type="iconInvite"></ins></ins></ins><!-- end --><!-- target: invite --><ins class="nb-invite-wrap nb-invite-wrap-base nb-position-base nb-middle customer-invite-style " id="nb_invite_wrap" style="width:400px;display:none;margin-left: -200px;margin-top: -141px;"><ins class="nb-invite-body nb-invite-skin-xc-0" style="height:282px;"><ins class="nb-invite-tool nb-invite-tool-base" id="nb_invite_tool" style=""></ins><ins class="nb-invite-text nb-invite-text-base"><ins class="nb-invite-welcome nb-invite-welcome-base nb-show" id="nb_invite_welcome"><p style="color: #fff">欢迎来到聚现场微信墙，请问有什么可以帮您？</p></ins></ins><ins class="nb-invite-btn-base nb-invte-btns-0"><ins class="nb-invite-cancel nb-invite-cancel-base" id="nb_invite_cancel">稍后再说</ins><ins class="nb-invite-ok nb-invite-ok-base" id="nb_invite_ok">现在咨询</ins>
</ins>
</ins>
</ins><!-- end -->
</ins>
</body>
</html>