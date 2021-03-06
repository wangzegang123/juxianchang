<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0088)http://wall.juxianchang.com/app/index.php?i=52&c=entry&do=manage_login&m=meepo_xianchang -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>聚现场 - 登录</title>
    <link rel="icon" href="http://wall.juxianchang.com/web/resource/images/favicon.ico">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="copyright" content="聚现场">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
    <meta name="keywords" content="聚现场,酒吧公众号,酒吧平台,聚现场酒吧,酒吧微信,酒吧互动,夜场应用,酒吧微网站,酒吧推广,酒吧微信运营">
    <meta name="description" content="聚现场,专业的酒吧微信公众号平台，能实现酒吧夜场震撼的现场互动效果，提供便捷的粉丝互动营销方案，聚现场始终致力于为行业带来符合流行趋势，实用易用的产品。">
    <script src="../js/vue.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/spinners.css" type="text/css">
    <style>
        a,abbr,address,article,aside,audio,b,blockquote,body,canvas,caption,cite,code,dd,del,details,dfn,div,dl,dt,em,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,p,pre,q,samp,section,small,span,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,ul,var,video{margin:0;padding:0;color:#000}html{overflow-x:hidden}body{font-size:12px;-webkit-font-smoothing:antialiased;font-family:"Comic Sans MS","Microsoft Yahei",Tahoma,Helvetica,Arial,"\5b8b\4f53",sans-serif}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}h1{font-size:18px}h2{font-size:16px}h3{font-size:14px}h4,h5,h6{font-size:100%}address,cite,dfn,em,var{font-style:normal}code,kbd,pre,samp,tt{font-family:"Courier New",Courier,monospace}small{font-size:12px}li,ol,ul{list-style:none}a{text-decoration:none}a:active,a:hover,a:link,a:visited{color:#000}abbr[title],acronym[title]{border-bottom:1px dotted;cursor:help}q:after,q:before{content:''}legend{color:#000}fieldset,iframe,img{border:none}button,input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}hr{border:none;height:1px}:-webkit-autofill<?php echo -webkit-text-fill-color:?>input[type=text],input[type=password],input[type=submit],input[type=reset]<?php echo -webkit-appearance:none;outline:0;border:1px solid ?>button,input[type=submit],input[type=reset]{cursor:pointer;outline:0}em,i{font-style:normal}[v-clock]{display:none}body,html{height:100%}@font-face{font-family:iconfont;src:url(../addons/meepo_xianchang/template/resource/fonts/lr.ttf) format('truetype')}.iconfont{font-family:iconfont!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:.2px;-moz-osx-font-smoothing:grayscale;user-select:none;-webkit-user-select:none}.login-container{height:100%;display:box;display:-webkit-box;display:-moz-box;display:-o-box;display:-ms-box;box-pack:center;-webkit-box-pack:center;-moz-box-pack:center;-ms-box-pack:center;-o-box-pack:center;box-align:center;-webkit-box-align:center;-moz-box-align:center;-ms-box-align:center;-o-box-align:center}.login-container .login-box{max-width:640px;min-width:320px;}.login-container .login-box .login-logo{text-align:center;margin-bottom:20px}.login-container .login-logo img{width:200px}.login-container .common-login{height:40px;background:rgba(0,0,0,.2);box-sizing:border-box;padding-left:15px;border-radius:5px;margin-bottom:15px;position:relative}.login-container .common-login label{color:#fff;display:block;float:left;width:13%;font-size:25px;line-height:40px}.login-container .common-login input{color:#fff;border:none;float:left;width:86%;height:100%;font-size:16px;box-sizing:border-box;padding:0 0 0 10px;background:0 0}.login-container .common-login.login-submit{background:rgba(74,149,240,.7)}.login-container .common-login i{color:#0EFB0E;font-size:25px;position:absolute;top:0;right:-32px}.common-login.login-submit:hover{background:rgba(74,149,240,1)}.login-container .register-link{color:#fff;text-align:center;font-size:14px}.login-container .register-link a{color:#fff;text-decoration:underline}.login-container .warning{color:red;text-align:center;font-size:14px}.warning-1{opacity:0;position:fixed;top:0;left:0;width:100%;margin:0 auto;color:red;font-size:18px;text-align:center;background:rgba(0,0,0,.3);padding:10px 0}::-webkit-input-placeholder{color:#999}:-moz-placeholder{color:#999}::-moz-placeholder{color:#999}:-ms-input-placeholder{color:#999}
		.common-login .get-code {
			position: absolute;
			top: 0;
			right: 0;
			display: block;
			color: #fff;
			height: 100%;
			background: #4F4FED;
			line-height: 40px;
			border-radius: 5px;
			width: 100px;
			text-align: center;
		}
					
				/*20170619新增*/
		#loading_box { position: fixed; top:0;left:0;width:100%;height:100%;background: rgba(0, 0, 0, 0.4); z-index: 9999;}
		#loading_content { position: fixed; top:40%;left:50%;width:300px;margin-left:-150px; height: 27px; color:#fff;text-align:center;font-size:14px;z-index: 9909;text-align:center;line-height:150px}
    </style>
</head>
<body>
<div id="loading" style="display:none">
<div id="loading_box"></div>
<div id="loading_content">
	<div class="dots-loader"> Loading… </div>
</div>
</div>
<video class="bg_video" id="bg_video" src="http://qiniu.wexbox.com/5.mp4" autoplay="" loop="" muted="" style="margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; z-index: -1; width: 1602px; height: auto;"></video>
<div id="login" class="login-container" style="justify-content: center; align-items: center; display: -webkit-flex;"><div class="warning-1" style="display: none; opacity: 1;"></div> <div class="login-box"><div class="login-logo"><img src="../images/sys_logo.png" alt="logo"></div> <div class="common-login"><label for="username-login" class="iconfont"></label> <input type="text" id="username-login" maxlength="33" placeholder="用户名" autocomplete="off" name="username" autofocus="autofocus"> <i class="iconfont" style="display: none;"></i></div> <div class="common-login"><label for="password-login" class="iconfont"></label> <input type="password" id="password-login" maxlength="33" placeholder="密码" name="password"> <i class="iconfont" style="display: none;"></i></div> <div class="common-login"><label for="code" class="iconfont"></label> <input name="verify" id="code" type="num" placeholder="请输入验证码" maxlength="4" class="form"> <img src="../images/index.php" onclick="this.src=&#39;./index.php?i=52&amp;c=entry&amp;do=verify&amp;m=meepo_xianchang&amp;code=&#39; + Math.random();" class="get-code" style="cursor: pointer;"> <i class="iconfont" style="display: none;"></i></div> <div class="common-login login-submit"><input type="button" value="登 录"> <input name="token" value="wRPp" type="hidden"></div> <div class="register-link">
                还没有账号？点击
                <a href="http://wall.juxianchang.com/app/index.php?i=52&amp;c=entry&amp;do=manage_register&amp;m=meepo_xianchang" style="color: red;">注册</a></div></div></div>

<script>
    var vm = new Vue({
        el: '#login',
        data: {
            username: "",
            password: '',
			verify: '',
            warShow: false,
			warText:'',
        },
        methods: {
            login: function(event) {
				$("#loading").show();
                var _this = this;
                if( this.username.length <= 0 )
                {
					$("#loading").hide();
					this.warText = '请输入登录用户名';
                    this.warShow = true;
                    setTimeout(function(){
                        _this.warShow = false;
                    }, 2222);
                    event.preventDefault();
                    return;
                }
				if( this.password.length <= 0 )
                {
					$("#loading").hide();
					this.warText = '请输入登录密码';
                    this.warShow = true;
                    setTimeout(function(){
                        _this.warShow = false;
                    }, 2222);
                    event.preventDefault();
                    return;
                }
								if( this.verify.length <= 0)
                {
					$("#loading").hide();
					this.warText = '请输入验证码';
                    this.warShow = true;
                    setTimeout(function(){
                        _this.warShow = false;
                    }, 2222);
                    event.preventDefault();
                    return;
                }
				if( this.verify.length < 4)
                {
					$("#loading").hide();
					this.warText = '请输入正确的验证码';
                    this.warShow = true;
                    setTimeout(function(){
                        _this.warShow = false;
                    }, 2222);
                    event.preventDefault();
                    return;
                }
							var data={
				
                'username':this.username,
                'password':this.password,
                'verify':this.verify,
            };
			var _this = this;
            $.post('#',data, function(json){
				$("#loading").hide();
    			if(json.errno==0){
    			    //alert(json.message);
					_this.warText = json.message;
					_this.warShow = true;
					setTimeout(function(){
						window.location.href = json.url;
					}, 2000);
                }else{
    				_this.warText = json.message;
					_this.warShow = true;
					setTimeout(function(){
                        _this.warShow = false;
                    }, 2222);
					if(json.errno==-2){
						$(".get-code").attr('src',"./index.php?i=52&c=entry&do=verify&m=meepo_xianchang&t="+Math.random());
					}
    				
    			}
    		}, 'json');
            }
        }
    });
	$(function(){
		$(".warning-1").css({'opacity':1});
		if ($(".bg_video").length > 0) {
			$(".bg_video").css({width: $("body").width() + 2,height:"auto",opacity: 1})
		}
	});
</script>
<script>var imgs = document.getElementsByTagName('img');for(var i=0, len=imgs.length; i < len; i++){imgs[i].onerror = function() {if (!this.getAttribute('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('http://wall.juxianchang.com/attachment/') == -1 ? this.src.replace('http://of3kdd1ar.bkt.clouddn.com/', 'http://wall.juxianchang.com/attachment/') : this.src.replace('http://wall.juxianchang.com/attachment/', 'http://of3kdd1ar.bkt.clouddn.com/');this.setAttribute('check-src', true);}}}</script>
</body></html>