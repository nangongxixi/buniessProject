<?php /* Smarty version Smarty-3.1.6, created on 2017-10-26 17:25:06
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1519059f14757a33836-37972177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a3ccc445768961011a70130dd7a4d73add2a19' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\article\\add.html',
      1 => 1509009904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519059f14757a33836-37972177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f14757afea6',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f14757afea6')) {function content_59f14757afea6($_smarty_tpl) {?><!--图片上传-->
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
                        <th class="detail-title">封面图</th>
                        <td>
                            <span id="imgArr" style="display: none; ">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['imgArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" width="118" class="editImg"  height="118" style="display: block; float: left; margin-right: 8px;margin-top: 8px">
                            <?php } ?>
                            </span>
                            <div id="zyupload" class="zyupload"></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">标题</th>
                        <td>
                            <div>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
                                <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"
                                       placeholder="请填写标题">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">描述</th>
                        <td>
                            <textarea class="form-control" name="discript" rows="3"
                                      placeholder="请填写描述"><?php echo $_smarty_tpl->tpl_vars['info']->value['discript'];?>
</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">排序</th>
                        <td>
                            <div>
                                <input type="text" name="sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
"
                                       placeholder="请填写排序">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">内容</th>
                        <td>
                            <div>
                                <textarea id="TextArea1" name="content" cols="20" rows="2" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="reset" class="btn bg-orange btn-lg subform" status="0">重置
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
        var editor = CKEDITOR.replace('TextArea1', {
            filebrowserImageUploadUrl: '../manager/ck_upload'
        });
        // var editor = CKEDITOR.replace('TextArea1');//实例化富文本编辑框
        var content = $.parseHTML($('#TextArea1').html());//把html转换成实体
        editor.setData(content);//给富文本区域赋值

        $('#submit').unbind('click').click(function () {

            //todo 数据验证

            //判断是否有选择上传文件
            var formData = new FormData($("#formData")[0]);
            var editorcontent = editor.document.getBody().getHtml();//获取富文本编辑框的值
            formData.append('content', editorcontent);
            $.ajax({
                url: '../article/add',
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
                            localStorage.setItem('address', '../article/showlist');//保存当前地址,避免刷新跳转
                            $('#content').load('../article/showlist');
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
    });


    //限制图片上传张数
    $(".upimg_defau").on("click", function () {
        if ($(".imglist_img").length >= 4) {
            $(this).find("img").removeAttr("onclick");
        }
        if ($(".imglist_img").length >= 5) {
            layer.open({
                content: '最多只能上传5张图片',
                time: 1,
                shadeClose: true
            });
        }
        return false;
    });

    // 图片上传—>初始化插件
    $("#zyupload").zyUpload({
        width            :   "100%",                 // 宽度
        height           :   "100%",                 // 宽度
        itemWidth        :   "140px",                 // 文件项的宽度
        itemHeight       :   "115px",                 // 文件项的高度
        url              :   "../article/coverImg",   // 上传文件的路径
        fileType         :   ["jpg","png","js","exe"],// 上传文件的类型
        fileSize         :   51200000,                // 上传文件的大小
        multiple         :   true,                    // 是否可以多个文件上传
        dragDrop         :   false,                   // 是否可以拖动上传文件
        tailor           :   false,                   // 是否可以裁剪图片
        del              :   true,                    // 是否可以删除文件
        finishDel        :   false,  				  // 是否在上传文件完成后删除预览
        /* 外部获得的回调接口 */
        onSelect: function(selectFiles, allFiles){    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
            console.info("当前选择了以下文件：");
            console.info(selectFiles);
        },
        onDelete: function(file, files){              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
            console.info("当前删除了此文件：");
            console.info(file.name);
        },
        onSuccess: function(file, response){          // 文件上传成功的回调方法
            console.info("此文件上传成功：");
            console.info(file.name);
            console.info("此文件上传到服务器地址：");
            console.info(response);
            //$("#uploadInf").append("<p>上传成功，文件地址是：" + response + "</p>");
        },
        onFailure: function(file, response){          // 文件上传失败的回调方法
            console.info("此文件上传失败：");
            console.info(file.name);
        },
        onComplete: function(response){           	  // 上传完成的回调方法
            console.info("文件上传完成");
            console.info(response);
        }
    });

    //修改图片
    if($('#imgArr').html().length>0){
        $('#preview').prepend($('#imgArr').html());
    }
    $('.editImg').on('click',function(){
        var id=$('input[name="id"]').val();
        layer.open({
            type: 2,
            title: '编辑封面图片',
            shadeClose: true,
            shade: 0.8,
            area: ['500px', '90%'],
            content: '../article/editImg/id/'+id
        });
    });

</script>
<?php }} ?>