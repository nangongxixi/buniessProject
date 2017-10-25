<?php /* Smarty version Smarty-3.1.6, created on 2017-10-25 14:45:39
         compiled from "D:/phpStudy/WWW/BusinessProject/yunwei/Admin/View\Manager\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2007059e99b79ad1ed1-65291440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3e1de82f3c555302a1fd7b1a1594b232ee99325' => 
    array (
      0 => 'D:/phpStudy/WWW/BusinessProject/yunwei/Admin/View\\Manager\\add.html',
      1 => 1508913864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007059e99b79ad1ed1-65291440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59e99b79b7217',
  'variables' => 
  array (
    'info' => 0,
    'rinfo' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e99b79b7217')) {function content_59e99b79b7217($_smarty_tpl) {?><style>
    .detail-title {
        width: 100px
    }

    .file {
        position: relative;
        height: 100px;
        filter: alpha(opacity:0);
        opacity: 0;
        width: 100px
    }

    #localImag {
        position: absolute
    }

</style>

<div class="col-xs-12">
    <div class="box">
        <div class="box-body">
            <form  method="post" enctype="multipart/form-data" id="formData">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th class="detail-title">头像</th>
                        <td>
                            <div class="site-demo-upload">
                                <img id="LAY_demo_upload" src="">
                                <div class="site-demo-upbar">
                                    <div id="localImag">
                                        <img id="preview" src="<?php echo @ADMIN_IMG_URL;?>
upimg.png" width="100"
                                             height="100" style="display: block">
                                    </div>
                                    <input type="file" name="mg_img" id="upload_img"
                                           onchange="javascript:setImagePreview();" class="file">
                                </div>
                            </div>
                    </tr>
                    <tr>
                        <th class="detail-title">管理员帐号</th>
                        <td>
                            <div>
                                <input type="hidden" name="mg_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_id'];?>
">
                                <input type="text" name="mg_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
"
                                       placeholder="请填写管理员帐号">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">真实姓名</th>
                        <td>
                            <div>
                                <input type="text" name="mg_real_name" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_real_name'];?>
"
                                       id="inputSuccess" placeholder="请填写姓名">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">密码</th>
                        <td>
                            <div>
                                <input type="text" name="mg_pwd" class="form-control" value=""
                                       id="inputSuccess" placeholder="请填写密码">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">手机号</th>
                        <td>
                            <div>
                                <input type="text" name="mg_tel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_tel'];?>
"
                                       maxlength="11" id="inputSuccess"
                                       placeholder="请填写手机号">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>角色</th>
                        <td>
                            <div>
                                <select class="form-control" name="mg_role_id">
                                    <option value="">—— 请选择 ——</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['info']->value['mg_role_id']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <!--
                    <tr>
                        <th>性别</th>
                        <td>
                            <div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="optionsRadios" id=""
                                               value="0" checked="">
                                        男
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="optionsRadios" id=""
                                               value="1">
                                        女
                                    </label>
                                </div>

                            </div>
                        </td>
                    </tr>
                    -->
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="reset" class="btn bg-orange btn-lg subform" status="0">重置
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" id="submit" class="btn btn-success btn-lg subform">提交</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<literal>
<script>


    $(function(){
        $('form button[type=submit]').unbind('click').click(function () {

            //todo 数据验证

            //判断是否有选择上传文件
            var formData = new FormData($( "#formData" )[0]);
            $.ajax({
                url: '../Manager/add',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (returnJSON) {
                    layer.alert(returnJSON.msg, {
                        icon: 1,
                        time:2000,
                        skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
                    })

                },
                error: function (returnJSON) {
                    alert(returnJSON);
                }
            });
        });
    });


    /*
     layer.msg(returnJSON.msg, {
                        icon: 1,
                        time: 2000
                    }, function () {
                        alert(66);
                        localStorage.setItem('address', '../Manager/showlist');//保存当前地址,避免刷新跳转
                        $('#content').load('../Manager/showlist');
                    });
    * */

    //下面用于图片上传预览功能
    function setImagePreview(avalue) {
        var docObj = document.getElementById("upload_img");
        var imgObjPreview = document.getElementById("preview");
        if (docObj.files && docObj.files[0]) {
//火狐下，直接设img属性
            imgObjPreview.style.display = 'block';
            imgObjPreview.style.width = '100px';
            imgObjPreview.style.height = '100px';
//imgObjPreview.src = docObj.files[0].getAsDataURL();

//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
            imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
        } else {
//IE下，使用滤镜
            docObj.select();
            var imgSrc = document.selection.createRange().text;
            var localImagId = document.getElementById("localImag");
//必须设置初始大小
            localImagId.style.width = "100px";
            localImagId.style.height = "100px";
//图片异常的捕捉，防止用户修改后缀来伪造图片
            try {
                localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
            } catch (e) {
                alert("您上传的图片格式不正确，请重新选择!");
                return false;
            }
            imgObjPreview.style.display = 'none';
            document.selection.empty();
        }
        return true;
    }

</script>

    </literal><?php }} ?>