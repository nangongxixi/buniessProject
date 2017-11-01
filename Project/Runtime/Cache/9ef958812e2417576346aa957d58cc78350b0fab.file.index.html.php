<?php /* Smarty version Smarty-3.1.6, created on 2017-11-01 17:02:53
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\wap\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2759559f97affc67d48-32199965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef958812e2417576346aa957d58cc78350b0fab' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\wap\\index.html',
      1 => 1509526971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2759559f97affc67d48-32199965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f97affcc97e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f97affcc97e')) {function content_59f97affcc97e($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0030)http://m.fkgg22.icoc.me/?_sc=2 -->
<html style="font-size: 32px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>网站模板-广告</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0, user-scalable=1"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="layoutmode" content="standard">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="renderer" content="webkit">

    <!--uc浏览器判断到页面上文字居多时，会自动放大字体优化移动用户体验。添加以下头部可以禁用掉该优化-->
    <meta name="wap-font-scale" content="no">

    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/skins/skin-blue.min.css">

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
wap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
base.min.css" title="default">

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <style>
        .input-border {
            border: 1px solid #8b8487;
        }
        .submitlog {
            background-color: #e6212a;
            border-color: #e6212a;
            color: #fff
        }
    </style>

    <!-- ./wrapper -->
    <script src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
    <!-- layer -->
    <script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper" style="background-color: #fff">
    <table id="__01" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"
           style="margin: 0 auto !important;">
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_01.gif" width="1080" height="132" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_02.gif" width="1080" height="573" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_03.gif" width="1080" height="473" border="0"></td>
        </tr>
        <tr>
            <td>
                <form action="<?php echo @__SELF__;?>
" method="post" style="width: 90%; margin: 30px auto">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                <span class="btn btn-warning dropdown-toggle id=" sizing-addon1"><i
                                    class="glyphicon glyphicon-user"
                                    aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="mg_username" class="form-control input-border"
                                   placeholder="请输入贷款金额" style="font-size: 16px">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                <span class="btn btn-warning dropdown-toggle id=" sizing-addon1"><i
                                    class="glyphicon glyphicon-lock"></i></span>
                            </div>
                            <input type="text" name="mg_password" class="form-control input-border" placeholder="请输入姓名" style="font-size: 16px">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                <span class="btn btn-warning dropdown-toggle id=" sizing-addon1"><i
                                    class="glyphicon glyphicon-lock"></i></span>
                            </div>
                            <input type="text" name="mg_password" class="form-control input-border"
                                   placeholder="请输入手机号" style="font-size: 16px">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                <span class="btn btn-danger dropdown-toggle id=" sizing-addon1"><i
                                    class="glyphicon glyphicon-check"></i></span>
                            </div>

                            <input id="captcha" name="captcha" type="text" class="form-control input-border"
                                   style="width:50%"
                                   placeholder="请输入验证码" style="font-size: 16px !important;">
                            <span style="margin-left: 15px;    margin-left: 15px;    position: absolute;">
                        <img class="yanzm"  src="<?php echo @__CONTROLLER__;?>
/verifyImg"
                             onclick="this.src=this.src+'?'"/>
                    </span>


                        </div>
                    </div>

                    <button type="submit" id="submit" class="btn btn-block btn-lg submitlog">登录</button>

                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_05.gif" width="1080" height="1066" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_06.gif" width="1080" height="1081" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_07.gif" width="1080" height="1147" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_08.gif" width="1080" height="1215" border="0"></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo @IMG_URL;?>
wap/wap_09.gif" width="1080" height="222" border="0"></td>
        </tr>
    </table>
</div>
</body>
</html>
<?php }} ?>