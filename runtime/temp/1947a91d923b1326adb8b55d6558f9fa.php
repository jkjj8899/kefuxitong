<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/www/wwwroot/xiaoyun.wutao7.top/public/../application/index/view/index/index.html";i:1660442136;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <title>在线客服</title>
    <script>
        ROOT_URL = '<?php echo $basename; ?>';
    </script>
    <script type="text/javascript" src="/assets/libs/jquery/jquery.min.js?v=AI_KF"></script>
    <link href="/assets/css/index/chat.css" type="text/css" rel="stylesheet" />
    <script src="/assets/libs/jquery/jquery.cookie.js?v=AI_KF" type="text/javascript"></script>
    <script src="/assets/libs/jquery/jquery.form.min.js?v=AI_KF" type="text/javascript"></script>
    <link href="/assets/libs/layer/admin/layui.css?v=AI_KF" rel="stylesheet">
    <script src="/assets/libs/layui/layui.js?v=AI_KF" type="text/javascript"></script>
    <link href="/assets/libs/layer/skin/layer.css?v=AI_KF" type="text/css" rel="stylesheet" />
    <script src="/assets/libs/layer/layer.js?v=AI_KF" type="text/javascript"></script>
    <script src="/assets/libs/swiper-4.3.3.min.js?v=AI_KF" type="text/javascript"></script>
    <script src="/assets/libs/push/pusher.min.js?v=AI_KF" type="text/javascript"></script>
    <script src="/assets/libs/adapter.js?v=AI_KF"></script>
    <script type="text/javascript" src="/assets/libs/webrtc/recorder.wav.min.js?v=AI_KF}"></script>
    <link rel="stylesheet" href="/assets/libs/myeditor/css/editormd.css?v=AI_KF" />

    <style type="text/css">
        body{
            background: #ffffff;
        }
       .layui-layer-content{
         overflow: hidden;
       }
        #close_icon {
            position: absolute;
            right: 10px;
            top: 8px;
            cursor: pointer;
        }

        .size {
            min-width: 20px;
            height: 20px;
            border: none;
        }

        .my-circle {
            border-radius: 50%;
            width:46px;
            height:46px;
        }

        .input-but {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            width: 20px;
            height: 20px;
        }

        .fileinput {
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0px;
            right: 0px;
            opacity: 0;
            cursor: pointer;
            /* filter: alpha(opacity=0); */
        }

        .icon_gray {
            -webkit-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            filter: grayscale(100%);
            filter: gray;
        }
        .layui-tab-brief>.layui-tab-more li.layui-this:after, .layui-tab-brief>.layui-tab-title .layui-this:after {
            border: none;
            border-radius: 0;
            border-bottom: 3px solid #d41010;
        }
        .layui-tab-brief>.layui-tab-title .layui-this {
            color: #d41010;
        }

        .triangle {
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 8px solid #fff;
        }
        .hidden{
           visibility:hidden;
        }

        .hide{
            display: none;
        }

        #question_list div:hover{
            color: red;
        }

        .videos {
            font-size: 0;
            height: 100%;
            pointer-events: none;
            position: absolute;
            transition: all 1s;
            width: 100%;
        }

        #localVideo {
            height: 100%;
            max-height: 100%;
            max-width: 100%;
            /*object-fit: cover;*/
            transition: opacity 1s;
            width: 100%;
        }

        #remoteVideo {
            display: block;
            height: 100%;
            max-height: 100%;
            max-width: 100%;
            /*object-fit: cover;*/
            position: absolute;
            transition: opacity 1s;
            width: 100%;
        }

        .bg,.offline,.vstpopup,.lang-bg {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, .3);
            z-index: 998;
            display: none;
        }

        .dialog {
            width: 400px;
            background-color: #fff;
            margin: 12% auto;
            position: relative;
        }

        .bg .title,.lang-bg .title {
            height: 56px;
            line-height: 56px;
            padding: 0 24px;
            border-bottom: 1px solid #F7F5FB;
            color: #555555;
        }

        .lang-choose span{
            display: inline-block;
            padding: 8px 10px;
            background: #f0f2f7;
            color: #555555;
            font-size: 14px;
            margin-right: 5px;
            margin-bottom: 15px;
            cursor: pointer;
            width: 149px;
            text-align: center;
        }

        .lang-choose span:hover{
            background: #<?php echo $theme; ?>;
            color: #ffffff;
        }

        .dialog-body {
            padding: 20px 24px;
        }

        .evaluate-item {
            height: 26px;
            display: flex;
            align-items: center;
        }

        .evaluate-item img {
            height: 16px;
            width: 16px;
            cursor: pointer;
            margin-left: 6px;
        }

        .evaluate-title {
            min-width: 85px;
            text-align: left;
        }

        .evaluate-item img:first-of-type {
            margin-left: 12px;
        }

        .evaluate-text {
            display: none;
            border: 1px solid #4AACFF;
            color: #4AACFF;
            height: auto;
            font-size: 13px;
            border-radius: 5px;
            margin-left: 12px;
            padding: 0px 5px;
        }

        .about-text {
            margin-left: 12px;
            border: 1px solid #E5E3E9;
            border-radius: 10px;
            padding: 5px 10px;
        }

        .evaluate-btn {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button.submit {
            width: 66px;
            height: 32px;
            color: #ffffff;
            font-size: 13px;
            background-color: #1E9FFF;
            border-radius: 16px;
            border: 0;
            margin: 0 10px;
            cursor: pointer;
        }

        button.reset {
            width: 66px;
            height: 32px;
            color: #555555;
            font-size: 13px;
            background-color: #f7f7f7;
            border-radius: 16px;
            border: 0;
            margin: 0 10px;
            cursor: pointer;
        }

        .close {
            position: absolute;
            top: 0;
            right: -36px;
            z-index: 999;
            height: 27px;
            width: 27px;
            cursor: pointer;
        }

        .offline-item {
            height: 32px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .offline-title {
            width: 60px;
            text-align: right;
            margin-right: 10px;
        }

        .offline-item input {
            height: 32px;
            border-radius: 5px;
            padding: 0 10px;
            border: 1px solid #E8E6EB;
            width: 100%;
        }

        .toggle {
            position: absolute;
            top: -45px;
            height: 26px;
            cursor: pointer;
            display: none;
        }

        .keyword {
            position: absolute;
            top: -50px;
            left: 0;
            height: 38px;
            max-width: 93%;
            white-space: nowrap;
            overflow: hidden;
            z-index: 98;
            background-color: #fff;
            display: none;
            margin: 0 20px 0 20px;
            padding-top: 8px;
        }

        .keyword #question_key_list {
            position: relative;
        }

        .keyword .swiper-slide {
            display: inline-block;
            width: auto!important;
            height: 24px;
            line-height: 24px;
            padding: 0 10px;
            border-radius: 12px;
            border: 1px solid #E2E2E2;
            font-size: 12px;
            margin-right: 10px;
            cursor: pointer;
        }
       .layui-tab-brief>.layui-tab-title li{line-height: 50px;}
       .layui-tab-brief>.layui-tab-more li.layui-this:after, .layui-tab-brief>.layui-tab-title .layui-this:after{
           border-bottom: 2px solid #<?php echo $theme; ?>!important;
       }
        .customer{
            background-color: #<?php echo $theme; ?>!important;
        }
        .lang-flag{
            width: 16px;
            display: inline-block;
            margin-right: 3px;
            margin-top: -2px;
        }
        .msg-toolbar a{
            margin-right: 20px;
        }
    </style>
    <script src="../../../../public/assets/libs/webrtc/recorder.js"></script>

</head>
<body>

  <script>
   var mediaStreamTrack;
        var visiter ='<?php echo $visiter; ?>';
        var business_id  ='<?php echo $business_id; ?>';
        var record='<?php echo $from_url; ?>';
        record.replace("%23","#");
        record.replace("%26","&");
        var pic ='<?php echo $avatar; ?>';
        var channel= '<?php echo $channel; ?>';
        var visiter_id= '<?php echo $visiter_id; ?>';
        var special = '<?php echo $special; ?>';
        var url ='<?php echo $url; ?>';
        var cid ='<?php echo $groupid; ?>';
        var pic ='<?php echo $avatar; ?>';
        if (pic == "") {
            pic = "/assets/images/index/avatar-red2.png";
        }

   var service_id=special;
       var num;
       var t;

       var hintstate;
   $.cookie('state','off');
   audioElementHovertree = document.createElement('audio');
   audioElementHovertree.setAttribute('src', "/upload/voice/default.mp3");

       var myTitle = document.title;

       var isActive;

            window.onfocus = function () {
              isActive = true;
              clearTimeout(t);
              document.title =myTitle;
            };

            window.onblur = function () {
              num=0;
              isActive = false;
            };

       function title(){
             num++;

             if(num == 3){
               num =1;
             }

             if(num == 1){
                document.title='【】'+myTitle;
             }

             if(num ==2){
                document.title='【<?php echo $lang["message_tip"]; ?>】'+myTitle;
             }

            t= setTimeout("title()",500);

          }

        var wolive_connect =function () {

            pusher = new Pusher('<?php echo $app_key; ?>', {
                encrypted: <?php echo $value; ?>
                ,enabledTransports: ['ws']
                ,wsHost: '<?php echo $whost; ?>'
                ,<?php echo $port; ?>: <?php echo $wport; ?>
                ,authEndpoint: ROOT_URL + '/admin/login/auth'
                ,disableStats: true
         });

            var channels = pusher.subscribe("cu" + channel);

             channels.bind('my-chexiao', function (data) {
                 $("#xiaox_"+data.message.cid).remove();
             });


            // 接收消息
            channels.bind('my-event', function (data) {
                if(!isActive){
                    title();
                }

                if ($.cookie('state') != 'off') {
                    audioElementHovertree.play();
            	}

                var msg = '';
                msg += '<li class="chatmsg" id="xiaox_'+data.message.cid+'"><div style="position: absolute;left:3px;">';
                msg += '<img class="my-circle  se_pic" src="' + data.message.avatar + '" width="40px" height="40px"></div>';
                msg += "<div class='outer-left'><div class='service'>";
                msg += "<pre>" + data.message.content + "</pre>";
                msg += "</div></div>";
                if(data.message.tip != ''){
                    msg += "<div style='clear: both'></div><div class='showtime' style='margin-top: 10px'>"+data.message.tip+"</div></li>";
                }else{
                    msg += "</li>";
                }
                $(".chatmsg_notice").remove();
        	    $(".chatmsg_no").remove();
                $(".conversation").append(msg);
                var div = document.getElementById("wrap");
                div.scrollTop = div.scrollHeight;
                setTimeout(function(){
                    $('.chatmsg').css({
                        height: 'auto'
                    });
                },0)
            });

            channels.bind('push-comment',function(data){
                var html = '<div style="margin-bottom: 20px;">'+data.message.title+'</div>';
                $.each(data.message.comments,function(index,value){
                    html += '<div data-score="0" class=\'evaluate-item evaluate-score\'>\n' +
                        '                        <span class="evaluate-title">'+ value +'</span>\n' +
                        '                        <input type="hidden" name="'+value+'"></input>\n' +
                        '                        <img class="star" data-id="1" src="/assets/images/index/star.png" alt="">\n' +
                        '                        <img class="star" data-id="2" src="/assets/images/index/star.png" alt="">\n' +
                        '                        <img class="star" data-id="3" src="/assets/images/index/star.png" alt="">\n' +
                        '                        <img class="star" data-id="4" src="/assets/images/index/star.png" alt="">\n' +
                        '                        <img class="star" data-id="5" src="/assets/images/index/star.png" alt="">\n' +
                        '                        <span class="evaluate-text"></span>\n' +
                        '                        </div>'
                });

                if (data.message.word_switch == 'open') {
                    html += ' <div class=\'evaluate-item\' style="height: 80px;line-height: 1;margin-top: 10px;align-items: flex-start">\n' +
                        '                <span class="evaluate-title">'+ data.message.word_title +'</span>\n' +
                        '                <textarea class="about-text" name="" id="" cols="30" rows="5"></textarea>\n' +
                        '            </div>';
                }

                html += '<div class="evaluate-btn">\n' +
                    '                <button class="submit"><?php echo $lang["submit"]; ?></button>\n' +
                    '                <button class="reset"><?php echo $lang["cancel"]; ?></button>\n' +
                    '            </div>';
                $('.bg .dialog-body').html(html);
                $('.bg').show();
            });

            channels.bind('first_word',function(data){
                var msg = '';
                msg += '<li class="chatmsg_no"><div style="position: absolute;left:3px;">';
                msg += '<img class="my-circle  se_pic" src="' + data.message.avatar + '" width="40px" height="40px"></div>';
                msg += "<div class='outer-left'><div class='service'>";
                msg += "<pre>" + data.message.content + "</pre>";
                msg += "</div></div>";
                msg += "</li>";

                $(".conversation").append(msg);
            });
            // 接受视频请求
            channels.bind("video",function (data) {
                var msg = data.message;
                var cha = data.channel;
                var avatar =data.avatar;
                var username =data.username;

                layer.open({
                    type: 1,
                    title: '申请框',
                    area: ['260px', '160px'],
                    shade: 0.01,
                    fixed: true,
                    btn: ['接受', '拒绝'],
                    content: "<div style='position: absolute;left:20px;top:15px;'><img src='"+avatar+"' width='40px' height='40px' style='border-radius:40px;position:absolute;left:5px;top:5px;'><span style='width:100px;position:absolute;left:70px;top:5px;font-size:13px;overflow-x: hidden;'>"+username+"</span><div style='width:90px;height:20px;position:absolute;left:70px;top:26px;'>"+msg+"</div></div>",
                    yes: function () {
                        layer.closeAll('page');

                        var str='';
                        str+='<div class="videos">';
                        str+='<video id="localVideo" autoplay></video>';
                        str+='<video id="remoteVideo" autoplay class="hidden"></video></div>';


                        layer.open({
                          type:1
                          ,title: '视频'
                          ,shade:0
                          ,closeBtn:1
                          ,area: ['440px', '378px']
                          ,content:str
                          ,end:function(){


                             mediaStreamTrack.getTracks().forEach(function (track) {
                                track.stop();
                            });

                          }
                     });

                        try{
                            connenctVide(cha);
                        }catch(e){
                            console.log(e);
                        }

                    },
                    btn2:function(){
                        var sid =$.cookie('services');
                        $.ajax({
                            url:ROOT_URL+'/admin/event/refuse',
                            type:'post',
                            data:{id:sid}
                        });

                        layer.closeAll('page');
                    }
                });
            });

            // 接受拒绝视频请求
            channels.bind("video-refuse",function (data) {
                layer.alert(data.message);

                layer.closeAll('page');
            });

            // 认领通知
            channels.bind('cu_notice', function (data) {

                $("#img_head").attr("src", data.message.avatar);
                $("#services").text(data.message.nick_name);
                $(".chatmsg_notice").remove();
                $(".chatmsg").remove();
                $.cookie("services",data.message.service_id);
                service_id =data.message.service_id;

                getdata();
                getlisten(data.message.service_id);
            });


            channels.bind('getswitch', function (data) {

                $("#img_head").attr("src", data.message.avatar);
                $("#services").text(data.message.nick_name);
                $("#services").attr("data", data.message.service_id);
                service_id = data.message.service_id;

                var msg = '';
                msg += '<li class="chatmsg"><div style="position: absolute;left:3px;">';
                msg += '<img class="my-circle  se_pic" src="' + data.message.avatar + '" width="40px" height="40px"></div>';
                msg += "<div class='outer-left'><div class='service'>";
                msg += "<pre> <?php echo $lang['transfer_service']; ?>  " + data.message.nick_name + "</pre>";
                msg += "</div></div>";
                msg += "</li>";
                $(".conversation").append(msg);

            });

            if( $.cookie("services")){
                getlisten($.cookie('services'));
            }


            function getlisten(chas){

                var channels = pusher.subscribe("se"+chas);

                //通知游客 客服离线
                channels.bind('logout', function (data) {
                    $("#img_head").addClass("icon_gray");

                });

                //表示客服在线
                channels.bind("geton", function (data) {
                    $("#img_head").removeClass("icon_gray");

                });
             }

            pusher.connection.bind('state_change', function(states) {
                if(states.current == 'unavailable' || states.current == "disconnected" || states.current == "failed" ){
                    $.cookie("cid","");
                    var id =$.cookie("services");
                    if(id){
                      pusher.unsubscribe("se"+id);
                    }
                    pusher.unsubscribe("cu" + channel);

                   if (typeof pusher.isdisconnect == 'undefined') {
                    pusher.isdisconnect = true;
                    pusher.disconnect();
                     delete pusher;
                    window.setTimeout(function(){
                        wolive_connect();
                    },1000);
                  }
                }
            });

            pusher.connection.bind('connected', function() {
                $.cookie("cid","");
            });
        }

        function info(){
            layer.tips("<?php echo $lang['paste_images_tip']; ?>", "#paste", {tips: [1, '#9EC6EA'],area: '215px'});
        }

    </script>
<div class="bg">
    <div class="dialog">
        <img class="close" src="/assets/images/index/close.png" alt="">
        <div class="title"><?php echo $lang['evaluate_service']; ?></div>
        <div class="dialog-body">
            <div style="margin-bottom: 20px;">请对我的服务进行评价，满意请打5星哦~</div>
            <div class='evaluate-item evaluate-score' data-score="0">
                <span class="evaluate-title">服务态度态度</span>
                <img class="star" data-id="1" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="2" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="3" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="4" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="5" src="/assets/images/index/star.png" alt="">
                <span class="evaluate-text"></span>
            </div>
            <div class='evaluate-item evaluate-score' data-evaluate-itemscore="0">
                <span class="evaluate-title">回复速度态度</span>
                <img class="star" data-id="1" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="2" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="3" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="4" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="5" src="/assets/images/index/star.png" alt="">
                <span class="evaluate-text">满意</span>
            </div>
            <div class='evaluate-item evaluate-score' data-score="0">
                <span class="evaluate-title">总满意态度度</span>
                <img class="star" data-id="1" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="2" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="3" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="4" src="/assets/images/index/star.png" alt="">
                <img class="star" data-id="5" src="/assets/images/index/star.png" alt="">
                <span class="evaluate-text">满意</span>
            </div>
            <div class='evaluate-item' style="height: 80px;line-height: 1;margin-top: 10px;align-items: flex-start">
                <span class="evaluate-title" style="min-width:60px;text-align: right">意见反馈态度</span>
                <textarea class="about-text" name="" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="evaluate-btn">
                <button class="submit">提交</button>
                <button class="reset">取消</button>
            </div>
        </div>
    </div>
</div>

  <div class="lang-bg">
      <div class="dialog">
          <img class="close" style="cursor: pointer;" src="/assets/images/index/close.png" alt="">
          <div class="title"><?php echo $lang['choose_lang']; ?></div>
          <div class="dialog-body lang-choose">
              <span data-lang="cn"><img src="/assets/images/flag/cn.png" class="lang-flag" />中文简体</span>
              <span data-lang="tc"><img src="/assets/images/flag/tc.png" class="lang-flag" />中文繁體</span>
              <span data-lang="en"><img src="/assets/images/flag/en.png" class="lang-flag" />English</span>
              <span data-lang="vi"><img src="/assets/images/flag/vi.png" class="lang-flag" />Việt Nam</span>
              <span data-lang="th"><img src="/assets/images/flag/th.png" class="lang-flag" />ประเทศไทย</span>
              <span data-lang="rus"><img src="/assets/images/flag/rus.png" class="lang-flag" />Россия</span>
              <span data-lang="id"><img src="/assets/images/flag/id.png" class="lang-flag" />Indonesia</span>
              <span data-lang="jp"><img src="/assets/images/flag/jp.png" class="lang-flag" />にほん</span>
              <span data-lang="kr"><img src="/assets/images/flag/kr.png" class="lang-flag" />대한민국</span>
              <span data-lang="es"><img src="/assets/images/flag/es.png" class="lang-flag" />España</span>
              <span data-lang="fra"><img src="/assets/images/flag/fra.png" class="lang-flag" />Français</span>
              <span data-lang="it"><img src="/assets/images/flag/it.png" class="lang-flag" />Italian</span>
              <span data-lang="de"><img src="/assets/images/flag/de.png" class="lang-flag" />Deutsch</span>
              <span data-lang="pt"><img src="/assets/images/flag/pt.png" class="lang-flag" />Português</span>
              <span data-lang="ara"><img src="/assets/images/flag/ara.png" class="lang-flag" />عربي</span>
              <span data-lang="dan"><img src="/assets/images/flag/dan.png" class="lang-flag" />Dansk</span>
              <span data-lang="el"><img src="/assets/images/flag/el.png" class="lang-flag" />Ελληνικά</span>
              <span data-lang="nl"><img src="/assets/images/flag/nl.png" class="lang-flag" />Nederlands</span>
              <span data-lang="pl"><img src="/assets/images/flag/pl.png" class="lang-flag" />Polskie</span>
              <span data-lang="fin"><img src="/assets/images/flag/fin.png" class="lang-flag" />Suomi</span>
          </div>
      </div>
  </div>

  <script>
      $('.lang-choose span').click(function () {
          $.ajax({
              url:"/index/index/set_lang",
              type: "post",
              data: {lang:$(this).data("lang"),visiter:visiter_id},
              dataType:'json',
              success:function(res){
                  window.location.reload();
              }
          });
      });
  </script>

<div class="offline" <?php if($reststate == true): ?>style="display: block;" <?php endif; ?>>
    <div class="dialog" style="width: 370px;">
        <img class="close" src="/assets/images/index/close.png" alt="">
        <div class="dialog-body" style="padding:25px;padding-right: 45px;">
            <div style="margin-bottom: 20px;"><?php echo $restsetting['reply']; ?></div>
            <?php if($restsetting['name_state'] == 'open'): ?>
            <div class='offline-item'>
                <span class="offline-title" style="min-width:60px;text-align: right"><?php echo $lang['name']; ?></span>
                <input id="offline_name" type="text">
            </div>
            <?php endif; if($restsetting['tel_state'] == 'open'): ?>
            <div class='offline-item'>
                <span class="offline-title" style="min-width:60px;text-align: right"><?php echo $lang['contact']; ?></span>
                <input id="offline_mobile" type="number" onkeypress='return( /[\d]/.test(String.fromCharCode(event.keyCode)))'>
            </div>
            <?php endif; if(($restsetting['name_state'] == 'open') || ( $restsetting['tel_state'] == 'open')): ?>
            <div class="evaluate-btn">
                <button class="submit"><?php echo $lang['submit']; ?></button>
                <button class="reset"><?php echo $lang['cancel']; ?></button>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div style="width: 40%;height: 90%;min-height:500px;min-width:500px;margin: 2% auto;position: relative;    box-shadow: 0 0 24px 0 rgb(15 66 76 / 25%);">
      <!--  对话框头部 -->
     <div class="header grey12" style="background-color:#<?php echo $theme; ?>;">
        <span id="services" style="color: #ffffff;margin-left: 32px;"></span>
        <span id='service_icon' class="layui-badge-dot layui-bg-green hidden" style="display:inline-block;width: 8px;height: 8px;border-radius: 8px;margin-left: 5px;"></span>
         <span onclick="hint()" style="color: #ffffff;position: absolute;right: 62px;cursor: pointer;"><i class="layui-icon state-mp3" style="font-size: 20px;">&#xe645;</i></span>
         <span id="lang" style="color: #ffffff;position: absolute;right: 32px;cursor: pointer;"><i class="layui-icon layui-icon-website"></i>  </span>
     </div>
    <script>
        $('#lang').click(function () {
            $('.lang-bg').show();
        });
    </script>
    <div id="container"  style="width: 100%;height: 90%;position: absolute;top:64px; ">
    <div class="workarea">
        <!--  对话内容部分 -->
        <div class="content" id="wrap">
            <ul class="conversation">
            </ul>
            <div style="height: 20px"></div>
        </div>
        <div class="footer widths">
            <script type="text/javascript">

                document.getElementById("wrap").onscroll = function(){
                    var t =  document.getElementById("wrap").scrollTop;
                    if( t == 0 ) {
                        if($.cookie("cid") != ""){
                            if($.cookie('services')){
                                 getdata();
                            }

                        }
                    }
                }


              var hint=function(){
                    var state=$.cookie('state');
                   if(state == "on"){
                       $('.state-mp3').html('&#xe685;');
                       layer.msg("<?php echo $lang['close_wav']; ?>",{end:function(){
                         $.cookie('state',"off");
                       }});
                   }else{
                       $('.state-mp3').html('&#xe645;');
                       layer.msg("<?php echo $lang['open_wav']; ?>",{end:function(){
                               $.cookie('state',"on");
                           }});
                   }
              }

            </script>

            <div class="keyword">
                <div class="swiper-wrapper" id="question_key_list">
                </div>
            </div>
            <img class="toggle toggle-right" style="right: 1%" src="/assets/images/index/right.png" alt="">
            <img class="toggle toggle-left" style="left: 1%" src="/assets/images/index/left.png" alt="">
            <div class="tool_box">

                <div class="wl_faces_content">

                    <div class="wl_faces_main">

                    </div>
                </div>

            </div>
            <div class="msg-input">
                <textarea id="text_in" class="edit-ipt" style="color: #555555; font-size: 14px; overflow-x: hidden;overflow-y:auto;word-break: break-all;width: 100%;height: 100%;border:none;" contenteditable="true" hidefocus="true" tabindex="0" autocomplete="off"></textarea>
            </div>

            <div class="msg-toolbar-footer grey12" >
                <a onclick="send()" class="layui-btn msg-send-btn" style="background-color:#<?php echo $theme; ?>;">
                    <?php echo $lang['send']; ?>
                 </a>
                 <a id="showinfo" class="showinfo" style="background-color:#<?php echo $theme; ?>;">
                    <div style="height: 10px;border-left: 1px solid #FFF;margin-top: 8px;padding: 7px 15px">
                        <img src="/assets/images/admin/B/up-menu.png" alt="">
                    </div>
                 </a>
            </div>
            <div class="msg-toolbar">
                <a id="face_icon" href="javascript:" onclick="faceon()" style="margin-top: -5px;">
                    <i class="layui-icon" style="font-size: 26px;cursor: pointer;color: #999999">&#xe6af;</i>
                </a>
                <?php if($type == 'open'): ?>
                <a id="video" style="cursor: pointer;" onclick="getvideo()"><i class="layui-icon" style="font-size: 26px;">&#xe6ed;</i></a>
                <?php endif; ?>

                <a id="images" href="javascript:" style="margin-top: -5px;">
                    <form id="picture" enctype="multipart/form-data">
                        <div class="layui-box input-but  size">
                            <i class="layui-icon" style="font-size: 26px;cursor: pointer;color: #999999">&#xe64a;</i>
                            <input type="file" name="upload" class="fileinput" onchange="put()"/>
                        </div>
                    </form>
                </a>

                <a id="files" href="javascript:" style="margin-top: -5px;">
                    <form id="file" enctype="multipart/form-data">
                        <div class="layui-box input-but  size">
                            <i class="layui-icon" style="font-size: 26px;cursor: pointer;color: #999999">&#xe64d;</i>
                            <input type="file" name="folder" class="fileinput" onchange="putfile()"/>
                        </div>
                    </form>
                </a>
                <a id="location_icon" href="javascript:" onclick="get_location()" style="margin-top: -5px;">
                    <i class="layui-icon" style="font-size: 26px;cursor: pointer;color: #999999">&#xe715;</i>
                </a>
                 <a onclick="recOpen()" id="clickbf" style="margin-top: -5px;">
                     <i class="layui-icon" style="font-size: 25px;cursor: pointer;color: #999999">&#xe6dc;</i>
                 </a>
                <a onmouseover="info()" id="paste" style="position:absolute; right:5%;width: 115px"><img src="/assets/images/admin/B/screen.png" alt=""> <?php echo $lang['how_to_send_screenshot']; ?></a>
            </div>
        </div>
    </div>
</div>

 <!-- 浮层 -->
<div id='fuceng' class="hide" style="background: #f7f7f7;height: 68px;position: absolute;bottom: 90px;right: 3%;z-index: 9999;border-radius: 8px;padding: 8px 0">
  <ul style="width: 100%;height: 60px;">
      <li class="fuceng-li" onclick="choose(this)" name='1'><img id='type1' class="layui-icon selecte-icon" src="/assets/images/admin/B/selected.png" alt=""><span><?php echo $lang['ctrl_enter']; ?></span></li>
      <li class="fuceng-li selected-li" onclick="choose(this)" name='2'><img id='type2' class="layui-icon selecte-icon" src="/assets/images/admin/B/selected.png" alt=""><span><?php echo $lang['enter_ctrl']; ?></span></li>
  </ul>
</div>

<!--<div id='xxxx' style="width: 34.9%;height: 90%;position: absolute;top:64px;left: 65%;background: #fff;border: 1px solid #ddd;overflow-x: hidden;">
 <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" style="margin: 0px;height: 50px;background-color: #f7f7f7">
   <ul class="layui-tab-title" id="tablist" style="height: 50px;border-bottom: 0;width: 100%">
     <li class="layui-this">常见问题</li>
   </ul>
    <div class="layui-tab-content" id="tabcontent">
         <div class="layui-tab-item layui-show" id="question_list" style="width: 100%;overflow-y: auto;">
         </div>
    </div>
  </div>
</div>-->

</div>
  <script>
      var please_select_images = "<?php echo $lang['please_select_images']; ?>";
      var not_supported = "<?php echo $lang['not_supported']; ?>";
      var no_data = "<?php echo $lang['no_data']; ?>";
      var tip_waiting = "<?php echo $lang['tip_waiting']; ?>";
      var tip = "<?php echo $lang['tip']; ?>";
      var is_transfer_service = "<?php echo $lang['is_transfer_service']; ?>";
      var yes = "<?php echo $lang['yes']; ?>";
      var no = "<?php echo $lang['no']; ?>";
      var transferring = "<?php echo $lang['transferring']; ?>";
      var guess_ask = "<?php echo $lang['guess_ask']; ?>";
      var please_enter_message = "<?php echo $lang['please_enter_message']; ?>";
  </script>
<script src="/assets/js/index/inchat.js?v=1.2"></script>

<script type="text/javascript" src="/assets/js/video.js?v=1.3"></script>

<script type="text/javascript">

    function get_location() {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    }

    function showPosition(position){
        var lat = position.coords.latitude; //纬度
        var lag = position.coords.longitude; //经度
        console.log(lat+','+lag);
        $.ajax({
            url:ROOT_URL+"/admin/event/uploadLocation",
            type: "post",
            data: {visiter_id:visiter_id,business_id: business_id,service_id:service_id,location:lat+','+lag},
            dataType:'json',
            success:function(res){
                if(res.code != 0){
                    layer.msg(res.msg,{icon:2});
                } else {
                    var myDate = new Date();
                    var time =  myDate.getHours()+":"+myDate.getMinutes();
                    var str = '';
                    str += '<li class="chatmsg"><div class="showtime">' + time + '</div>';
                    str += '<div style="position: absolute;top: 26px;right: 2px;"><img  class="my-circle cu_pic" src="' + pic + '" width="40px" height="40px"></div>';
                    str += "<div class='outer-right'><div class='customer'>";
                    str += "<pre>";
                    str += "<a href='http://api.map.baidu.com/geocoder?location="+lat+","+lag+"&output=html&src=webapp.baidu.openAPIdemo' style='display: block;' target='_blank'><p style='margin-bottom: 10px'>" + res.data + "</p><img src='/assets/images/admin/B/map.png'/></a>";
                    str += "</pre>";
                    str += "</div></div>";
                    str += "</li>";
                    $(".conversation").append(str);
                    var div = document.getElementById("wrap");
                    div.scrollTop = div.scrollHeight;
                }
            }
        });
    }

    function showError(error){
        layer.msg("<?php echo $lang['seek_failed']; ?>");
    }

    $(document).one('click',function () {
        var state=$.cookie('state');
        if(state == "off"){
            $('.state-mp3').html('&#xe645;');
            $.cookie('state',"on");
        }
    });
    var mySwiper = new Swiper ('.keyword', {
        noSwipingClass : 'keyword-item',
    });

    $(document).on('click','.toggle-right',function(){
        let allWidth = $('#question_key_list')[0].scrollWidth;
        let listWidth = $('#question_key_list').width();
        let leftWidth = $('.keyword-item').last().offset().left;
        let number = Math.ceil(allWidth/listWidth) - Math.ceil(leftWidth/listWidth) + 1;
        $('.toggle-left').show();
        if(leftWidth-listWidth < listWidth) {
            $('#question_key_list').css({
                transform: 'translate3d('+(-allWidth+listWidth)+'px, 0px, 0px)',
            });
            $('.toggle-right').hide();
        }else {
            $('#question_key_list').css({
                transform: 'translate3d('+(-listWidth*number)+'px, 0px, 0px)',
            });
        }
    })

    $(document).on('click','.toggle-left',function(){
        $('.toggle-right').show();

        let allWidth = $('#question_key_list')[0].scrollWidth;
        let listWidth = $('#question_key_list').width();
        let leftWidth = $('.keyword-item').last().offset().left;
        let number = Math.ceil(leftWidth/listWidth);
        if(leftWidth > allWidth - listWidth) {
            $('.toggle-left').hide();
            $('#question_key_list').css({
                transform: 'translate3d(0px, 0px, 0px)',
            });
        }else {
            $('#question_key_list').css({
                transform: 'translate3d('+(-allWidth+listWidth*number)+'px, 0px, 0px)',
            });
        }
    })

    $(document).on('click','.reset',function(){
        $('.bg').hide();
        $('.offline').hide();
    })

    $(document).on('click','.close',function(){
        $('.bg').hide();
        $('.offline').hide();
        $('.lang-bg').hide();
    });

    $(document).on('click','.offline .submit',function(){
        let name = $('#offline_name').val();
        let mobile = $('#offline_mobile').val();
        $.ajax({
            url:ROOT_URL+"/admin/event/info",
            type: "post",
            data: {visiter_id:visiter_id,business_id: business_id,name:name,tel:mobile},
            dataType:'json',
            success:function(res){
                if(res.code != 0){
                    layer.msg(res.msg,{icon:2});
                } else {
                    layer.msg(res.msg,{icon:1});
                    setTimeout(function(){
                        $('.offline').hide();
                    },2000)
                }
            }
        });
    });

    $(document).on('click','.bg .submit',function(){
        let comment = '';
        if($('.about-text').val()){
            comment = $('.about-text').val();
        }
        let scores = [];
        $(".evaluate-score").each(function(item){
            let title = $(this).find('.evaluate-title').text();
            let score = $(this).attr('data-score');
            scores[item] = {'title':title,'score':score}
        });
        $.ajax({
            url:ROOT_URL+"/admin/event/comment",
            type: "post",
            data: {service_id:service_id, visiter_id:visiter_id,comment: comment,business_id: business_id,scores:JSON.stringify(scores)},
            dataType:'json',
            success:function(res){
                if(res.code != 0){
                    layer.msg(res.msg,{icon:2});
                } else {
                    layer.msg(res.msg,{icon:1});
                    setTimeout(function(){
                        $('.bg').hide();
                    },2000)
                }
            }
        });
    });

    $(document).on('click','.star',function(row){
        let light = '/assets/images/index/star-light.png';
        let dark = '/assets/images/index/star-dark.png';
        let star = '/assets/images/index/star.png';
        let index = row.target.dataset.id;
        $(this).parent().find('.star').attr('src',star);
        switch(index)
        {
            case '1':
                $(this).attr('src',dark);
                $(this).siblings('.evaluate-text').show();
                $(this).siblings('.evaluate-text').text('<?php echo $lang["disappointment"]; ?>');
                $(this).parent('.evaluate-item').attr('data-score',1)
                break;
            case '2':
                $(this).attr('src',dark);
                $(this).prev('.star').attr('src',dark)
                $(this).siblings('.evaluate-text').show();
                $(this).siblings('.evaluate-text').text('<?php echo $lang["dissatisfaction"]; ?>');
                $(this).parent('.evaluate-item').attr('data-score',2)
                break;
            case '3':
                $(this).attr('src',light);
                $(this).prevAll('.star').attr('src',light)
                $(this).siblings('.evaluate-text').show();
                $(this).siblings('.evaluate-text').text('<?php echo $lang["commonly"]; ?>');
                $(this).parent('.evaluate-item').attr('data-score',3)
                break;
            case '4':
                $(this).attr('src',light);
                $(this).prevAll('.star').attr('src',light)
                $(this).siblings('.evaluate-text').show();
                $(this).siblings('.evaluate-text').text('<?php echo $lang["satisfied"]; ?>');
                $(this).parent('.evaluate-item').attr('data-score',4)
                break;
            case '5':
                $(this).parent().find('.star').attr('src',light);
                $(this).next('.evaluate-text').show();
                $(this).next('.evaluate-text').text('<?php echo $lang["surprised"]; ?>');
                $(this).parent('.evaluate-item').attr('data-score',5)
                break;
        }
    })


    var rec,recBlob;
    var recOpen=function(){
        rec=null;
        recBlob=null;
        rec=Recorder({
            type:"wav",sampleRate:16000,bitRate:16
            ,onProcess:function(buffers,powerLevel,bufferDuration,bufferSampleRate){

            }
        });

        console.log("正在打开录音，请求麦克风权限...");

        rec.open(function(){
            console.log("已打开录音，可以点击开始了");
            recStart();
        },function(msg,isUserNotAllow){
            console.log((isUserNotAllow?"UserNotAllow，":"")+"无法录音:"+msg);
            layer.msg("<?php echo $lang['voice_failed']; ?>")
        });
    };

    /**关闭录音，释放资源**/
    function recClose(){
        if(rec){
            rec.close();
            console.log("已关闭");
        }else{
            console.log("未打开录音");
        }
    }

    /**开始录音**/
    function recStart(){
        if(rec&&Recorder.IsOpen()){
            recBlob=null;
            rec.start();
            layui.use(['jquery', 'layer'], function () {
                var layer = layui.layer;
                layer.msg("<?php echo $lang['recording']; ?>", {
                    icon: 16
                    , shade: 0.01
                    , skin: 'layui-layer-lan'
                    , time: 0
                    , btn: ["<?php echo $lang['send']; ?>", "<?php echo $lang['cancel']; ?>"]
                    , yes: function (index, layero) {
                        //按钮【按钮一】的回调
                        rec.stop(function(blob,duration){
                            console.log(blob,(window.URL||webkitURL).createObjectURL(blob),"时长:"+duration+"ms");
                            recBlob=blob;
                            var fd = new FormData();
                            var wavName = encodeURIComponent('audio_recording_' + new Date().getTime() + '.wav');
                            fd.append('wavName', wavName);
                            fd.append('file', recBlob);
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    jsonObject = JSON.parse(xhr.responseText);
                                    voicemessage = '<div style="cursor:pointer;text-align:center;" onclick="getstate(this)" data="play"><audio src="'+jsonObject.data.src+'"></audio><i class="layui-icon" style="font-size:25px;">&#xe6dc;</i></div>';
                                    var sid = $('#channel').text();
                                    var sdata = $.cookie('cu_com');
                                    if (sdata) {
                                        var json = $.parseJSON(sdata);
                                        var img = json.avater;

                                    }
                                    var myDate = new Date();
                                    var time =  myDate.getHours()+":"+myDate.getMinutes();

                                    var str = '';
                                    str += '<li class="chatmsg"><div class="showtime">' + time + '</div>';
                                    str += '<div style="position: absolute;top: 26px;right: 2px;"><img  class="my-circle cu_pic" src="' + pic + '" width="50px" height="50px"></div>';
                                    str += "<div class='outer-right'><div class='customer'>";
                                    str += "<pre>" +  voicemessage + "</pre>";
                                    str += "</div></div>";
                                    str += "</li>";

                                    $(".conversation").append(str);
                                    $("#text_in").empty();

                                    var div = document.getElementById("wrap");
                                    div.scrollTop = div.scrollHeight;
                                    setTimeout(function(){
                                        $('.chatmsg').css({
                                            height: 'auto'
                                        });
                                    },0);
                                    $.ajax({
                                        url:ROOT_URL+"/admin/event/chat",
                                        type: "post",
                                        data: {service_id:service_id, visiter_id:visiter_id,content: voicemessage,business_id: business_id, avatar: pic,record: record},
                                        dataType:'json',
                                        success:function(res){
                                            if(res.code != 0){
                                                layer.msg(res.msg,{icon:2});
                                            }
                                        }
                                    });
                                }
                            };
                            xhr.open('POST', '/admin/event/uploadVoice');
                            xhr.send(fd);
                        });
                        recClose();
                        layer.close(index);
                    }
                    , btn2: function (index, layero) {
                        recClose();
                        layer.close(index);
                    }
                });

            });
            console.log("已开始录音...");
        }else{
            layer.msg("<?php echo $lang['voice_failed']; ?>")
        }
    }


   var getstate =function(obj){

       var c=obj.children[0];

       var state=$(obj).attr('data');

       if(state == 'play'){
         c.play();
         $(obj).attr('data','pause');
         $(obj).find('i').html("&#xe651;");

       }else if(state == 'pause'){
          c.pause();
         $(obj).attr('data','play');
          $(obj).find('i').html("&#xe6dc;");
       }

        c.addEventListener('ended', function () {
         $(obj).attr('data','play');
         $(obj).find('i').html("&#xe6dc;");

       }, false);
    }


  function showDiv(){
       $("#fuceng").toggleClass('hide');
    }


  $(function (){

    $("#showinfo").on('click',function(){

        showDiv();

        $(document).one("click", function () {

         $("#fuceng").addClass('hide');

        });
        event.stopPropagation();//阻止事件向上冒泡
    });

    $("#fuceng").click(function (event)
    {
        event.stopPropagation();//阻止事件向上冒泡

     });
  });


    function choose(obj){
        $(obj).addClass('selected-li');
        $(obj).siblings().removeClass('selected-li')
        var type =$(obj).attr('name');
        $.cookie('type',type);
        $("#fuceng").addClass('hide');
        types();
    }

    function getOs() {
        var OsObject = "";
        if (isFirefox = navigator.userAgent.indexOf("Firefox") > 0) {
            return "Firefox";
        }
    }

    //获取qq截图的图片
    (function () {
        var imgReader = function (item) {
            var blob = item.getAsFile(),
                reader = new FileReader();

            var formData = new FormData();
            formData.append('visiter_id', visiter_id);
            formData.append('business_id', business_id);
            formData.append('avatar', pic);
            formData.append('record', record);
            formData.append('service_id', service_id);
            var name = encodeURIComponent('img-' + new Date().getTime() + '.png');
            formData.append('upload', blob, name);
            $.ajax({
                url:'/admin/event/upload',
                type: 'POST',
                data: formData,
                //这两个设置项必填
                contentType: false,
                processData: false,
                success:function(res){

                }
            });



            // 读取文件后将其显示在网页中
            reader.onload = function (e) {
                var msg = '';
                msg += '<img   src="' + e.target.result + '">';
                    var time;

                    if($.cookie("itime") == ""){
                        var myDate = new Date();
                            time = myDate.getHours()+":"+myDate.getMinutes();
                        var timestamp = Date.parse(new Date());
                        $.cookie("itime",timestamp/1000);
                    }else{
                        var timestamp = Date.parse(new Date());
                        var lasttime =$.cookie("itime");
                        if((timestamp/1000 - lasttime) >30){
                            var myDate =new Date(timestamp);
                            time = myDate.getHours()+":"+myDate.getMinutes();
                        }else{
                            time ="";
                        }
                        $.cookie("itime",timestamp/1000);
                    }

                    var str = '';
                    str += '<li class="chatmsg"><div class="showtime">' + time + '</div>';
                    str += '<div class="" style="position: absolute;top: 26px;right: 2px;"><img  class="my-circle cu_pic" src="' + pic + '" width="40px" height="40px"></div>';
                    str += "<div class='outer-right'><div class='customer' style='padding:0;border-radius:0;max-height:100px'>";
                    str += "<pre>" + msg + "</pre>";
                    str += "</div></div>";
                    str += "</li>";

                    $(".conversation").append(str);

           }
            // 读取文件
            reader.readAsDataURL(blob);
        };
        document.getElementById('text_in').addEventListener('paste', function (e) {
            // 添加到事件对象中的访问系统剪贴板的接口
            var clipboardData = e.clipboardData,
                i = 0,
                items, item, types;

            if (clipboardData) {
                items = clipboardData.items;
                if (!items) {
                    return;
                }
                item = items[0];
                // 保存在剪贴板中的数据类型
                types = clipboardData.types || [];
                for (; i < types.length; i++) {
                    if (types[i] === 'Files') {
                        item = items[i];
                        break;
                    }
                }
                // 判断是否为图片数据
                if (item && item.kind === 'file' && item.type.match(/^image\//i)) {
                    imgReader(item);
                }
            }
        });
    })();

    layui.use('element', function(){
      var element = layui.element;
    });

    // 视频通话
    var getvideo =function(){

        var times = (new Date()).valueOf();
        var sid =$.cookie('services');
        if(service_id == sid){

            //申请
            $.ajax({
                url:ROOT_URL+'/admin/event/apply',
                type: 'post',
                data: {id: sid,cha: times,avatar:pic,name:visiter,channel:channel,business_id:business_id,visiter_id:visiter_id},
                dataType:'json',
                success:function (res) {
                    if(res.code != 0){
                        layer.msg(res,{icon:2,offset:'20px'});
                    }else{

                        var str='';
                        str+='<div class="videos">';
                        str+='<video id="localVideo" autoplay></video>';
                        str+='<video id="remoteVideo" autoplay class="hidden"></video></div>';

                         layer.open({
                          type:1
                          ,title: '视频'
                          ,shade:0
                          ,closeBtn:1
                          ,area: ['440px', '378px']
                          ,content:str
                          ,end:function(){
                              mediaStreamTrack.getTracks().forEach(function (track) {
                              track.stop();
                            });

                          }
                    });


                    try{
                         connenctVide(times);
                     }catch(e){
                         console.log(e);
                         return;
                     }


                    }
                }
             });

        }else{

            layer.msg("还未连接客服！不能使用该功能");
        }
    };


    //获取tab
    function gettab(business_id){

               $.ajax({
                 url:ROOT_URL+'/admin/event/gettablist',
                 type:'post',
                 data:{business_id:business_id},
                 success:function(res){
                    if(res.code == 0){
                        var tab='';
                        var str='';
                        $.each(res.data,function(k,v){
                             tab+='<li>'+v.title+'</li>';
                             str+=v.content;
                        });
                        $("#tablist").append(tab);
                        $("#tabcontent").append(str);
                    }
                 }
               });
            }

</script>
</body>
</html>