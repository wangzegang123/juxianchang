<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0027)http://www.juxianchang.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>【聚现场】微信墙_微信上墙_微信大屏幕_3D签到_现场互动_微信互动游戏_3D微信墙官网</title>

    <meta name="keywords" content="微信墙,微信大屏幕,3D签到,微信签到,微信红包雨,现场摇一摇,微信现场投票,微信上墙,电子签约,">
    <meta name="description" content="『聚现场』，是一款专业，简单，好用，个性化的场景互动（微信墙|微信大屏幕|智慧会议）制作工具，包括微信上墙、签到、3D签到、签约、抽奖、投票等微现场互动功能，摇一摇、红包雨、打赏、数钱、对对碰、打赏、霸屏等有趣的现场互动大屏幕游戏，适用于年会、酒吧、夜店、婚礼婚庆、校园活动、培训、赛事、演出等各类活动微现场，高端定制，活动成本低，现场互动效果佳，微信增粉效果好">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Home/css/all.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/fz.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/total.css" type="text/css">
    <script charset="utf-8" src="/Public/Home/js/b.js"></script><script charset="utf-8" src="/Public/Home/js/v.js"></script><script src="/Public/Home/js/hm.js"></script><script src="/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js(1).js"></script><script type="text/javascript" src="/Public/Home/js/all.js"></script>

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
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        #container {
            position: relative;
            height: 400px;
            border: 1px solid #333;
            overflow: hidden;
        }

        #list {
            position: absolute;
            z-index: 1;
            width: 9600px;
            height: 450px;
        }

        #list img {
            float: left;
            width: 1920px;
            height: 450px;
        }

        #buttons {
            position: absolute;
            left: 250px;
            bottom: 20px;
            z-index: 2;
            height: 10px;
            width: 100px;
        }

        #buttons span {
            float: left;
            margin-right: 5px;
            width: 10px;
            height: 10px;
            border: 1px solid #fff;
            border-radius: 50%;
            background: #333;
            cursor: pointer;
        }

        #buttons .on {
            background: orangered;
        }

        .arrow {
            position: absolute;
            top: 180px;
            z-index: 2;
            display: none;
            width: 40px;
            height: 40px;
            font-size: 36px;
            font-weight: bold;
            line-height: 39px;
            text-align: center;
            color: #fff;
            background-color: RGBA(0, 0, 0, .3);
            cursor: pointer;
        }

        .arrow:hover {
            background-color: RGBA(0, 0, 0, .7);
        }

        #container:hover .arrow {
            display: block;
        }

        #prev {
            left: 20px;
        }

        #next {
            right: 20px;
        }
    </style>
    <script src="/Public/Home/js/pc_nb.js" charset="UTF-8"></script><link rel="stylesheet" type="text/css" href="/Public/Home/css/main.css"><script type="text/javascript" src="http://p.qiao.baidu.com/cps/site/poll?cb=jsonp_bridge_1515551814952_7689895224413423&amp;l=1&amp;v=151496609094367410&amp;s=11464089&amp;e=24749122&amp;dev=0&amp;auth=%7B%22anonym%22%3A0%2C%22key%22%3A%225840595850938652201ohfl2606303077%22%2C%22sn%22%3A%22765996671%22%2C%22id%22%3A%22151496609094367410%22%2C%22from%22%3A4%2C%22token%22%3A%22bridge%22%7D&amp;_time=1515551814952" id="id_jsonp_bridge_1515551814952_7689895224413423" charset="utf-8"></script></head>
<body>
<div class="wrap" id="wrap">
    <div id="top"></div>
    <div class="header">
        <div class="inner2 clearfix">
            <h1 class="logo left">
                <a href="http://www.juxianchang.com/">聚现场-微信互动大屏幕</a>
            </h1>
            <button class="btn-menu js_BtnMenu right"><span></span><span></span><span></span></button>
            <div class="nav-login right"><a href="<?php echo U('Home/Login/login');?>" rel="external nofollow" title="登录">登录</a></div>
            <ul class="nav-list right js_navList">
                <!--  <li id="js_guide" title="解决方案"><a href="/wxfunction/hudong/44.html">解决方案<em></em></a>
              <ul class="subnav" style="display: none;">

                    <li><a href="/wxfunction/qiandao/7.html">会议云</a></li>
                    <li><a href="/wxfunction/qiandao/10.html">3D签到</a></li>
                    <li><a href="/wxfunction/hudong/44.html">酒吧霸屏</a></li>

                </ul>
            </li> -->
                <li><a href="<?php echo U('Home/Index/index_case');?>" title="精选案例">案例</a></li>
                <li><a href="<?php echo U('Home/Index/demo');?>" title="演示" rel="external nofollow" target="_blank">演示<em class="icon-hot"></em></a></li>
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
    <div id="container">
        <div id="list" style="left: -1920px;" >
            <img src="/Public/Home/images/timg.jpg"  alt="1"/>
            <img src="/Public/Home/images/1498869946.jpg" alt="1"/>
            <img src="/Public/Home/images/yang.jpg" alt="2"/>
            <img src="/Public/Home/images/timg2.jpg" alt="3"/>
            <img src="/Public/Home/images/ding.jpg" alt="4"/>
            <img src="/Public/Home/images/timg.jpg" alt="5"/>
            <img src="/Public/Home/images/1498869946.jpg" alt="5"/>
        </div>
        <div id="buttons">
            <span index="1" class="on"></span>
            <span index="2"></span>
            <span index="3"></span>
            <span index="4"></span>
            <span index="5"></span>
        </div>
        <a href="javascript:;" id="prev" class="arrow">&lt;</a>
        <a href="javascript:;" id="next" class="arrow">&gt;</a>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            var list = document.getElementById('list');var prev = document.getElementById('prev');
            var next = document.getElementById('next');
            function animate(offset) {
                //获取的是style.left，是相对左边获取距离，所以第一张图后style.left都为负值，
                //且style.left获取的是字符串，需要用parseInt()取整转化为数字。
                var newLeft = parseInt(list.style.left) + offset;
                list.style.left = newLeft + 'px';
                if(newLeft<-9600){
                    list.style.left=-1920+"px";
                }
                if(newLeft==-9600){
                    list.style.left=0+"px";
                }
                if(newLeft>-1920){
                    list.style.left=-9600+"px";
                }
            }
            prev.onclick = function() {
                animate(1920);
            };
            next.onclick = function() {
                animate(-1920);
            };


        var timer;
        function play() {
            timer = setInterval(function () {
                next.onclick()
            }, 500)
        }
        play();
        var container = document.getElementById('container');
        function stop() {
            clearInterval(timer);
        }
        container.onmouseover = stop;
        container.onmouseout = play;
        var buttons = document.getElementById('buttons').getElementsByTagName('span');
        var index = 1;

        function buttonsShow() {
            //这里需要清除之前的样式
            for (var i = 0; i < buttons.length; i++) {
                if (buttons[i].className == 'on') {
                    buttons[i].className = '';
                }
            }
            //数组从0开始，故index需要-1
            buttons[index - 1].className = 'on';



        }
            prev.onclick = function () {
                index -= 1;
                if (index < 1) {
                    index = 5;
                }
                buttonsShow();
                animate(1920);
            };
        next.onclick = function() {
            //由于上边定时器的作用，index会一直递增下去，我们只有5个小圆点，所以需要做出判断
            index += 1;
            if (index > 5) {
                index = 1;
            }
            buttonsShow();
            animate(-1920);
        };
        for (var d = 0; d < buttons.length; d++) {
            buttons[d].onclick = function () {
                // 在浏览器的控制台打印一下，看看结果
                console.log(d);
                /* 偏移量获取：这里获得鼠标移动到小圆点的位置，用this把index绑定到对象buttons[i]上，去谷歌this的用法  */
                /* 由于这里的index是自定义属性，需要用到getAttribute()这个DOM2级方法，去获取自定义index的属性*/
                var clickIndex = parseInt(this.getAttribute('index'));
                var offset = 1920 * (index - clickIndex);
                animate(offset); //存放鼠标点击后的位置，用于小圆点的正常显示
                index = clickIndex;
                buttonsShow();
            }
        }
        for (var y = 0; y < buttons.length; y++) {
            // 这里使用的是立即执行函数，
            (function(y) {
                buttons[y].onclick = function() {
                    var clickIndex = parseInt(this.getAttribute('index'));
                    var offset = 1920 * (index - clickIndex);
                    animate(offset);
                    index = clickIndex;
                    buttonsShow();
                }
            })(y)
        }
        };
    </script>

    <script>

        $(function() {
            //banner动画改用swiper插件 微盒互动
            $('.quake-slider').quake({
                thumbnails: true,
                animationSpeed: 1000,
                pauseTime: 3000,
                applyEffectsRandomly: true,
                navPlacement: 'outside',
                navAlwaysVisible: true,
                captionOpacity: '0.8'
            });

        });
    </script>

    <div class="index_main_bgbox">
        <div class="index_main_box">
            <div class="index_main_titlebox index_wxsystem_title index_main_titlebox_zhuyun">
                <h1>活动一站式流程</h1>
            </div>
            <div class="index_system_mainbox clearfix">
                <div class="index_system_listbox">

                    <div class="index_system_iconbox">
                        <div class="index_system_icon">
                            <span class="system_icon01"></span>
                        </div>
                        <div class="index_system_title">
                            <a target="blank" href="http://www.juxianchang.com/">
                                <h2>报名/邀请</h2>
                            </a>
                            <p>宣传大气，工序简洁</p>
                        </div>
                    </div>
                    <div class="index_system_pricebox">

                        <div class="system_price_functionbox">
                            <ul>
                                <li>会议主网站</li>
                                <li>H5邀请函</li>

                                <li>微网站定制 </li>
                                <li>报名登记 </li>

                                <li>微信公众号 </li>
                                <li>电子门票</li>

                                <li class="system_price_function_uncheck1"> </li>
                                <li class="system_price_function_uncheck1"> </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="index_system_listbox index_system_list02">

                    <div class="index_system_iconbox">
                        <div class="index_system_icon">
                            <span class="system_icon02"></span>
                        </div>
                        <div class="index_system_title">
                            <a target="_blank" href="http://www.juxianchang.com/">
                                <h2>活动签到</h2>
                            </a>
                            <p>无纸化，环保、高效、高端</p>
                        </div>
                    </div>
                    <div class="index_system_pricebox">

                        <div class="system_price_functionbox">
                            <ul>
                                <li>扫码签到</li>
                                <li>3D 签到</li>
                                <li><a href="http://www.juxianchang.com/wxfunction/qiandao/7.html">Pad签到</a></li>
                                <li>拍照签到</li>
                                <li>手绘签名</li>
                                <li>身份证签到</li>
                                <li>人脸识别</li>
                                <li>现场制证</li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="index_system_listbox index_system_list03">

                    <div class="index_system_iconbox">
                        <div class="index_system_icon">
                            <span class="system_icon03"></span>
                        </div>
                        <div class="index_system_title">
                            <a target="_blank" href="http://www.juxianchang.com/">
                                <h2>现场互动</h2>
                            </a>
                            <p>彰显品牌，带动氛围，嗨翻全场</p>
                        </div>
                    </div>
                    <div class="index_system_pricebox">

                        <div class="system_price_functionbox">
                            <ul>
                                <li>消息墙/弹幕</li>
                                <li>微信红包雨</li>

                                <li>跑马摇一摇</li>
                                <li>疯狂数钱</li>

                                <li>3D抽奖</li>
                                <li>滚动抽奖</li>

                                <li>网络直播</li>
                                <li>霸屏打赏</li>

                                <li>对对碰</li>
                                <li>许愿墙</li>

                                <li>现场投票</li>
                                <li>N+种功能</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="index_system_listbox index_system_list04">

                    <div class="index_system_iconbox">
                        <div class="index_system_icon">
                            <span class="system_icon04"></span>
                        </div>
                        <div class="index_system_title">
                            <a target="_blank" href="http://www.juxianchang.com/">
                                <h2>数据分析</h2>
                            </a>
                            <p>全方位统计，助力您的二次营销</p>
                        </div>
                    </div>
                    <div class="index_system_pricebox">

                        <div class="system_price_functionbox">
                            <ul>
                                <li>用户统计</li>
                                <li>签到统计</li>

                                <li>互动统计</li>
                                <li>  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="index_addservices_bgbox">
        <div class="index_addservices_mainbox">
            <ul>
                <li>
                    <div class="addservices_main_list">
                        <h5>简单化</h5>
                    </div>
                    <p>只需点点鼠标，就能开启高端互动之旅</p>
                </li>
                <li>
                    <div class="addservices_main_list addservices_main_list02">
                        <h5>个性化</h5>
                    </div>
                    <p>免费自定义LOGO,背景。如果还不满足,交给我们工程师吧!</p>
                </li>
                <li>
                    <div class="addservices_main_list addservices_main_list03">
                        <h5>丰富化</h5>
                    </div>
                    <p>多达30多种功能,适应各种活动场合。不定期有新功能上线！</p>
                </li>
                <li>
                    <div class="addservices_main_list addservices_main_list04">
                        <h5>专业化</h5>
                    </div>
                    <p>7*12H专属在线客服远程支持；专属服务器，保障活动稳定流畅。</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="main_consultbg">
        <div class="main_consultbox">
            <table>
                <tbody><tr>
                    <td>
                        <div class="main_consultbox_people"></div>
                    </td>
                    <td width="700">
                        <div class="main_consultbox_content">
                            <div class="main_consultbox_content_title">三云联动！ 会议云、互动云、营销云！</div>
                            <div class="main_consultbox_content_hint">聚现场微信墙成为千万商家客户的首选。说出你的需求，满足你的策划。</div>
                        </div>
                    </td>
                    <td width="210">
                        <div class="main_consultbox_button"><a href="http://www.juxianchang.com/case" id="marketing_qq_a">了解更多</a></div>
                    </td>
                </tr>
                </tbody></table>
        </div>
    </div>





    <!--start:方案-->
    <div class="bg-gray baItem">
        <div class="inner web-column">
            <h3 class="title1">各大场景互动解决方案</h3>
            <div class="funcs-scence3 ">
                <div class="navList" id="js_navLit">
                    <div>
                        <ul class="clearfix navs" id="js_baNavs3">

                            <li data-goods="54.html" class="left curr">酒吧版</li>
                            <li data-goods="55.html" class="left">年会版</li>
                            <li data-goods="56.html" class="left">婚礼版</li>
                            <li data-goods="57.html" class="left">会议版</li>
                            <li data-goods="58.html" class="left">户外版</li>
                            <li data-goods="59.html" class="left">校园版</li>
                            <li data-goods="60.html" class="left">电视版</li>
                            <li data-goods="61.html" class="left r-last">赛事版</li>

                        </ul>
                    </div>
                </div>
                <div class="content">
                    <div class="con" id="js_cons" style="height: 217px;">

                        <ul class="item  clearfix " style="display: block;">

                            <li class="left" style="opacity: 1;">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/44.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498833458.gif"></div>
                                    <p>消息霸屏</p>
                                </a>
                            </li>
                            <li class="left" style="opacity: 1;">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/23.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498822604.gif"></div>
                                    <p>摇一摇</p>
                                </a>
                            </li>
                            <li class="left" style="opacity: 1;">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/18.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828426.gif"></div>
                                    <p>对对碰</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/48.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498830405.gif"></div>
                                    <p>LOGO墙</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/47.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498831657.gif"></div>
                                    <p>许愿树</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/39.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498869777.gif"></div>
                                    <p>手绘签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/33.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498827929.gif"></div>
                                    <p>红包雨</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/23.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498822604.gif"></div>
                                    <p>摇一摇</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/21.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498814692.gif"></div>
                                    <p>投票</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/18.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828426.gif"></div>
                                    <p>对对碰</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/7.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828313.gif"></div>
                                    <p>签到</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/48.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498830405.gif"></div>
                                    <p>LOGO墙</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/47.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498831657.gif"></div>
                                    <p>许愿树</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/33.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498827929.gif"></div>
                                    <p>红包雨</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/css/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/7.html" target="_blank">
                                    <div><img src="/Public/Home/css/1498828313.gif"></div>
                                    <p>签到</p>
                                </a>
                            </li>

                        </ul>


                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/48.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498830405.gif"></div>
                                    <p>LOGO墙</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/39.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498869777.gif"></div>
                                    <p>手绘签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/7.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828313.gif"></div>
                                    <p>签到</p>
                                </a>
                            </li>                  </ul>

                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/48.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498830405.gif"></div>
                                    <p>LOGO墙</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/45.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498879236.gif"></div>
                                    <p>高级弹幕</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/39.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498869777.gif"></div>
                                    <p>手绘签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/33.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498827929.gif"></div>
                                    <p>红包雨</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/23.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498822604.gif"></div>
                                    <p>摇一摇</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/18.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828426.gif"></div>
                                    <p>对对碰</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>                  </ul>

                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/48.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498830405.gif"></div>
                                    <p>LOGO墙</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/47.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498831657.gif"></div>
                                    <p>许愿树</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/23.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498822604.gif"></div>
                                    <p>摇一摇</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/21.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498814692.gif"></div>
                                    <p>投票</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/18.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828426.gif"></div>
                                    <p>对对碰</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>
                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/7.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828313.gif"></div>
                                    <p>签到</p>
                                </a>
                            </li>                  </ul>

                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/qiandao/10.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498828356.gif"></div>
                                    <p>3D签到</p>
                                </a>
                            </li>                  </ul>


                        <ul class="item  clearfix ">

                            <li class="left">
                                <a href="http://www.juxianchang.com/wxfunction/hudong/21.html" target="_blank">
                                    <div><img src="/Public/Home/images/1498814692.gif"></div>
                                    <p>投票</p>
                                </a>
                            </li>                  </ul>
                    </div>
                    <a href="http://www.juxianchang.com/wxfunction/zservice/54.html" class="btn" id="btn-goods" target="_blank">查看方案</a>
                </div>
            </div>
        </div>
    </div>
    <!--start:案例展示-->
    <div class="bg-gray">
        <div class="inner web-column">
            <h3 class="title1">案例展示<a href="http://www.juxianchang.com/case" target="">查看更多</a></h3>
            <div class="cases-list3">
                <ul class="clearfix">

                    <li><a href="http://www.juxianchang.com/case/125.html"><img src="/Public/Home/images/20170927112056224.jpg"><span>微信摇一摇助力重庆最嗨城市音乐节hip-hop澎湃音乐力量燃爆人民大礼堂!</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/123.html"><img src="/Public/Home/images/20170823081217424.png"><span>北京微信红包雨,聚现场助力管家帮家政日启动仪式。</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/122.html"><img src="/Public/Home/images/20170823074729810.png"><span>3D签到微信墙助【中国平安】人力峰会盛典！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/121.html"><img src="/Public/Home/images/20170819105020371.jpg"><span>重庆西旅会带你逛现场！微信摇一摇抽大奖... 各种耍事任你嗨！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/120.html"><img src="/Public/Home/images/20170819105210624.jpg"><span>满满的感动！微信3D签到，微信许愿墙弹幕助力重庆师范大学涉外商院2017毕业典礼现场！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/113.html"><img src="/Public/Home/images/20170819105235855.jpg"><span>全北京都在看这场视听盛宴，你难道不想看吗？</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/105.html"><img src="/Public/Home/images/20170819105302576.jpg"><span>新东方2016泡泡少儿教育圣诞狂欢夜，微信大屏抽奖嗨翻！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/103.html"><img src="/Public/Home/images/20170819105332207.jpg"><span>微信现场红包雨，抢微信红包！众泰大迈千人抢购会|视频</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/96.html"><img src="/Public/Home/images/20170819105357555.jpg"><span>微信3D签到互动！看广州2016年全民读书活动周启动！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/95.html"><img src="/Public/Home/images/20170819105429213.jpg"><span>聚现场微信大屏幕助力美格真上海CDS口腔展全场人声鼎沸！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/94.html"><img src="/Public/Home/images/20170819105454996.jpg"><span>聚现场助力重庆市二手车诚信经营展示宣传活动！</span></a></li>

                    <li><a href="http://www.juxianchang.com/case/93.html"><img src="/Public/Home/images/20170819105520511.jpg"><span>神马专车微信跑马摇！携李璨琛邀你玩嗨荧光电音节！</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end 案例介绍-->
    <h2 style="text-align:center;border-bottom: 1px solid #e4e4e4;text-align: center;height: 20px;margin-top: 8px;margin-bottom: 45px;">
 <span style="background: -webkit-linear-gradient(left, #30b3d4 ,#25cbd0,#1dd2d0,#25cbd0,#30b3d4 ); border-radius: 4px;
display: inline;
font-size: 30px;
padding: 20px;
z-index: 99;
color: #fff;">微信墙教程/新闻</span></h2>

    <div style="background:#fff" class="contactbox">
        <div class="inner clearfix">

            <div class="sendus left">
                <div class="title_bar">
                    <h3><a target="_blank" href="http://www.juxianchang.com/jiaocheng/"><strong>微信墙使用教程</strong></a></h3><a target="_blank" class="more" href="http://www.juxianchang.com/jiaocheng/">更多使用教程</a>
                </div>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/119.html" class="white-link" target="_blank">做微信大屏幕互动时，怎样让用户关注公众号参与互动！</a></span><span class="aldata">2017-06-16</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/118.html" class="white-link" target="_blank">聚现场微信墙新功能推出：签到验证+微信签到美化背景+签到后返回座位信息等</a></span><span class="aldata">2017-06-16</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/115.html" class="white-link" target="_blank">聚现场：猴子爬树微信摇一摇设置</a></span><span class="aldata">2017-05-26</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/104.html" class="white-link" target="_blank">聚现场微信墙微信抽奖/微信摇一摇背景音乐，主推大气背景音乐和喜庆背景音</a></span><span class="aldata">2016-06-17</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/102.html" class="white-link" target="_blank">微信大屏幕现场互动怎么操作？</a></span><span class="aldata">2014-12-06</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/101.html" class="white-link" target="_blank">怎么做微信摇一摇_如何进行现场微信抽奖？【视频教程】</a></span><span class="aldata">2015-09-19</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/100.html" class="white-link" target="_blank">微信墙怎么开通_微信上墙怎么申请对接？【视频教程】</a></span><span class="aldata">2016-12-12</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/99.html" class="white-link" target="_blank">怎么做？【新手必看】</a></span><span class="aldata">2015-12-11</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/98.html" class="white-link" target="_blank">微信墙跑马摇一摇怎么做？</a></span><span class="aldata">2016-03-12</span> <br>
                <br><span style="aldt"><a href="http://www.juxianchang.com/jiaocheng/97.html" class="white-link" target="_blank">微信3d签到！聚现场如何实现？</a></span><span class="aldata">2016-10-24</span> <br>
                <br><br>
            </div>
            <div class="sendus right">
                <div class="title_bar">
                    <h3><a class="_blank" href="http://www.juxianchang.com/case"><strong>微信墙最新动态</strong></a></h3><a target="_blank" class="more" href="http://www.juxianchang.com/xinwen/">更多微信墙动态</a>
                </div>
                <br><span class="aldt"><a href="http://www.juxianchang.com/xinwen/124.html" class="white-link" target="_blank">聚现场电子签约隆重上线！</a></span><span class="aldata">2017-08-23</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/113.html" class="white-link" target="_blank">全北京都在看这场视听盛宴，你难道不想看吗？</a></span><span class="aldata">2017-01-15</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/88.html" class="white-link" target="_blank">微盒大屏幕助力-2016都江堰国际论坛青羊分论坛现场大会！</a></span><span class="aldata">2016-07-29</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/92.html" class="white-link" target="_blank">海之言“海滨夏令营”深圳站玩微信大屏幕跑马摇-聚现场</a></span><span class="aldata">2016-10-06</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/94.html" class="white-link" target="_blank">聚现场助力重庆市二手车诚信经营展示宣传活动！</a></span><span class="aldata">2016-10-06</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/95.html" class="white-link" target="_blank">聚现场微信大屏幕助力美格真上海CDS口腔展全场人声鼎沸！</a></span><span class="aldata">2016-10-15</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/96.html" class="white-link" target="_blank">微信3D签到互动！看广州2016年全民读书活动周启动！</a></span><span class="aldata">2016-10-24</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/103.html" class="white-link" target="_blank">微信现场红包雨，抢微信红包！众泰大迈千人抢购会|视频</a></span><span class="aldata">2016-12-18</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/105.html" class="white-link" target="_blank">新东方2016泡泡少儿教育圣诞狂欢夜，微信大屏抽奖嗨翻！</a></span><span class="aldata">2016-12-23</span> <br>
                <br><span class="aldt"><a href="http://www.juxianchang.com/case/81.html" class="white-link" target="_blank">众泰汽车开业庆典，微盒微信墙助力！</a></span><span class="aldata">2016-04-19</span> <br>
            </div>
        </div>
    </div>
</div>
<!--satart:合作伙伴-->
<div class="bg-gray">
    <div class="inner web-column">
        <h3 class="title1">合作伙伴</h3>
        <ul class="logoes-list1 clearfix">
            <li><a href="http://qq.com/" title="腾讯众创" target="_blank"><img src="/Public/Home/images/20170226043813141.jpg" height="100" width="100"></a></li>

            <li><a href="http://baidu.com/" title="大学" target="_blank"><img src="/Public/Home/images/20170226043910423.jpg" height="100" width="100"></a></li>

            <li><a href="http://www.juxianchang.com/" title="城市电视" target="_blank"><img src="/Public/Home/images/20161029101415375.jpg" height="100" width="100"></a></li>

            <li><a href="http://qq.com/" title="腾讯" target="_blank"><img src="/Public/Home/images/20170226043857213.jpg" height="100" width="100"></a></li>

            <li><a href="http://baidu.com/" title="百度" target="_blank"><img src="/Public/Home/images/20170226043801711.jpg" height="100" width="100"></a></li>

            <li><a href="http://souhu.com/" title="搜狐" target="_blank"><img src="/Public/Home/images/20161029101307893.jpg" height="100" width="100"></a></li>

            <li><a href="http://baidu.com/" title="海康威视" target="_blank"><img src="/Public/Home/images/20170226043824488.jpg" height="100" width="100"></a></li>


        </ul>
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
<!--start:footer-->
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
            <a href="javascript:;" style="CURSOR: pointer" class="btn-qqservice" onclick="javascript:window.open(&#39;http://wpa.qq.com/msgrd?v=3&amp;uin=2758820275&amp;site=qq&amp;menu=yes&#39;, &#39;_blank&#39;, &#39;height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no&#39;);" border="0" src="http://wpa.qq.com/msgrd?v=3&amp;uin=1374018606&amp;site=qq&amp;menu=yes" alt="点击这里给我发消息"><em></em>QQ客服</a>
        </div>
    </div>
</div>
<div class="footter">

    <div style="clear: both"></div>
    <p class="noewr">Copyright © 2015 重庆果然科技有限公司 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">渝ICP备16010715号-2</a><a></a></p><a>
    <p>地址/Add：重庆· 江北区观音桥COSMO大厦24层</p>
</a></div><a>

    <!-- 代码部分begin -->
</a><div class="keifu" style="height: 345px; top: 224.5px;"><a>
</a><div class="keifu_tab"><a>
    <div class="icon_keifu" style="top: 122px;"></div>
</a><div class="keifu_box"><a>
</a><div class="keifu_head"><a></a><a href="javascript:void(0)" class="keifu_close"></a></div>
    <ul class="keifu_con">
        <li>聚现场-牛凯<br><a target="_blank" title="聚现场乐乐" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1479265188&amp;site=qq&amp;menu=yes" rel="external nofollow"><img src="/Public/Home/images/qq.png" height="22" width="92"></a></li>
        <br> <li>聚现场-李小璐<br><a target="_blank" title="聚现场阳阳" href="http://wpa.qq.com/msgrd?v=3&amp;uin=214023493&amp;site=qq&amp;menu=yes" rel="external nofollow"><img src="/Public/Home/images/qq.png" height="22" width="92"></a></li>
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
<a href="http://www.juxianchang.com/#top" id="scrollUp" style="position: fixed; z-index: 2147483647; display: none;"></a>
<script type="text/javascript" src="/Public/Home/js/tongji.js"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?43d2749eb596ae10194fc448ac5d5fa6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


<a id="scrollUp" href="http://www.juxianchang.com/#top" title=""></a><ins id="newBridge"><!-- target: nodeBoard --><ins class="nb-nodeboard-base nb-nodeboard-position-base nb-nodeboard-left-bottom nb-hide" id="nb_nodeboard"><ins class="nb-nodeboard-contain-base nb-nodeboard-contain"><ins class="nb-nodeboard-top nb-nodeboard-top-9"><ins class="nb-head-title">请您留言</ins><ins class="nb-nodeboard-close" id="nb_nodeboard_close" data-type="min"></ins></ins><ins id="nb_nodeboard_text" class="nb-nodeboard-text"><p class="nb-nodeboard-company">聚现场离线电话</p><p class="nb-nodeboard-link">15702388083</p></ins><form id="nb_nodeboard_form" autocomplete="off" class="nb-board-form" action="http://p.qiao.baidu.com/cps//bookmanage/saveBook.action?userId=24749122" method="post" accept-charset="utf-8"><ins id="nb_nodeboard_set" class="nb-nodeboard-set"><ins class="nb-nodeboard-content"><textarea id="nb-nodeboard-set-content-js" name="content" data-ph="请在此输入留言内容，我们会尽快与您联系。（必填）" placeholder="请在此输入留言内容，我们会尽快与您联系。（必填）" class="nb-nodeboard-set-content"></textarea></ins><ins class="nb-nodeboard-name" style="z-index:6;"><ins class="nb-nodeboard-icon nodeName"></ins><input id="nb_nodeboard_set_name" data-write="0" name="visitorName" maxlength="30" class="nb-nodeboard-input" type="text" data-ph="姓名" placeholder="姓名"></ins><ins class="nb-nodeboard-name" id="nb_nodeboard_phone" style="z-index:5;"><ins class="nb-nodeboard-icon nodePhone"></ins><input id="nb_nodeboard_set_phone" name="visitorPhone" maxlength="30" class="nb-nodeboard-input" data-write="1" type="text" data-ph="电话（必填）" placeholder="电话（必填）"></ins><ins class="nb-nodeboard-name nb-nodeboard-ext-input" style="z-index:2;"><ins class="nb-nodeboard-icon nodeExt"></ins><input id="nb_nodeboard_ext_2" name="item0" class="nb-nodeboard-input" maxlength="50" type="text" data-write="0" data-ph="公司" placeholder="公司"></ins><ins class="nb-nodeboard-name nb-nodeboard-ext-input" style="z-index:1;"><ins class="nb-nodeboard-icon nodeExt"></ins><input id="nb_nodeboard_ext_1" name="item1" class="nb-nodeboard-input" maxlength="50" type="text" data-write="0" data-ph="活动日期" placeholder="活动日期"></ins></ins></form><ins class="nb-nodeboard-success" id="nb_nodeboard_success"><ins class="nb-success-box"><ins class="nb-success-icon"></ins><ins class="nb-success-title" id="nb_node_messagetitle">感谢留言</ins><ins class="nb-success-content" id="nb_node_messagecontent">我们会尽快与您联系</ins><ins id="sucess_close" class="nb-sucess-close">关闭</ins></ins></ins><ins class="nb-nodeboard-send" id="nb_node_contain"><ins id="nb_nodeboard_send" class="nb-nodeboard-send-btn nb-nodeboard-send-btn-9">发送</ins></ins></ins></ins><!-- end --><!-- target: iconIcon --><ins class="nb-icon-wrap nb-icon-base icon-right-bottom nb-icon-skin-0 nb-icon-icon" id="nb_icon_wrap" style=";width:193px;"><ins class="nb-icon-inner-wrap" style="height:77px;width:193px;;"><ins class="nb-icon-bridge0 nb-icon-bridge-base" data-type="iconInvite"></ins></ins></ins><!-- end --><!-- target: invite --><ins class="nb-invite-wrap nb-invite-wrap-base nb-position-base nb-middle customer-invite-style " id="nb_invite_wrap" style="width:400px;display:none;margin-left: -200px;margin-top: -141px;"><ins class="nb-invite-body nb-invite-skin-xc-0" style="height:282px;"><ins class="nb-invite-tool nb-invite-tool-base" id="nb_invite_tool" style=""></ins><ins class="nb-invite-text nb-invite-text-base"><ins class="nb-invite-welcome nb-invite-welcome-base nb-show" id="nb_invite_welcome"><p style="color: #fff">欢迎来到聚现场微信墙，请问有什么可以帮您？</p></ins></ins><ins class="nb-invite-btn-base nb-invte-btns-0"><ins class="nb-invite-cancel nb-invite-cancel-base" id="nb_invite_cancel">稍后再说</ins><ins class="nb-invite-ok nb-invite-ok-base" id="nb_invite_ok">现在咨询</ins></ins></ins></ins><!-- end --></ins></body></html>