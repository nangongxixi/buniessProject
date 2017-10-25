<?php /* Smarty version Smarty-3.1.6, created on 2016-10-27 21:43:17
         compiled from "E:/wamp/www/yunwei/Admin/View\Server\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:17172580ac7e6e2a009-76432119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd498a5d149cc27d949a5ceaadb78c510703dfa34' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Server\\upd.html',
      1 => 1477545250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17172580ac7e6e2a009-76432119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_580ac7e7446c2',
  'variables' => 
  array (
    '_GET' => 0,
    'plog' => 0,
    'dealUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ac7e7446c2')) {function content_580ac7e7446c2($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                                    <td>严重级别：</td>
                                    <td>
                                        <input type="radio" name="log_level" value="1" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==1){?>checked="checked"<?php }?> />I级
                                        <input type="radio" name="log_level" value="2" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==2){?>checked="checked"<?php }?> />II级
                                        <input type="radio" name="log_level" value="3" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==3){?>checked="checked"<?php }?> />III级
                                        <input type="radio" name="log_level" value="4" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_level']==4){?>checked="checked"<?php }?> />IV级                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>事件类型：</td>
                                    <td>                                                                 
                                        <select name='log_type' style="width:20%" class="log_type">
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
                                    <td>首次响应时间：</td>
                                    <td><input type="text" name="log_first_response_time" value="<?php echo $_smarty_tpl->tpl_vars['plog']->value['log_first_response_time'];?>
" class="datainp" id="dateinfo1" type="text" placeholder="请选择时间"  readonly >
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理完成时间：</td>
                                    <td><input type="text" name="log_completion_time" value="<?php echo $_smarty_tpl->tpl_vars['plog']->value['log_completion_time'];?>
" class="datainp" id="dateinfo2" type="text" placeholder="请选择时间"  readonly ></td>
                                </tr>

                                <tr>
                                    <td>处理方法及步骤：</td>
                                    <td>
                                        <textarea name="log_processing_method" style="width:20%; height:100px" class="log_processing_method"><?php echo $_smarty_tpl->tpl_vars['plog']->value['log_processing_method'];?>
</textarea>                                    
                                        <span class="log_processing_method_msg" style="color:red"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理状态：</td>
                                    <td>                                      
                                        <input type="radio" name="log_result" value="1" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==1){?>checked<?php }?>/>未处理 
                                        <input type="radio" name="log_result" value="2" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==2){?>checked<?php }?>/>处理中
                                        <input type="radio" name="log_result" value="3" <?php if ($_smarty_tpl->tpl_vars['plog']->value['log_result']==3){?>checked<?php }?>/>已处理
                                    </td>
                                </tr>

                                <tr>
                                    <td>处理人：</td>
                                    <td> 
                                        
                                        <input type="checkbox" name="log_deal_user[]" value="2" class="log_deal_user" <?php if (in_array(2,$_smarty_tpl->tpl_vars['dealUser']->value)){?>checked<?php }?>/>黄平
                                        <input type="checkbox" name="log_deal_user[]" value="3" class="log_deal_user" <?php if (in_array(3,$_smarty_tpl->tpl_vars['dealUser']->value)){?>checked<?php }?>/>吕膳兵
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
                                                        var log_processing_method = $(".log_processing_method").val();
                                                        var log_type = $(".log_type option:selected").val();
                                                        //var log_deal_user = $(".log_deal_user").attr("checked");
                                                        
                                                        if (!log_type) {
                                                            $(".log_type_msg").html("请选择事件类型");
                                                            return false;
                                                        } else {
                                                            $(".log_type_msg").html("");
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