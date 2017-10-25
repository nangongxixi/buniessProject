<?php /*%%SmartyHeaderCode:8233580f099e73ad23-62384611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c81f9b8863e2264f70b5a711f2d8b6276db2de' => 
    array (
      0 => 'D:/WWW/yunwei/Admin/View\\Index\\left.html',
      1 => 1477032295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8233580f099e73ad23-62384611',
  'variables' => 
  array (
    'pauth_info' => 0,
    'v' => 0,
    'sauth_info' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580f099e90f99',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f099e90f99')) {function content_580f099e90f99($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="http://yunwei.com/yunwei/public/Admin/css/admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                } else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=http://yunwei.com/yunwei/public/Admin/img/menu_bg.jpg border=0>
            <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                                        <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=http://yunwei.com/yunwei/public/Admin/img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);" style="font-weight: bold">服务器日志</a></td></tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                    </table>
                    <table id=child1 style="display: none; margin: 3px 0px" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                                                                                                   <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Server/showlist" 
                                            target="right">日志列表</a>
                                     </td>
                                 </tr>
                                                                                                                                    <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Server/add" 
                                            target="right">填写日志</a>
                                     </td>
                                 </tr>
                                                                                                                                                                                                                                                                        <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Server/suspendList" 
                                            target="right">公共池</a>
                                     </td>
                                 </tr>
                                                                                                                                                                                                                                                                        
                             </table>
                                                 <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=http://yunwei.com/yunwei/public/Admin/img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(7) 
                                    href="javascript:void(0);" style="font-weight: bold">用户管理</a></td></tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                    </table>
                    <table id=child7 style="display: none; margin: 3px 0px" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                                                                                                                                                                                                                                       <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Manager/showlist" 
                                            target="right">用户列表</a>
                                     </td>
                                 </tr>
                                                                                                                                    <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Manager/add" 
                                            target="right">添加用户</a>
                                     </td>
                                 </tr>
                                                                                                                                                                                                                                                                                                                                          
                             </table>
                                                 <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=http://yunwei.com/yunwei/public/Admin/img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(12) 
                                    href="javascript:void(0);" style="font-weight: bold">角色管理</a></td></tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                    </table>
                    <table id=child12 style="display: none; margin: 3px 0px" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                                                                                                                                                                                                                                                                                                                                                                                                                                             <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Role/showlist" 
                                            target="right">角色列表</a>
                                     </td>
                                 </tr>
                                                                                                                                                                                                      
                             </table>
                                                 <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=http://yunwei.com/yunwei/public/Admin/img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(14) 
                                    href="javascript:void(0);" style="font-weight: bold">权限管理</a></td></tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                    </table>
                    <table id=child14 style="display: none; margin: 3px 0px" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Auth/showlist" 
                                            target="right">权限列表</a>
                                     </td>
                                 </tr>
                                                                                                                                    <tr height=20>
                                     <td align=middle width=30><img height=9 
                                                                    src="http://yunwei.com/yunwei/public/Admin/img/menu_icon.gif" width=9></td>
                                     <td style="line-height: 200%"><a class="menuchild" 
                                            href="/yunwei/index.php/Admin/Auth/add" 
                                            target="right">添加权限</a>
                                     </td>
                                 </tr>
                                                                  
                             </table>
                                                      </td>
                         <td width=1 bgcolor=#d1e6f7></td>
                    </tr>
                </table>
            </body>
        </html>
<?php }} ?>