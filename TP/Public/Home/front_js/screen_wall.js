(function(k, e) {
    var A = k.WBActivity.resize = function() {
        if (!g) {
            return
        }
		var C = 20;
        var B = g.height();
        $(".MsgItem").each(function(G, I) {
            var M = e(I);
            M.css({
                   "margin-bottom": (B - M.outerHeight() * g.children().length) / (g.children().length - 1)
            });
            var K = M.width(),
            J = M.height();
            var F = (M.height() - C * 2),
            H = F;
            M.find(".head").css({
                width: F + "px",
                height: H + "px",
                top: C + "px",
                left: C + "px"
            });
			M.find(".msg_body").css({
   
                "margin-left": (F + C + 30) + "px"
            });
			M.find(".fans_img").css({
                "height": M.find(".msgword") + "px"
            });
           
        })
    };
    function y(C, E, B, F, D, T) {
        C.attr("msg_id", D);
        C.find(".head").css({
            "background-image": "url(" + E + ")"
        });
        C.find(".nickname").html(B);//.toFillText();
		C.find(".infostyle-show").attr("msg_id",D);
		if(T==2){
			F = "<img src = " + F+ " class='fans_img' />";
		}
        C.find(".msgword").html(F);//.toFillText();
    }
    var a = 0;
    var h;
    function o(E, C, F, D, T, L) {
        var B = e(h[a]);
        B.fadeOut(function() {
            B.css({
                visibility: "hidden",
                display: "block"
            });
            y(B, E, C, F, D, T);
            B.css({
                visibility: "visible"
            });
			B.find('.fans_img').css({
					width: 'auto',
					height: B.find(".msgword").height(),
			});
            B.addClass("msgin");
            k.setTimeout(function() {
                B.removeClass("msgin")
            },
            2000);
            a++;
            if (a > x) {
                a = 0
            }
        })
		if ($.isFunction(L)) {
            L.call(this)
        }
    }
    var q = 0;
    function l(E, C, F, D, T, L) {
        h = g.children();
        if (q <= x) {
            var B = e(h[q]);
            B.fadeIn();
            y(B, E, C, F, D, T);
			B.find('.fans_img').css({
					width: 'auto',
					height: B.find(".msgword").height(),
				});
        } else {
            var B = e(h[0]);
            B.fadeOut(function() {
                e(h[(g.children().length-1)]).css({
                    "margin-bottom": B.css("margin-bottom")
                });
                B.css({
                    "margin-bottom": 0,
                    visibility: "hidden",
                    display: "block"
                });
                y(B, E, C, F, D, T);
				B.find('.fans_img').css({
					width: 'auto',
					height: B.find(".msgword").height(),
				});
                B.slideUp(function() {
                    B.remove().css({
                        visibility: "visible",
                        display: "none"
                    }).appendTo(g).fadeIn()
                })
            })
        }
        q++;
		if ($.isFunction(L)) {
            L.call(this)
        }
    }
	
		//期初r和v均为空
    function t() {
        var B;
        if (r.length > 0) {
            B = r.pop();
            v.push(B);
        } else {
			//若为随机循环
			
            if (v.length > 0 && st==1) {
                B = u()
            }
			//没有数据 那么去查询
        }
        if (B) {
			var thtml = ''
			if(bd_show ==1 && lottory_show.length>0){
				for(var i=0;i<lottory_show.length;i++){
				  if(lottory_show[i]!='mobile'){
					thtml += "&nbsp;&nbsp;&nbsp;"+B.bd_data[lottory_show[i]]||' ';	
				  }else{
					B.bd_data[lottory_show[i]] = B.bd_data[lottory_show[i]].replace(/(\d{3})\d{4}(\d{4})/, '$1****$2');
					thtml += "&nbsp;&nbsp;&nbsp;"+B.bd_data[lottory_show[i]]||' ';
				  }
				}	
			}else{
				thtml += B.nick_name;
			}
            if (sstyle == "0") {
                l(B.avatar, thtml, B.content, B.id ,B.type)
            } else {
				
                o(B.avatar, thtml, B.content, B.id ,B.type)
            }
			if(B.type==2 && !$(".jbshow").hasClass('view') && sb==1 && $(".detail").css('display')!='block'){//sb show_big
								clearInterval(show_msg_2);
								$(".jbleft").css({"background":"url("+ B.content +") no-repeat center center","background-size":"auto 100%"});
								 $("#hdimg").attr("src",B.avatar);
								 $("#zsmc").html(thtml);
								 $(".jbshow").addClass('view');
								setTimeout(function() {
										//alert(show_msg_2);
										$(".jbshow").removeClass('view');
										//if(show_msg_2==null){
										clearInterval(show_msg_2);
											 show_msg_2 = setInterval(function() {
												t()
											},
											m);
										//}
								},
								sbt);
									 
			}
        }
    }
    function u() {
        var C = v.length,
        D = Math.floor(Math.random() * C),
        E = v[D],
        B = e(".MsgItem[msg_id=" + E.id + "]", ".Panel.MsgList");
		
        if (B.length <= 1) {
            return E
        } else {
            return u()
        }
    }
    var f = 0;
    function n(B) {
        e.getJSON(PATH_ACTIVITY + Path_url('new_msg'), {
            rid: scene_id,
            last_id: f
        },
        function(C) {
		//console.log(C);
            if (C && C.ret == 0 && e.isArray(C.data)) {
                if (C.data.length > 0) {
                    r = C.data.concat(r);
                    f = C.data[0].id
                }
            }
        }).complete(function() {
            if (B && typeof B == "function") {
                B.call()
            }
        })
    }
    var g,
    x;
    var r = [],
    v = [],
	new_1 = [];
    var m = WALL_INFO.re_time * 1000,//每条滚动时间
    sstyle = WALL_INFO.show_style,//显示效果
    st = WALL_INFO.show_type;//显示顺序
	var sb = WALL_INFO.show_big;
	var sbt = WALL_INFO.show_big_time * 1000;
    var j = (WALL_INFO.chistory) ? (WALL_INFO.chistory * 1) : 0;//无消息时显示历史记录数
    var c = k.WBActivity.start = function() {
        g = e(".Panel.MsgList"),
        x = g.children().length - 1,
        h = g.children();
        n(function() {
			bingkjj();
            k.WBActivity.hideLoading();
            e(".Panel.Top").css({
                top: 0
            });
            e(".Panel.Bottom").css({
                bottom: 0
            });
            e(".Panel.MsgList").css({
                display: "block",
                opacity: 1
            });
			

            A();
            h.hide();
           
            show_msg_2 = setInterval(function() {
                t()
            },
            m);
            check_msg = setInterval(function() {
                n()
            },
            4000);
			e(".close").on('click',function(){
				 clearInterval(show_msg_2);
				 e(".detail").hide();
				 show_msg_2 = setInterval(function() {t()},m);
			});
			e(".closeico").on('click',function(){
				clearInterval(show_msg_2);
				$(".jbshow").removeClass('view');
				show_msg_2 = setInterval(function() {
					t()
				},m);
	 
			});
			//alert($('.MsgItem[msg_id="12345"]').length);
			e(".MsgList").on('mouseover',function(){
				if($('.MsgItem[msg_id="meepo"]').length==0){
				  clearInterval(show_msg_2);
				}
			});
			e(".MsgList").on('mouseout',function(){
				if($('.MsgItem[msg_id="meepo"]').length==0){
				 clearInterval(show_msg_2);
				 show_msg_2 = setInterval(function() {t()},m);
				}
			});
        })
    }
})(window, jQuery);

 