<?php /* Smarty version Smarty-3.1.6, created on 2016-10-27 21:39:17
         compiled from "E:/wamp/www/yunwei/Admin/View\Manager\add.html" */ ?>
<?php /*%%SmartyHeaderCode:8205812038517b4f8-94778500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48700a590d92f9c7731c01eed9f71e79312db46c' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Manager\\add.html',
      1 => 1477377178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8205812038517b4f8-94778500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'POST' => 0,
    'Errors' => 0,
    'rinfo' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58120385a0ea1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58120385a0ea1')) {function content_58120385a0ea1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>添加管理员信息</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
</head>
    <body>
        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》添加管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Manager/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px;margin: 10px 5px">           
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">           
                <table border="1" width="100%" class="table_a">
                    <tr>                        
                        <td>管理员帐号：</td>
                        <td><input type="text" name="mg_name" value="<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_name'];?>
" />
                            <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_name'];?>
</span>
                        </td>
                    </tr>
                    <tr>
                        <td>真实姓名：</td>
                        <td><input type="text" name="mg_real_name" value="<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_real_name'];?>
"/>
                            <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_real_name'];?>
</span>
                        </td>
                    </tr>                
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input type="password" name="mg_pwd" value="<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_pwd'];?>
"/>
                            <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_pwd'];?>
</span>
                        </td>
                    </tr>
                    <tr>
                        <td>手 机 号：</td>
                        <td><input type="text" name="mg_tel" value="<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_tel'];?>
" />
                            <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_tel'];?>
</span>
                        </td>
                    </tr>
                    <tr>
                        <td>角&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色：</td>
                        <td>
                            <select name='mg_role_id' >
                                <option value=''>——请选择——</option>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['POST']->value['mg_role_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                <?php } ?>
                            </select>
                            <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_role_id'];?>
</span>
                        </td>
                    </tr>                
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="添加">
                            <input type="reset" value="重填">
                        </td>
                    </tr>  
                </table>
            </form>
        </div>
    </body>
</html>
<?php }} ?>