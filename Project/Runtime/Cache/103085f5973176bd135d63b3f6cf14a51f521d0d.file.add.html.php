<?php /* Smarty version Smarty-3.1.6, created on 2016-10-24 21:52:21
         compiled from "E:/wamp/www/yunwei/Admin/View\Server\add.html" */ ?>
<?php /*%%SmartyHeaderCode:12434580a2fa36b8f80-82557626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103085f5973176bd135d63b3f6cf14a51f521d0d' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Server\\add.html',
      1 => 1477288155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12434580a2fa36b8f80-82557626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580a2fa42c92a',
  'variables' => 
  array (
    'plog' => 0,
    'v' => 0,
    'zlog' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580a2fa42c92a')) {function content_580a2fa42c92a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>填写日志</title>
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
                            <span style="float:left">当前位置是：服务器日志 -> 填写日志</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Server/showlist">【返回】</a>
                            </span>
                        </span>
                    </div>
                    <div></div>

                    <div style="font-size: 13px;margin: 10px 5px">            
                        <form action="<?php echo @__SELF__;?>
" method="post" onsubmit="return check();">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td width="15%">项目：</td>
                                    <td>
                                        <select name='log_name' class="log_name" style="width:20%" >
                                            <option value='' >——请选择——</option>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
' class="l">&nbsp;&nbsp;&nbsp;┝<?php echo $_smarty_tpl->tpl_vars['vv']->value['list_name'];?>
</option>
                                                <?php }?>                                                        
                                                <?php } ?>                                                    
                                            </option>
                                            <?php } ?>
                                        </select>
                                        <span class="log_name_msg" style="color:red"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>事件报告时间：</td>
                                    <td>
                                        <input type="text" name="log_reported_time" class="datainp" id="dateinfo" type="text" placeholder="请选择时间"  readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>严重级别：</td>
                                    <td>
                                        <input type="radio" name="log_level" value="1" checked="checked" />I级
                                        <input type="radio" name="log_level" value="2" />II级
                                        <input type="radio" name="log_level" value="3" />III级
                                        <input type="radio" name="log_level" value="4" />IV级                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>报告人：</td>
                                    <td>
                                        <input type="hidden" name="log_report_user" class="log_report_users" />
                                        <input type="text" class="log_report_user" onblur="tocheckname()" />
                                        <span style="color:red" class="log_report_user_msg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>事件类型：</td>
                                    <td>
                                        <select name='log_type' style="width:20%" class="log_type">
                                            <option value=''>——请选择——</option>
                                            <option value='1'>软件故障</option>
                                            <option value='2'>硬件故障</option>
                                            <option value='3'>彩打没墨</option>
                                            <option value='4'>其他故障</option>
                                        </select>										
                                        <span class="log_type_msg" style="color:red"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>事件详细描述：</td>
                                    <td>
                                        <textarea name="log_describe" style="width:20%; height:100px" class="log_describe"></textarea>                                    
                                        <span class="log_describe_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>首次响应时间：</td>
                                    <td><input type="text" name="log_first_response_time" class="datainp" id="dateinfo1" type="text" placeholder="请选择时间"  readonly>
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理完成时间：</td>
                                    <td><input type="text" name="log_completion_time" class="datainp" id="dateinfo2" type="text" placeholder="请选择时间"  readonly></td>
                                </tr>

                                <tr>
                                    <td>处理方法及步骤：</td>
                                    <td>
                                        <textarea name="log_processing_method" style="width:20%; height:100px" class="log_processing_method"></textarea>                                    
                                        <span class="log_processing_method_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理状态：</td>
                                    <td>
                                        <input type="radio" name="log_result" value="1" checked="checked" />未处理
                                        <input type="radio" name="log_result" value="2" />处理中
                                        <input type="radio" name="log_result" value="3" />已处理
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理人：</td>
                                    <td>                                     
                                        <input type="checkbox" name="log_deal_user[]" value="2" class="log_deal_user" />黄平
                                        <input type="checkbox" name="log_deal_user[]" value="3" class="log_deal_user" />吕膳兵
                                        <span class="log_deal_user_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center">
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
                                                        dateCell: "#dateinfo",
                                                        format: "YYYY-MM-DD hh:mm:ss",
                                                        isinitVal: true,
                                                        isTime: true, //isClear:false,
                                                        minDate: "2014-09-19 00:00:00"
                                                    })
                                                    jeDate({
                                                        dateCell: "#dateinfo1",
                                                        format: "YYYY-MM-DD hh:mm:ss",
                                                        isinitVal: true,
                                                        isTime: true, //isClear:false,
                                                        minDate: "2014-09-19 00:00:00"
                                                    })
                                                    jeDate({
                                                        dateCell: "#dateinfo2",
                                                        format: "YYYY-MM-DD hh:mm:ss",
                                                        isinitVal: true,
                                                        isTime: true, //isClear:false,
                                                        minDate: "2014-09-19 00:00:00"
                                                    })

                                                    function check() {
                                                        var log_name = $(".log_name option:selected").val();
                                                        var log_type = $(".log_type option:selected").val();
                                                        var log_describe = $(".log_describe").val();
                                                        var log_processing_method = $(".log_processing_method").val();
                                                        //var log_deal_user = $(".log_deal_user").attr("checked");
                                                        var user = jQuery.trim($(".log_report_users").val());

                                                        if (!log_name) {
                                                            $(".log_name_msg").html("请选择项目");
                                                            return false;
                                                        } else {
                                                            $(".log_name_msg").html("");
                                                        }

                                                        //获取隐藏域的值并判断
                                                        if (user != 1 || user != 0) {
                                                            $(".log_report_users").attr("value", user);
                                                            $(".log_report_user_msg").html("");
                                                        }
                                                        if (user == 1) {
                                                            $(".log_report_user_msg").html("");
                                                            $(".log_report_user_msg").html("不存在该用户");
                                                            return false;
                                                        }
                                                        if (user == 0) {
                                                            //alert(user);
                                                            $(".log_report_user_msg").html("用户不能为空");
                                                            return false;
                                                        }

                                                        if (!log_type) {
                                                            $(".log_type_msg").html("请选择事件类型");
                                                            return false;
                                                        } else {
                                                            $(".log_type_msg").html("");
                                                        }

                                                        if (!log_describe) {
                                                            $(".log_describe_msg").html("请填写事件详细描述");
                                                            return false;
                                                        } else {
                                                            $(".log_describe_msg").html("");
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

                                                    //给隐藏域赋值
                                                    function tocheckname()
                                                    {
                                                        var user = jQuery.trim($(".log_report_user").val());
                                                        $.ajax({
                                                            type: "GET",
                                                            url: "/yunwei/index.php/Admin/Server/checkUser/reportUser/" + user,
                                                            success: function (msg) {
                                                                $(".log_report_users").attr("value", msg);
                                                                if (msg != 1 || msg != 0) {                                                                   
                                                                    $(".log_report_user_msg").html("");
                                                                }
                                                                if (msg == 1) {                                                                   
                                                                    $(".log_report_user_msg").html("不存在该用户");                                                                   
                                                                }
                                                                if (msg == 0) {                                                                   
                                                                    $(".log_report_user_msg").html("用户不能为空");                                                                  
                                                                }
                                                            }
                                                        });
                                                    }

                                                </script>
                                                </body>
                                                </html>

<?php }} ?>