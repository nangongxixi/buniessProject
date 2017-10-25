<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 13:31:42
         compiled from "D:/wamp/www/yunwei/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:19433581acbbe882239-69010842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc86315903b4e392c3780782a40c648d66ad7c8' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Manager\\login.html',
      1 => 1477450222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19433581acbbe882239-69010842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581acbbeb5d64',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581acbbeb5d64')) {function content_581acbbeb5d64($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"><span style="color:red;margin-top: 30px; position:relative; position:relative;top:60px;left:130px"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</span></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">                                    
                                    <ul>
                                        <li class="user_main_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['USERNAME'];?>
： </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="mg_username"> </li></ul>
                                    <ul>
                                        <li class="user_main_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['PASSWORD'];?>
： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="mg_password" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                            <img class="yanzm" src="<?php echo @__CONTROLLER__;?>
/verifyImg"  onclick="this.src=this.src+'?'" />
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">
                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMG_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>