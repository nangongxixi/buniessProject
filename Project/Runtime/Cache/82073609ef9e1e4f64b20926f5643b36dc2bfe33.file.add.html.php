<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 17:47:18
         compiled from "D:/wamp/www/yunwei/Admin/View\Auth\add.html" */ ?>
<?php /*%%SmartyHeaderCode:11194581ad35baf7237-99582599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82073609ef9e1e4f64b20926f5643b36dc2bfe33' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Auth\\add.html',
      1 => 1478166430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11194581ad35baf7237-99582599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad35bd9573',
  'variables' => 
  array (
    'authinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad35bd9573')) {function content_581ad35bd9573($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Goods/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td width="12%" style="padding-left:30px">权限名称</td>
                    <td><input type="text" name="auth_name" style="width:15%"></td>
                </tr>
                <tr>
                    <td style="padding-left:30px">权限父级</td>
                    <td>
                        <select name='auth_pid' style="width:15%; line-height:220%">
                            <option value='0'>—— ——请选择—— ——</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authinfo']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:30px">权限控制器</td>
                    <td><input type="text" name="auth_c" style="width:15%"></td>
                </tr>
                <tr>
                    <td style="padding-left:30px">权限操作方法</td>
                    <td><input type="text" name="auth_a" style="width:15%"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center" style="padding-left:142px">
                        <input type="submit" value="添加">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
<?php }} ?>