<?php /* Smarty version Smarty-3.1.6, created on 2017-11-01 13:28:05
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1675859f83c351844f6-36652529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15dd393c66ff39650bd278f66ae121dd9a1357e8' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\category\\add.html',
      1 => 1509514081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675859f83c351844f6-36652529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f83c352823a',
  'variables' => 
  array (
    'categoryDetail' => 0,
    'categoryinfo' => 0,
    'k' => 0,
    'parentDetail' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f83c352823a')) {function content_59f83c352823a($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\buniessProject\\Firame\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!--图片上传-->
<link rel="stylesheet" href="<?php echo @STATIC_URL;?>
upImage/zyupload/skins/zyupload-1.0.0.min.css " type="text/css">
<script type="text/javascript" src="<?php echo @STATIC_URL;?>
upImage/zyupload/zyupload.basic-1.0.0.min.js"></script>

<div class="col-xs-12">
    <div class="box">
        <div class="box-body">
            <form method="post" enctype="multipart/form-data" id="formData">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th class="detail-title">分类名称</th>
                        <td>
                            <div>
                                <input type="hidden" name="id" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_id'];?>
">
                                <input type="text" name="category_name" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_name'];?>
"
                                       errorMsg="分类名称不能为空"
                                       placeholder="请填写分类名称">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">分类父级</th>
                        <td>
                            <div>
                                <select class="form-control" name="category_pid">
                                    <option value="">—— 请选择 ——</option>
                                   <!-- <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categoryinfo']->value),$_smarty_tpl);?>
-->
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoryinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['parentDetail']->value['category_id']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                        <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">排序</th>
                        <td>
                            <div>
                                <input type="text" name="category_sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_sort'];?>
"
                                       placeholder="请填写排序">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="reset" class="btn bg-orange btn-lg " status="0">重置
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" id="submit" class="btn btn-success btn-lg subform">提交</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>


<script>
    $(function () {

        init();//初始化


        //提交表单
        $('#submit').unbind('click').click(function () {

            //数据验证
            if (!validata()) {
                return false;
            }

            //判断是否有选择上传文件
            var formData = new FormData($("#formData")[0]);
            $.ajax({
                url: '../category/add',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (returnJSON) {
                    if (returnJSON.status) {
                        layer.msg(returnJSON.msg, {
                            icon: 1,
                            time: 2000
                        }, function () {
                            sessionStorage.clear();
                            localStorage.setItem('address', '../category/showlist');//保存当前地址,避免刷新跳转
                            $('#content').load('../category/showlist');
                        });
                    } else {
                        layer.msg(returnJSON.msg, {
                            icon: 2,
                            time: 2000
                        });
                    }
                }
            });
        });

        //数据验证
        function validata() {
            var formVal = $('form input,textarea');

            //标题
            if ($(formVal[1]).val() == '') {
                layer.msg($(formVal[1]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                });
                return false;
            }
            return true;

        }

        //初始化需要运行的东西
        function init() {
            var inputVal = JSON.parse(sessionStorage.getItem("inputVal"));
            //如果还没保存过输入，就定义一个空对象来保存
            if (inputVal == null) {
                var inputVal = {};
            }
            //回填输入
            $.each(inputVal, function (index, item) {
                $(document).find('input[name="' + index + '"],textarea[name="' + index + '"]').val(item);
            });
            //保存输入
            $('form input,textarea').keyup(function () {
                var name = $(this).attr('name');
                var val = $(this).val();
                inputVal[name] = val;
                sessionStorage.setItem('inputVal', JSON.stringify(inputVal));
            });
        }

    });
</script>
<?php }} ?>