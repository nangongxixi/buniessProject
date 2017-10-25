<?php /* Smarty version Smarty-3.1.6, created on 2016-11-15 15:24:34
         compiled from "D:/wamp/www/yunwei/Admin/View\Server\suspendList.html" */ ?>
<?php /*%%SmartyHeaderCode:16169581ad353cd3a50-46990630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '689bb1ac2ff4843e8c9f805eb0cbbd26a49e33e6' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Server\\suspendList.html',
      1 => 1479194647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16169581ad353cd3a50-46990630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad354347e6',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad354347e6')) {function content_581ad354347e6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <tbody><tr style="font-weight: bold; background-color:#e8f2fc; color:#323232; text-align:center">
                        <td style="text-align:center">编号</td>
                        <td style="text-align:center">项目</td>                       
                        <td style="text-align:center">事件详细描述</td>
                        <td style="text-align:center">报告人</td>
                        <td style="text-align:center">报告人电话</td>
                        <td style="text-align:center">事件报告时间</td>
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
                        <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
</td>
                        <td style="text-align:center"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['list_pid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?><?php echo $_smarty_tpl->tpl_vars['pinfo']->value[$_smarty_tpl->tpl_vars['v']->value['list_pid']];?>
<?php }?> - <?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
</td>                       
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
" style="text-align:center">                            
                            <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['log_describe'])>50){?>
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['log_describe'],0,50,'utf-8');?>
…                                
                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
  
                            <?php }?>                            
                        </td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_phone'];?>
" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>    
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_phone'];?>
" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['log_phone'];?>
</td>
                         <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['log_reported_time'];?>
</td>
			<td style="text-align:center"><a href="<?php echo @__MODULE__;?>
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