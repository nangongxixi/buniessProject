<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 16:44:01
         compiled from "D:/wamp/www/yunwei/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:4782581ad356247a93-91572508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af03925997fe73a6573c9f76511eb9fee1051ef9' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Manager\\showlist.html',
      1 => 1478162584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4782581ad356247a93-91572508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad35665399',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'rinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad35665399')) {function content_581ad35665399($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：用户管理-》用户列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Manager/add">【添加用户】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__MODULE__;?>
/Manager/showlist" method="get">
                    请输入用户姓名关键字：
                    <input type="text" name="mg_real_name" value="<?php echo $_SESSION['sear']['mg_real_name'][1];?>
" size=15/>                        
                    <input value="查询" type="submit" />
                    <input value="重置" type="button" id="reset" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold; background-color:#e8f2fc; color:#323232">
                        <td style="text-align:center">序号</td>
                        <td style="text-align:center">管理员帐号</td>
                        <td style="text-align:center">管理员名称</td>
                        <td style="text-align:center">角色</td>
                        <td style="text-align:center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['rinfo']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</td>

                        <td style="text-align:center"><a href='<?php echo @__CONTROLLER__;?>
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
            $("#reset").on("click",function(){
                window.location.href="showlist";
            });
        </script>
    </body>
</html>

<?php }} ?>