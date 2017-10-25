<?php /* Smarty version Smarty-3.1.6, created on 2017-10-20 14:25:47
         compiled from "D:/phpStudy/WWW/BusinessProject/yunwei/Admin/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:2034059e996ebb77344-49991837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45805900b5936ffe32dbbbed689b1cef8ea78d3e' => 
    array (
      0 => 'D:/phpStudy/WWW/BusinessProject/yunwei/Admin/View\\Index\\right.html',
      1 => 1477442919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034059e996ebb77344-49991837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59e996ebbf436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e996ebbf436')) {function content_59e996ebbf436($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo @ADMIN_IMG_URL;?>
title_bg1.jpg>当前位置: 首页</td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=<?php echo @ADMIN_IMG_URL;?>
shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo @ADMIN_IMG_URL;?>
admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>
                                <script type="text/javascript">
                                    window.onload=function(){
                                     setInterval(function(){
                                      var date=new Date();
                                      var year=date.getFullYear(); //获取当前年份
                                      var mon=date.getMonth()+1; //获取当前月份
                                      var da=date.getDate(); //获取当前日
                                      var day=date.getDay(); //获取当前星期几
                                      var h=date.getHours(); //获取小时
                                      var m=date.getMinutes(); //获取分钟
                                      var s=date.getSeconds(); //获取秒
                                      var d=document.getElementById('Date'); 
                                      d.innerHTML='当前时间：'+year+'年'+mon+'月'+da+'日'+'   '+'星期'+day+'   '+h+':'+m+':'+s;
                                     },1000) 
                                    }
                               </script>
                                <div id="Date"></div>
                            </td></tr>
                        <tr>
                            <td>当前用户： <font style="font-weight: bold; font-size: 16px"><?php echo $_SESSION['mg_realname'];?>
</font></td></tr>
                        <tr>
                            <td>欢迎进入运维信息管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo @ADMIN_IMG_URL;?>
title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo $_SESSION['mg_username'];?>
</td></tr>            
            <tr>
                <td align=right>注册时间：</td>
                <td style="color: #880000"><?php echo $_SESSION['mg_created'];?>
</td></tr>
            <tr>
            <td align=right>联系电话：</td>
            <td style="color: #880000"><?php echo $_SESSION['mg_tel'];?>
</td></tr>
           
            
           
        </table>
    </body>
</html><?php }} ?>