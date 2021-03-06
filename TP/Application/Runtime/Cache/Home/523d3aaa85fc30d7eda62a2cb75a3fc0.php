<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0032)http://www.juxianchang.com/case/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title> 微信墙案例|微信墙</title>

    <meta name="keywords" content="微信墙,微信大屏幕,3D签到,微信签到,微信红包雨,现场摇一摇,微信现场投票,微信上墙,电子签约,">
    <meta name="description" content="『聚现场』，是一款专业，简单，好用，个性化的场景互动（微信墙|微信大屏幕|智慧会议）制作工具，包括微信上墙、签到、3D签到、签约、抽奖、投票等微现场互动功能，摇一摇、红包雨、打赏、数钱、对对碰、打赏、霸屏等有趣的现场互动大屏幕游戏，适用于年会、酒吧、夜店、婚礼婚庆、校园活动、培训、赛事、演出等各类活动微现场，高端定制，活动成本低，现场互动效果佳，微信增粉效果好">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Home/css/all.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/fz.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/total.css" type="text/css">
    <script src="/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js"></script><script type="text/javascript" src="/Public/Home/js/all.js"></script>

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
</head>



<body>

<div class="wrap" id="wrap">
    <div id="top"></div>
    <div class="header">
        <div class="inner2 clearfix">
            <h1 class="logo left">
                <a href="<?php echo U('Home/Index/index');?>">聚现场-微信互动大屏幕</a>
            </h1>
            <button class="btn-menu js_BtnMenu right"><span></span><span></span><span></span></button>
            <div class="nav-login right"><a href="http://user.juxianchang.com/" rel="external nofollow" title="登录">登录</a></div>
            <ul class="nav-list right js_navList">
                <li id="js_guide" title="解决方案" class=""><a href="http://www.juxianchang.com/wxfunction/hudong/44.html">解决方案<em></em></a>
                    <ul class="subnav" style="display: none;">

                        <li><a href="http://www.juxianchang.com/wxfunction/qiandao/7.html">会议云</a></li>
                        <li><a href="http://www.juxianchang.com/wxfunction/qiandao/10.html">3D签到</a></li>
                        <li><a href="http://www.juxianchang.com/wxfunction/hudong/44.html">酒吧霸屏</a></li>

                    </ul>
                </li>

                <li class=""><a href="http://www.juxianchang.com/case" title="精选案例">案例</a></li>
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

    </style><style>
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
    <div class="main">
        <div class="list_wjxwall">
            <div class="crumbs"><a href="http://www.juxianchang.com/">网站首页</a><span> &gt; </span><a href="http://www.juxianchang.com/case/"> 微信墙案例</a> &gt;  列表</div>
            <ul class="list lh24 f14">
                <div class="art_img_box clearfix">
                    <div class="fl innerimg_box">
                        <a target="_blank" title="微信墙摇一摇礼赞莉莱庆典！" href="<?php echo U('Home/Index/index_case1');?>">
                            <img width="400" height="300" title="微信墙摇一摇礼赞莉莱庆典！" alt="微信墙摇一摇礼赞莉莱庆典！" class="home-thumb wp-post-image" src="/Public/Home/images/20171123105224911.jpg">								</a>
                    </div>
                    <div class="fr box_content">
                        <h2><a target="_blank" title="微信墙摇一摇礼赞莉莱庆典！" href="<?php echo U('Home/Index/index_case1');?>">微信墙摇一摇礼赞莉莱庆典！</a></h2>
                        <p class="intro">微信墙摇一摇助力莉莱庆典千人会场，封闭环节无压力，完美完成任务，中奖人员带走苹果电脑奖励乐开花！...... <a target="_blank" title="微信墙摇一摇礼赞莉莱庆典！" href="<?php echo U('Home/Index/index_case1');?>">【点击查看信息】</a></p>
                    </div>
                    <div class="news"></div>
                </div>

                <div class="art_img_box clearfix">
                    <div class="fl innerimg_box">
                        <a target="_blank" title="微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！" href="<?php echo U('Home/Index/index_case2');?>">
                            <img width="400" height="300" title="微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！" alt="微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！" class="home-thumb wp-post-image" src="/Public/Home/images/20171121023557871.jpg">								</a>
                    </div>
                    <div class="fr box_content">
                        <h2><a target="_blank" title="微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！" href="">微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！</a></h2>
                        <p class="intro">  11月7日晚间，“2017银基生态战略暨五粮液新品发布会”取得圆满成功，这是银基继去年推出“品汇壹号•云合伙”后，又一里程碑式的大事   ...... <a target="_blank" title="微信墙3D签到助力银基集团五粮液新品发布会暨糖重庆糖酒会！" href="<?php echo U('Home/Index/index_case2');?>">【点击查看信息】</a></p>
                    </div>
                    <div class="news"></div>
                </div>

                <div class="art_img_box clearfix">
                    <div class="fl innerimg_box">
                        <a target="_blank" title="微信墙助力长安马自达第二代CX-5重庆上市发布会！" href="<?php echo U('Home/Index/index_case3');?>">
                            <img width="400" height="300" title="微信墙助力长安马自达第二代CX-5重庆上市发布会！" alt="微信墙助力长安马自达第二代CX-5重庆上市发布会！" class="home-thumb wp-post-image" src="/Public/Home/images/20171030010804910.jpg">								</a>
                    </div>
                    <div class="fr box_content">
                        <h2><a target="_blank" title="微信墙助力长安马自达第二代CX-5重庆上市发布会！" href="<?php echo U('Home/Index/index_case3');?>">微信墙助力长安马自达第二代CX-5重庆上市发布会！</a></h2>
                        <p class="intro">9月23日在长安马自达第二代CX-5在重庆正式上市，重庆各地的经销商和客户都来到了发布会现场共同见证第二代CX-5，同时聚现场微信墙也为本次发布会的签到和抽奖提供了技术支持。...... <a target="_blank" title="微信墙助力长安马自达第二代CX-5重庆上市发布会！" href="<?php echo U('Home/Index/index_case3');?>">【点击查看信息】</a></p>
                    </div>
                    <div class="news"></div>
                </div>

                <div class="art_img_box clearfix">
                    <div class="fl innerimg_box">
                        <a target="_blank" title="微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!" href="http://www.juxianchang.com/case/125.html">
                            <img width="400" height="300" title="微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!" alt="微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!" class="home-thumb wp-post-image" src="/Public/Home/images/20170927112056224.jpg">								</a>
                    </div>
                    <div class="fr box_content">
                        <h2><a target="_blank" title="微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!" href="http://www.juxianchang.com/case/125.html">微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!</a></h2>
                        <p class="intro">重庆最嗨城市音乐节，聚现场助力现场微信摇一摇，大规模高规格，完美定制效果！微信大屏幕，我们是专业的！...... <a target="_blank" title="微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!" href="http://www.juxianchang.com/case/125.html">【点击查看信息】</a></p>
                    </div>
                    <div class="news"></div>
                </div>

                <div class="art_img_box clearfix">
                    <div class="fl innerimg_box">
                        <a target="_blank" title="北京微信红包雨,聚现场助力管家帮家政日启动仪式。" href="http://www.juxianchang.com/case/123.html">
                            <img width="400" height="300" title="北京微信红包雨,聚现场助力管家帮家政日启动仪式。" alt="北京微信红包雨,聚现场助力管家帮家政日启动仪式。" class="home-thumb wp-post-image" src="/Public/Home/images/20170823081217424.png">								</a>
                    </div>
                    <div class="fr box_content">
                        <h2><a target="_blank" title="北京微信红包雨,聚现场助力管家帮家政日启动仪式。" href="http://www.juxianchang.com/case/123.html">北京微信红包雨,聚现场助力管家帮家政日启动仪式。</a></h2>
                        <p class="intro"> 2017年8月6日全联房地产商会家庭服务业分会筹备大会暨家政日启动大会在北京国家会议中心启动召开，活动将为家政人提供“五个一”的福利：   ...... <a target="_blank" title="北京微信红包雨,聚现场助力管家帮家政日启动仪式。" href="http://www.juxianchang.com/case/123.html">【点击查看信息】</a></p>
                    </div>
                    <div class="news"></div>
                </div>

            </ul>
            <div id="pages" class="text-c"><a class="a1">36条</a> <a href="http://www.juxianchang.com/case/index.html" class="a1">上一页</a> <span>1</span> <a href="http://www.juxianchang.com/case/2.html">2</a> <a href="http://www.juxianchang.com/case/3.html">3</a> <a href="http://www.juxianchang.com/case/4.html">4</a> <a href="http://www.juxianchang.com/case/5.html">5</a> <a href="http://www.juxianchang.com/case/6.html">6</a> <a href="http://www.juxianchang.com/case/7.html">7</a> <a href="http://www.juxianchang.com/case/8.html">8</a> <a href="http://www.juxianchang.com/case/2.html" class="a1">下一页</a></div>
        </div>
    </div>  </div>
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
<!--start:footer-->

<div class="footter">

    <div style="clear: both"></div>
    <p class="noewr">Copyright © 2015 重庆果然科技有限公司 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">渝ICP备16010715号-2</a><a></a></p><a>
    <p>地址/Add：重庆· 江北区观音桥COSMO大厦24层   电话:023-64262166   15702388083 </p>
</a></div><a>

    <!-- 代码部分begin -->
</a><div class="keifu" style="height: 355px; top: 219.5px;"><a>
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
<a href="http://www.juxianchang.com/case/#top" id="scrollUp" style="display: none; position: fixed; z-index: 2147483647;"></a>
<script type="text/javascript" src="/Public/Home/js/tongji.js"></script>

<a id="scrollUp" href="http://www.juxianchang.com/case/#top" title=""></a></body></html>