
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



var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?08100f796f807b97c6fd87f5214fb7b6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();




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



$(function(){
  if (document.cookie.indexOf('_test_server') != -1) {
    $(".footer").append('<a href="javascript:void(0);" style="position: fixed; left: 0px; bottom: 5px; background: #fff000; padding: 3px;">##</a>');
  }
});
