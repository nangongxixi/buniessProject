<?php /* Smarty version Smarty-3.1.6, created on 2016-10-27 22:00:38
         compiled from "E:/wamp/www/yunwei/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:418658120886a4e218-71150851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a097d647e1aefb36d1ad1a52ca79cf3ee7ae41a' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Manager\\showlist.html',
      1 => 1477377304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418658120886a4e218-71150851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'rinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581208871b3cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581208871b3cb')) {function content_581208871b3cb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>会员列表</title>
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
    </head>
    <body>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Manager/add">【添加管理员】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold; background-color:#e8f2fc; color:#323232">
                        <td>序号</td>
                        <td>管理员帐号</td>
                        <td>管理员名称</td>
                        <td>角色</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['rinfo']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</td>

                        <td><a href='<?php echo @__CONTROLLER__;?>
/upd/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
'>修改</a> | 
                            <a class="del_manager" href="<?php echo @__CONTROLLER__;?>
/del/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">删除</a></td>                           
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

        <script type="text/javascript">
            $(".del_manager").click(function () {
                if (confirm("您确认删除该用户吗？")) {
                } else {
                    return false;
                }
            })
        </script>
    </body>
</html>

<?php }} ?>