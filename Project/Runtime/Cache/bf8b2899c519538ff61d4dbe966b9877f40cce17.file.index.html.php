<?php /* Smarty version Smarty-3.1.6, created on 2017-11-08 17:10:08
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\Case\index.html" */ ?>
<?php /*%%SmartyHeaderCode:285045a02999b5c0316-12071771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8b2899c519538ff61d4dbe966b9877f40cce17' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\Case\\index.html',
      1 => 1510132201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285045a02999b5c0316-12071771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a02999b63561',
  'variables' => 
  array (
    'other' => 0,
    'v' => 0,
    'caseList' => 0,
    'k' => 0,
    'kk' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02999b63561')) {function content_5a02999b63561($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo @CSS_URL;?>
left-menu.css">
<script src="<?php echo @JS_URL;?>
left-menu.js"></script>

<style>
    .title span{
        color:#fff
    }
</style>

<div class="banner" id="b03">
    <ul style="background-color: #fbfbfb">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other']->value['bannerImg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li><img src="../../<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" style="max-width:100%;overflow:hidden;" alt=""
                 border="0"></li>
        <?php } ?>
    </ul>
</div>

<div class="main">
    <div class="container">
        <div class="dkpt container">
            <div class="dkpt_r" style="float: left;border:0px; width: 258px !important; padding: 0">
                <div class="content">
                    <!-- .list以下（包含.list）以下为本插件内容，需要的同学可复制里面部分即可。 -->
                    <div class="list">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['caseList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <li>
                                <p class="title"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</p>
                                <ul class='list-se'>
                                    <p class="title"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</p>
                                    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                                    <li><p><?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
</p></li>
                                    <li style="display: none"><p><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</p></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dkpt_l" style="float: right;border:0px">
                <div class="dkpt_l_t">
                    <span style="float: none; font-size: 20px" id="title">高效•快捷•安全</span>
                </div>
                <div id="content" style="margin-top: 15px">fsafsdafsdfds</div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function (e) {
        $('#b03').unslider({
            dots: true
        });

        $('.list ul li p').clickdown();
        $('.list-se p[class=title]').clickup();
        $('.list>ul>li').ad();


        $('#title').html(sessionStorage.getItem('nei-tit'));
        $('#content').html(sessionStorage.getItem('nei-con'));
        //点击左侧菜单的时候
        $('.list-se li').click(function(){
            $('#title').html($(this).find('p').html());
            $('#content').html($(this).next().html());
            sessionStorage.setItem('nei-tit',$(this).find('p').html());
            sessionStorage.setItem('nei-con',$(this).next().html());
        });

    });
</script><?php }} ?>