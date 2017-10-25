<?php /* Smarty version Smarty-3.1.6, created on 2016-10-31 09:01:48
         compiled from "D:/WWW/yunwei/Admin/View\Server\suspendList.html" */ ?>
<?php /*%%SmartyHeaderCode:13485580eb40376fb00-63566178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bf7a6d3be6dd5456608f72b9091ad7730bfc99' => 
    array (
      0 => 'D:/WWW/yunwei/Admin/View\\Server\\suspendList.html',
      1 => 1477875701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13485580eb40376fb00-63566178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580eb40392537',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580eb40392537')) {function content_580eb40392537($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>服务器日志列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：服务器日志 -》公共池</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Server/add">【添加日志】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div class="div_search">
            <span>
                <form action="<?php echo @__MODULE__;?>
/Server/suspendList" method="get">
                    描述关键字：
                    <input type="text" name="log_describe" value="<?php echo $_SESSION['sear']['log_describe'][1];?>
" size=15/>                      
                    <input value="查询" type="submit" />
                    <input value="重置" type="button" id="reset" />
                </form>
            </span>
        </div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a"  width="100%">
                <tbody><tr style="font-weight: bold; background-color:#e8f2fc; color:#323232">
                        <td>编号</td>
                        <td>项目</td>                       
                        <td>事件详细描述</td>
                        <td>报告人</td>
                        <td>报告人电话</td>
                        <td>事件报告时间</td>
<td>操作</td>                        
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
</td>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['list_pid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?><?php echo $_smarty_tpl->tpl_vars['pinfo']->value[$_smarty_tpl->tpl_vars['v']->value['list_pid']];?>
<?php }?> - <?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
</td>                       
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
">                            
                            <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['log_describe'])>30){?>
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['log_describe'],0,30,'utf-8');?>
…                                
                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
  
                            <?php }?>                            
                        </td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>    
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_reported_time'];?>
</td>
			<td><a href="<?php echo @__MODULE__;?>
/Server/upd/log_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
">受理</a>
                            <?php if ($_SESSION['mg_role']==1){?>
                             | <a class="del_log" href="<?php echo @__MODULE__;?>
/Server/delSuspend/log_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
">删除</a>
                            <?php }?>
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
										
					<script type="text/javascript">
                                            $(".del_log").click(function () {
                                                if (confirm("您确认删除本条日志吗？")) {                                                     
                                                }else{
                                                    return false;
                                                }
                                            })
                                            $("#reset").on("click",function(){
                                                window.location.href="suspendList";
                                            });
                                        </script>
                                        </body>
                                        </html>


<?php }} ?>