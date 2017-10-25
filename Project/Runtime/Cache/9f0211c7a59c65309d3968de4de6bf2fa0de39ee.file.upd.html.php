<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 17:37:01
         compiled from "D:/wamp/www/yunwei/Admin/View\Manager\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:15545581ae4eacfbea0-17942013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0211c7a59c65309d3968de4de6bf2fa0de39ee' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Manager\\upd.html',
      1 => 1478165787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15545581ae4eacfbea0-17942013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ae4eb23f7b',
  'variables' => 
  array (
    'mg_id' => 0,
    'POST' => 0,
    'info' => 0,
    'Errors' => 0,
    'rinfo' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ae4eb23f7b')) {function content_581ae4eb23f7b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改用户信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：用户管理-》修改用户信息</span>
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
            <input type='hidden' name='mg_id' value='<?php echo $_smarty_tpl->tpl_vars['mg_id']->value;?>
' />
            <table border="1" width="100%" class="table_a">                
                <?php if (empty($_smarty_tpl->tpl_vars['POST']->value)){?>
                    <?php $_smarty_tpl->tpl_vars['POST'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value, null, 0);?>
                <?php }?>
                <tr>
                    <td width="12%" style="padding-left:30px">管理员帐号：</td>
                    <td><input type="text" name="mg_name" value='<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_name'];?>
' style="width:15%"/>
                        <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_name'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:30px">真实姓名：</td>
                    <td><input type="text" name="mg_real_name" value='<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_real_name'];?>
'/>
                        <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_real_name'];?>
</span>
                    </td>
                </tr>                
                <tr>
                    <td style="padding-left:30px">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                    <td><input type="password" name="mg_pwd" style="width:15%" value='<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_pwd'];?>
'/>
                        <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_pwd'];?>
</span>
                    </td>
                </tr>
                 <tr>
                    <td style="padding-left:30px">手 机 号：</td>
                    <td><input type="text" name="mg_tel" value='<?php echo $_smarty_tpl->tpl_vars['POST']->value['mg_tel'];?>
' style="width:15%"/>
                        <span class="errors"><?php echo $_smarty_tpl->tpl_vars['Errors']->value['mg_tel'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:30px">角&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色：</td>
                     <td>
                        <select name='mg_role_id' style="width:15%"/>
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
                        <input type="submit" value="修改">                        
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>
<?php }} ?>