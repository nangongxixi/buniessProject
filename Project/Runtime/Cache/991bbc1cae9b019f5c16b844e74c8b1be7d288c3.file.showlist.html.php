<?php /* Smarty version Smarty-3.1.6, created on 2016-10-31 09:00:11
         compiled from "D:/WWW/yunwei/Admin/View\Server\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:212155806feca088c87-53267061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991bbc1cae9b019f5c16b844e74c8b1be7d288c3' => 
    array (
      0 => 'D:/WWW/yunwei/Admin/View\\Server\\showlist.html',
      1 => 1477875606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212155806feca088c87-53267061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5806feca1adc4',
  'variables' => 
  array (
    'totalTime' => 0,
    'pinfoo' => 0,
    'v' => 0,
    'zlog' => 0,
    'vv' => 0,
    'info' => 0,
    'pinfo' => 0,
    'userInfot' => 0,
    'userInfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806feca1adc4')) {function content_5806feca1adc4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>服务器日志列表</title>
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo @ADMIN_CSS_URL;?>
jeDate/jedate.js"></script>
        <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
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
              <form action="<?php echo @__MODULE__;?>
/Server/showlist" method="get">
					<span style="font-weight:bold"> 响应率：<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['totalTime']->value['total_round_time'];?>
</span> ,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<select name='totalTime_sel' >
						<option value='' >——请选择——</option>
						<option value='3' <?php if ($_SESSION['totalTime_sel']==3){?>selected="selected"<?php }?>>三天</option>
						<option value='7' <?php if ($_SESSION['totalTime_sel']==7){?>selected="selected"<?php }?>>一周</option>
						<option value='30' <?php if ($_SESSION['totalTime_sel']==30){?>selected="selected"<?php }?>>一个月</option>
					</select>
					
					的正常运行率：<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['totalTime']->value['zc'];?>
</span>						
					</span>
					&nbsp;&nbsp;&nbsp;&nbsp;〖 说明：正常运行率 = （当前时长-服务器故障总时长）/当前时长 〗
				  
				  
				  
				  <hr style="color:#ccc;width:99.5%">
				  
                    项目名称：
                    <select name='logListId' class="log_name" >
                        <option value='' >——请选择——</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pinfoo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['list_id'];?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
<br />                                                    
                            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['list_id']==$_smarty_tpl->tpl_vars['vv']->value['list_pid']){?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['vv']->value['list_id'];?>
' class="l" <?php if ($_smarty_tpl->tpl_vars['vv']->value['list_id']==$_SESSION['sear']['list_id'][1]){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;┝ <?php echo $_smarty_tpl->tpl_vars['vv']->value['list_name'];?>
</option>
                            <?php }?>                                                        
                            <?php } ?>                                                    
                        </option>
                        <?php } ?>
                    </select>
                    &nbsp;&nbsp;&nbsp;处理人：
                    <select name='deal_user'  class="log_type">
                        <option value=''>——请选择——</option>
                        <option value='2' <?php if ($_SESSION['sear']['log_deal_user'][1]==2){?>selected="selected"<?php }?>>黄平</option>
                        <option value='3' <?php if ($_SESSION['sear']['log_deal_user'][1]==3){?>selected="selected"<?php }?>>吕膳兵</option>                                           
                    </select>                    
                    &nbsp;&nbsp;&nbsp;报告时间：
                        <input type="text" name="log_start_time" value="<?php echo $_SESSION['sear']['log_start_time'];?>
" class="datainp" id="dateinfo1" placeholder="请选择时间"  readonly >
                      - <input type="text" name="log_end_time" value="<?php echo $_SESSION['sear']['log_end_time'];?>
" class="datainp" id="dateinfo2" placeholder="请选择时间"  readonly >
                    &nbsp;&nbsp;&nbsp;描述关键字：
                    <input type="text" name="descript" value="<?php echo $_SESSION['sear']['log_describe'][1];?>
" size=10/>
                        
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
                        <td>响应率</td>
                        <?php if ($_SESSION['mg_role']==1){?>
                        <td>操作</td>
                        <?php }?>
                    </tr>                   
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
</td>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['list_pid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?><?php echo $_smarty_tpl->tpl_vars['pinfo']->value[$_smarty_tpl->tpl_vars['v']->value['list_pid']];?>
<?php }?> - <?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
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
status3.png">
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_result']==2){?><img src="<?php echo @ADMIN_IMG_URL;?>
status2.png">
                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['log_result']==3){?><img src="<?php echo @ADMIN_IMG_URL;?>
status1.png">
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
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['round_time'];?>
</td>
                        
                        <?php if ($_SESSION['mg_role']==1){?>
                        <td>
                            <a href="<?php echo @__MODULE__;?>
/Server/upd/log_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
">修改</a> | 
                            <a class="del_log" href="<?php echo @__MODULE__;?>
/Server/del/log_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['log_id'];?>
">删除</a>
                        </td>
                        <?php }?>
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
            
            jeDate({
                dateCell: "#dateinfo1",
                format: "YYYY-MM-DD hh:mm:ss",
                //isinitVal: true,
                isTime: true, //isClear:false,
                minDate: "2014-09-19 00:00:00"
            })
            jeDate({
                dateCell: "#dateinfo2",
                format: "YYYY-MM-DD hh:mm:ss",
                //isinitVal: true,//默认选择当前系统时间
                isTime: true, //isClear:false,
                minDate: "2014-09-19 00:00:00"
            })
            
            $(".del_log").click(function () {
                if (confirm("您确认删除本条日志吗？")) {
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