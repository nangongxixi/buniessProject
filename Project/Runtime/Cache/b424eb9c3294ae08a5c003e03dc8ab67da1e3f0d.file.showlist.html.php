<?php /* Smarty version Smarty-3.1.6, created on 2017-10-31 16:52:36
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Admin/View\category\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:770459f8349b84d7f6-07950903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b424eb9c3294ae08a5c003e03dc8ab67da1e3f0d' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Admin/View\\category\\showlist.html',
      1 => 1509439785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770459f8349b84d7f6-07950903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f8349b88fe8',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f8349b88fe8')) {function content_59f8349b88fe8($_smarty_tpl) {?><div class="col-xs-12">
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



<?php }} ?>