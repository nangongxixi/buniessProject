<?php /*%%SmartyHeaderCode:4417580f099fa92900-89678922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7c7bb5d502adfb5a1afa3bed979d263c0d63da' => 
    array (
      0 => 'D:/WWW/yunwei/Admin/View\\Index\\right.html',
      1 => 1476849529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4417580f099fa92900-89678922',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580f099fc28d5',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f099fc28d5')) {function content_580f099fc28d5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="http://yunwei.com/yunwei/public/Admin/css/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=http://yunwei.com/yunwei/public/Admin/img/title_bg1.jpg>当前位置: 首页</td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=http://yunwei.com/yunwei/public/Admin/img/shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="http://yunwei.com/yunwei/public/Admin/img/admin_p.gif" 
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
                            <td>当前用户： <font style="font-weight: bold; font-size: 16px">huangping</font></td></tr>
                        <tr>
                            <td>欢迎进入运维信息管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=http://yunwei.com/yunwei/public/Admin/img/title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000">huangping</td></tr>            
            <tr>
                <td align=right>注册时间：</td>
                <td style="color: #880000">2016-10-18 13:31:19</td></tr>
            <tr>
            <td align=right>联系电话：</td>
            <td style="color: #880000">13888888888</td></tr>
           
            
           
        </table>
    </body>
</html><?php }} ?>