<?php /* Smarty version Smarty-3.1.6, created on 2017-11-07 10:31:52
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\article\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:300395a011b1855f061-13644756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a2ff94401a56b24842f4d3b55158e1fd78bcf4' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\article\\showlist.html',
      1 => 1510017705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300395a011b1855f061-13644756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'selectList' => 0,
    'vv' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a011b185d8e6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a011b185d8e6')) {function content_5a011b185d8e6($_smarty_tpl) {?><div class="col-xs-12">
    <div class="box">

        <div class="box-header" style="/*padding: 27px !important;*/">
            <button type="button" class="btn btn-success addItem"><i class="fa fa-plus"></i> 新增</button>
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="title" class="form-control pull-right"
                           placeholder="请输入文章标题" style="font-size: 14px">
                    <div class="input-group-btn" id="search" href="<?php echo @__MODULE__;?>
/article/showlist">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="box-body table-responsive no-padding" id="contentinfo">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>所属类别</th>
                    <th>内容描述</th>
                    <th>排序号</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                    <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'],'utf-8'))>20){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,20,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?></td>
                    <td>
                        <span class="badge bg-green" style="font-size: 14px">
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selectList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['vv']->value['category_id']==$_smarty_tpl->tpl_vars['v']->value['category_id']){?><?php echo ltrim($_smarty_tpl->tpl_vars['vv']->value['category_name'],"&nbsp;");?>
 <?php }?>
                        <?php } ?>
                        </span>
                    </td>
                    <td title="<?php echo mb_substr(strip_tags($_smarty_tpl->tpl_vars['v']->value['discript'],'<p>'),0,200,'utf-8');?>
">
                        <?php echo mb_substr(strip_tags($_smarty_tpl->tpl_vars['v']->value['discript'],'<p>'),0,30,'utf-8');?>



                    </td>
                    <td><span class="badge bg-green"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['createtime'];?>
</td>
                    <td class="manager">
                        <button class="btn btn-success btn-flat btn-sm detail" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">详情
                        </button>
                        <button class="btn bg-maroon btn-flat btn-sm addItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑
                        </button>
                        <button class="btn btn-danger btn-flat btn-sm deleteItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除
                        </button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="admin-table-page">
                <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

            </div>
        </div>
    </div>
</div>

<script>
    $(function () {

        //保持搜索条件
        var searArr = JSON.parse(localStorage.getItem('searArr'));
        $.each(searArr, function (index, item) {
            $("input[name='" + index + "']").val(item);
        });

        //详情
        $('.detail').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            layer.open({
                type: 2,
                title: '页面详情',
                shadeClose: true,
                shade: 0.8,
                area: ['64%', '90%'],
                content: "../article/detail/id/" + itemID
            });
        });

        //点击新增、编辑
        $('.addItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                localStorage.setItem('address', '../article/add/id/' + itemID);//子页面地址
                $('#content').load("../article/add/id/" + itemID);
                return false;
            }
            localStorage.setItem('address', '../article/add');//子页面地址
            $('#content').load("../article/add");
        })

        //点击删除
        $('.deleteItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                var url = '../article/del';
                var dataArr = {
                    "id": itemID,
                }
                layer.confirm('您确定要删除id为' + itemID + '的数据？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    $.ajax({
                        url: url,
                        type: "post",
                        dataType: "json",
                        data: dataArr,
                        success: function (returnJSON) {
                            //console.log(returnJSON);
                            if (returnJSON.status == true) {
                                layer.msg(returnJSON.msg, {
                                    icon: 1,
                                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                                }, function () {
                                    localStorage.setItem('address', '../article/showlist');//保存当前地址,避免刷新跳转
                                    $('#content').load('../article/showlist');
                                });
                            } else {
                                layer.msg(returnJSON.msg);
                            }
                        }
                    });
                });
                return false;
            }
        })

    });
</script><?php }} ?>