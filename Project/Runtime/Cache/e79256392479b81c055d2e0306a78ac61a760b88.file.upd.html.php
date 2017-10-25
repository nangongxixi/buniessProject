<?php /* Smarty version Smarty-3.1.6, created on 2017-09-15 14:28:45
         compiled from "D:/wamp/www/yunwei/Admin/View\Server\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:21263581b07bf079069-35124988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79256392479b81c055d2e0306a78ac61a760b88' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Server\\upd.html',
      1 => 1505356144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21263581b07bf079069-35124988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581b07bf76037',
  'variables' => 
  array (
    '_GET' => 0,
    'plog' => 0,
    'dealUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b07bf76037')) {function content_581b07bf76037($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>更新日志</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
            <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
                <script src="<?php echo @ADMIN_CSS_URL;?>
jeDate/jedate.js"></script>
                <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
                </head>
                <body>
                    <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：服务器日志 -> 更新日志</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Server/showlist">【返回】</a>
                            </span>
                        </span>
                    </div>
                    <div></div>

                    <div style="font-size: 13px;margin: 10px 5px">
                        <input type="hidden" name="log_id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['log_id'];?>
">
                        <form action="<?php echo @__SELF__;?>
" method="post" onsubmit="return check();">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td width="12%" style="padding-left:30px">严重级别：</td>
                                    <td style="padding-left:30px">
                                        <input type="radio" name="log_level" value="1" class="log_level" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==1||!$_smarty_tpl->tpl_vars['plog']->value['log_level']){?>checked="checked"<?php }?> />I级
                                        <input type="radio" name="log_level" value="2" class="log_level" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==2){?>checked="checked"<?php }?> />II级
                                        <input type="radio" name="log_level" value="3" class="log_level" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==3){?>checked="checked"<?php }?> />III级
                                        <input type="radio" name="log_level" value="4" class="log_level" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==4){?>checked="checked"<?php }?> />IV级 
                                               <span class="log_level_msg" style="color:red"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left:30px">事件类型：</td>
                                    <td style="padding-left:30px">                                                                 
                                        <select name='log_type' style="width:15%" class="log_type">
                                            <option value=''>——请选择——</option>
                                            <option value='1' <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_type']==1){?>selected="selected"<?php }?>>软件故障</option>
                                            <option value='2' <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_type']==2){?>selected="selected"<?php }?>>硬件故障</option>
                                            <option value='3' <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_type']==3){?>selected="selected"<?php }?>>彩打没墨</option>
                                            <option value='4' <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_type']==4){?>selected="selected"<?php }?>>其他故障</option>
                                        </select>										
                                        <span class="log_type_msg" style="color:red"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left:30px">首次响应时间：</td>
                                    <td style="padding-left:30px"><input type="text" name="log_first_response_time" value="<?php echo $_smarty_tpl->tpl_vars['plog']->value['log_first_response_time'];?>
" class="datainp" id="dateinfo1" type="text" placeholder="请选择时间"  readonly style="width:15%">
                                    <span class="log_first_response_time_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-left:30px">处理完成时间：</td>
                                    <td style="padding-left:30px"><input type="text" name="log_completion_time" value="<?php echo $_smarty_tpl->tpl_vars['plog']->value['log_completion_time'];?>
" class="datainp" id="dateinfo2" type="text" placeholder="请选择时间"  readonly style="width:15%">
                                    <span class="log_completion_time_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-left:30px">处理方法及步骤：</td>
                                    <td style="padding-left:30px">
                                        <textarea name="log_processing_method" style="width:20%; height:100px" class="log_processing_method"><?php echo $_smarty_tpl->tpl_vars['plog']->value['log_processing_method'];?>
</textarea>                                    
                                        <span class="log_processing_method_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-left:30px">处理状态：</td>
                                    <td style="padding-left:30px">                           
                                        <input type="radio" name="log_result" value="1" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==1){?>checked<?php }?>/>未处理 &nbsp;&nbsp;&nbsp;&nbsp;
                                        <!--<input type="radio" name="log_result" value="2" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==2){?>checked<?php }?>/>处理中-->
                                        <input type="radio" name="log_result" value="3" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==3){?>checked<?php }?>/>已处理
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-left:30px">处理人：</td>
                                    <td style="padding-left:30px">
                                        
                                        <input type="checkbox" name="log_deal_user[]" value="2" class="log_deal_user" <?php if (in_array(2,$_smarty_tpl->tpl_vars['dealUser']->value)){?>checked<?php }?>/>黄平
                                        <input type="checkbox" name="log_deal_user[]" value="34" class="log_deal_user" <?php if (in_array(34,$_smarty_tpl->tpl_vars['dealUser']->value)){?>checked<?php }?>/>林万琴
                                        <span class="log_deal_user_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center" style="padding-left:110px">
                                        <input type="submit" id="add" value="提交">
                                            <input type="reset" value="重填">
                                                </td>
                                                </tr>  
                                                </table>
                                                </form>
                                                </div>                  

                                                <script type="text/javascript">
                                                    //jeDate.skin('gray');                                                  
                                                    jeDate({
                                                        dateCell: "#dateinfo1",
                                                        format: "YYYY-MM-DD hh:mm:ss",
                                                        isinitVal: false,
                                                        isTime: true, //isClear:false,
                                                        minDate: "2014-09-19 00:00:00"
                                                    })
                                                    jeDate({
                                                        dateCell: "#dateinfo2",
                                                        format: "YYYY-MM-DD hh:mm:ss",
                                                        isinitVal: false,
                                                        isTime: true, //isClear:false,
                                                        minDate: "2014-09-19 00:00:00"
                                                    })

                                                    function check() { 
                                                        var log_processing_method = $(".log_processing_method").val();
                                                        var log_type = $(".log_type option:selected").val();
                                                        var log_first_response_time = $("#dateinfo1").val();
                                                        var log_completion_time = $("#dateinfo2").val();
                                                        
                                                        //var log_deal_user = $(".log_deal_user").attr("checked");
                                                        if (!log_type) {
                                                            $(".log_type_msg").html("请选择事件类型");
                                                            return false;
                                                        } else {
                                                            $(".log_type_msg").html("");
                                                        }
                                                        
                                                        if (!log_first_response_time) {                                                            
                                                            $(".log_first_response_time_msg").html("请选择首次响应时间");
                                                            return false;
                                                        } else {
                                                            $(".log_first_response_time_msg").html("");
                                                        }
                                                        
                                                        if (!log_completion_time) {                                                           
                                                            $(".log_completion_time_msg").html("请选择处理完成时间");
                                                            return false;
                                                        } else {
                                                            $(".log_completion_time_msg").html("");
                                                        }
                                                        
                                                        if (!log_processing_method) {
                                                            $(".log_processing_method_msg").html("请填写处理方法及步骤");
                                                            return false;
                                                        } else {
                                                            $(".log_processing_method_msg").html("");
                                                        }

                                                        //获取复选框的值
                                                        log_deal_user = $(".log_deal_user:checked").map(function (index, elem) {
                                                            return $(elem).val();
                                                        }).get().join(',');
                                                        //判断值的存在
                                                        if (!log_deal_user) {
                                                            $(".log_deal_user_msg").html("请选择处理人");
                                                            return false;
                                                        } else {
                                                            $(".log_deal_user_msg").html("");
                                                        }
                                                    }

                                                </script>
                                                </body>
                                                </html>

<?php }} ?>