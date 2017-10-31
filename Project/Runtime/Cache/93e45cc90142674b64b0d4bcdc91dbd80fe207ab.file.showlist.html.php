<?php /* Smarty version Smarty-3.1.6, created on 2017-10-31 16:03:45
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:520459f82e6198d285-26986068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93e45cc90142674b64b0d4bcdc91dbd80fe207ab' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\auth\\showlist.html',
      1 => 1478163027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520459f82e6198d285-26986068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f82e619c7c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f82e619c7c1')) {function content_59f82e619c7c1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Auth/add">【添加权限】</a>
                </span>
            </span>
        </div>
        <div></div>
        
       

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td style="text-align:center">序号</td>
                        <td style="text-align:center">权限名称</td>
                        <td style="text-align:center">控制器</td>
                        <td style="text-align:center">操作方法</td>
                        <td style="text-align:center">全路径</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td style="padding-left:50px"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</td>
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>