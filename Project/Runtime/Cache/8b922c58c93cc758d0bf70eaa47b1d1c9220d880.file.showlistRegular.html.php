<?php /* Smarty version Smarty-3.1.6, created on 2016-10-24 22:40:14
         compiled from "E:/wamp/www/yunwei/Admin/View\Server\showlistRegular.html" */ ?>
<?php /*%%SmartyHeaderCode:25008580e1d4e9ec1a7-68787431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b922c58c93cc758d0bf70eaa47b1d1c9220d880' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Server\\showlistRegular.html',
      1 => 1477291982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25008580e1d4e9ec1a7-68787431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'vv' => 0,
    'userInfot' => 0,
    'userInfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580e1d4fe3ddc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580e1d4fe3ddc')) {function content_580e1d4fe3ddc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>服务器日志列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：服务器日志 -》日志列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Server/add">【添加日志】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div class="div_search">
            <span>
                <form action="#" method="get">
                    名称<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a"  width="100%">
                <tbody><tr style="font-weight: bold; background-color:#e8f2fc; color:#323232">
                        <td>编号</td>
                        <td>项目</td>
                        <td>事件报告时间</td>
                        <td>严重级别</td>
                        <td>报告人</td>
                        <td>事件类型</td>
                        <td>事件详细描述</td>
                        <td>首次响应时间</td>
                        <td>处理完成时间</td>
                        <td>处理方法及步骤</td>
                        <td>处理状态</td>
                        <td>处理人</td>                        
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_reported_time'];?>
</td>
                        <td>                            
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['log_level']==1){?>I
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_level']==2){?>II
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_level']==3){?>III
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_level']==4){?>IV
                            <?php }?>
                        </td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['log_type']==1){?>软件故障
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_type']==2){?>硬件故障
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_type']==3){?>彩打没墨
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_type']==4){?>其他故障
                            <?php }?>
                        </td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
">                            
                            <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['log_describe'])>10){?>
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['log_describe'],0,10,'utf-8');?>
…                                
                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['log_describe'];?>
  
                            <?php }?>                            
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_first_response_time'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_completion_time'];?>
</td>
                        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['log_processing_method'];?>
">
                            <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['log_processing_method'])>10){?>
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['log_processing_method'],0,10,'utf-8');?>
…                                
                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['log_processing_method'];?>
  
                            <?php }?>
                        </td>
                        <!--
<td>                            
    <?php if ($_smarty_tpl->tpl_vars['v']->value['log_status']==1){?><img src="<?php echo @ADMIN_IMG_URL;?>
status1.png">
    <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_status']==2){?><img src="<?php echo @ADMIN_IMG_URL;?>
status2.png">
    <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_status']==3){?><img src="<?php echo @ADMIN_IMG_URL;?>
status3.png">
    <?php }?>
</td>
                        -->
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['log_result']==1){?><img src="<?php echo @ADMIN_IMG_URL;?>
status1.png">
                                <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_result']==2){?><img src="<?php echo @ADMIN_IMG_URL;?>
status2.png">
                                    <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_result']==3){?><img src="<?php echo @ADMIN_IMG_URL;?>
status3.png">
                                        <?php }?>
                                        </td>						
                                        <td>
                                            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = explode(",",$_smarty_tpl->tpl_vars['v']->value['log_deal_user']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                                            <span title="<?php echo $_smarty_tpl->tpl_vars['userInfot']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</span> 
                                            <?php } ?>
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