<?php /* Smarty version Smarty-3.1.6, created on 2017-10-31 17:04:30
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\Category\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:856259f83664890731-70454212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9015f3db7bf9c34d57cfa29bb4393204164982' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\Category\\showlist.html',
      1 => 1509440665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '856259f83664890731-70454212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f836648daac',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f836648daac')) {function content_59f836648daac($_smarty_tpl) {?><div class="col-xs-12">
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
                    <th>分类名称</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['category_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['createtime'];?>
</td>
                    <td class="manager">
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

        //点击新增、编辑
        $('.addItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                localStorage.setItem('address', '../category/add/id/' + itemID);//子页面地址
                $('#content').load("../category/add/id/" + itemID);
                return false;
            }
            localStorage.setItem('address', '../category/add');//子页面地址
            $('#content').load("../category/add");
        })

    });
</script><?php }} ?>