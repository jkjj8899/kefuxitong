<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"/www/wwwroot/xiaoyun.wutao7.top/public/../application/service/view/setting/course.html";i:1635315500;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css"/>
    <style>
        .layui-tab-brief>.layui-tab-title li{
            margin: 0 15px;
        }
    </style>
</head>
<body class="pear-container">
<div class="layui-row layui-col-space15" id="container">
    <div class="layui-col-md12">
        <div class="layui-card">
                <div class="layui-tab layui-tab-brief">
                    <ul class="layui-tab-title">
                        <li class="layui-this">弹层接入</li>
                        <li>智能匹配模式</li>
                        <li>指定客服模式</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-card-body">
                                <h3>在您要接入的网站内添加如下的代码：</h3>
                                <div class="layui-code">
                                    &lt;script src="<?php echo $domain; ?>/assets/layer/ai_service_diy_<?php echo $business_id; ?>.js" charset="UTF-8">&lt;/script>
                                </div>
                                <h3>则会在您的网站上显示咨询客服按钮</h3>
                                <br/>
                                <ul class="site-doc-bgcolor">
                                    <li class="layui-bg-red" style="padding: 10px">如果你们的网站有自己的 用户id 、用户名、头像信息，您可以通过如下方式传入</li>
                                </ul>
                                <div class="layui-code">
                                    &lt;script type="text/javascript">
                                    &nbsp;&nbsp;var ai_service={};
                                    &nbsp;&nbsp;ai_service.visiter_id='';//访客id
                                    &nbsp;&nbsp;ai_service.visiter_name='';//访客昵称
                                    &nbsp;&nbsp;ai_service.avatar='';//访客头像绝对路径
                                    &lt;/script>
                                </div>
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>解释</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>visiter_id</td>
                                        <td>访客的唯一标识，可以是你网站的用户id 或者 其他标识，不传系统自动生成 uuid</td>
                                    </tr>
                                    <tr>
                                        <td>visiter_name</td>
                                        <td>访客的昵称，不传的话，系统自动会拼接 '访客' + uid</td>
                                    </tr>
                                    <tr>
                                        <td>avatar</td>
                                        <td>访客的头像，即您网站的用户头像, 不传默认是系统的通用头像</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-card-body">
                                <h3>你可以在任何地方通过在固定连接后面添加客服的标识，实现接入智能匹配客服模式：</h3>
                                <div class="layui-code"><?php echo $domain; ?>/index/index/home?visiter_id=&visiter_name=&avatar=&groupid=0&business_id=<?php echo $business_id; ?></div>
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>解释</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>visiter_id</td>
                                        <td>访客的唯一标识，可以是你网站的用户id 或者 其他标识，不传系统自动生成 uuid</td>
                                    </tr>
                                    <tr>
                                        <td>visiter_name</td>
                                        <td>访客的昵称，不传的话，系统自动会拼接 '访客' + uid</td>
                                    </tr>
                                    <tr>
                                        <td>avatar</td>
                                        <td>访客的头像，即您网站的用户头像, 不传默认是系统的通用头像</td>
                                    </tr>
                                    <tr>
                                        <td>groupid</td>
                                        <td>客服分组ID</td>
                                    </tr>
                                    <tr>
                                        <td>business_id</td>
                                        <td>系统固定参数，不可修改</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-card-body">
                                <h3>你可以在任何地方通过在固定连接后面添加客服的标识，实现接入指定客服的功能：</h3>
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th>客服名称</th>
                                        <th>访问连接</th>
                                        <th>访问连接二维码</th>
                                        <th>微信链接</th>
                                        <th>微信链接二维码</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($service as $k=>$v): ?>
                                    <tr>
                                        <td><?php echo $v['user_name']; ?></td>
                                        <td>
                                            <?php echo $v['personal']; ?>
                                        </td>
                                        <td>
                                            <div class="code" data-url="<?php echo $v['personal']; ?>"></div>
                                        </td>
                                        <td>
                                            <?php echo $v['personalwechat']; ?>
                                        </td>
                                        <td>
                                            <div class="code" data-url="<?php echo $v['personalwechat']; ?>"></div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>解释</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>visiter_id</td>
                                        <td>访客的唯一标识，可以是你网站的用户id 或者 其他标识，不传系统自动生成 uuid</td>
                                    </tr>
                                    <tr>
                                        <td>visiter_name</td>
                                        <td>访客的昵称，不传的话，系统自动会拼接 '访客' + uid</td>
                                    </tr>
                                    <tr>
                                        <td>avatar</td>
                                        <td>访客的头像，即您网站的用户头像, 不传默认是系统的通用头像</td>
                                    </tr>
                                    <tr>
                                        <td>groupid</td>
                                        <td>客服分组ID</td>
                                    </tr>
                                    <tr>
                                        <td>business_id</td>
                                        <td>系统固定参数，不可修改</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script src="/static/component/layui/layui.js"></script>
<script src="/static/component/pear/pear.js"></script>
<script type="text/javascript" src="/assets/libs/jquery/jquery.min.js?v=AI_KF"></script>
<script type="text/javascript" src="/assets/js/admin/jquery.qrcode.min.js?v=1.3"></script>
<script>
    $('.code').each(function(){
        $(this).qrcode({
            render: "canvas",
            width: 150,
            height: 150,
            text: $(this).data('url')
        });
    });
</script>
<script>
    layui.use(['code'], function () {
        layui.code(); //引用code方法
    })
</script>
</body>
</html>