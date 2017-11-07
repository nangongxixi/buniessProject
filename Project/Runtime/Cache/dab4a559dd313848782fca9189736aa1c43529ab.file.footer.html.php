<?php /* Smarty version Smarty-3.1.6, created on 2017-11-07 12:22:02
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\common\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:67445a0134ea738343-52112741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dab4a559dd313848782fca9189736aa1c43529ab' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\common\\footer.html',
      1 => 1510028521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67445a0134ea738343-52112741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footNav' => 0,
    'k' => 0,
    'v' => 0,
    'vv' => 0,
    'footInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0134ea7a1ad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0134ea7a1ad')) {function content_5a0134ea7a1ad($_smarty_tpl) {?><div class="footer">
    <div class="ft">
        <div class="container footer-bg">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['footNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <ul class="footer-nav1">
                <li class="footer-navtit"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</li>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['vv']->value['category_name'];?>
</li>
                <?php } ?>
            </ul>
            <?php } ?>
            <ul class="footer-nav">
                <li class="footer-navtit">扫码关注</li>
                <li><img src="<?php echo @IMG_URL;?>
ewm.jpg"></li>
            </ul>
            <ul class="footer-nav">
                <li class="footer-navtit">客服电话</li>
                <li><img src="<?php echo @IMG_URL;?>
tel.jpg"></li>
            </ul>
        </div>

    </div>
    <div class="fb">
        <div class="container" style="text-align: center; line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['footInfo']->value[0]['content'];?>
</div>
    </div>
</div>

<div class="freecall" style="display: block;">
    <div class="wrap">
        <div class="fl">
            <i class="tel24"></i>贷款热线：<b>180-8088-9915</b>
        </div>
        <form method="" action="" class="fr">
            <input class="tel24-num" type="text" placeholder="请输入电话号码" maxlength="11"
                   onkeyup="callback.replaceNoNum(this);"
                   onfocus="callback.focusMsg(this); $(this).blur(function(){callback.blurMsg(this)})">
            <input class="btn-freecall" id="huibo_tonglan" type="button" value="免费通话"
                   onclick="callback.call(this, '18080889915');">
        </form>
    </div>
</div>

</body>
</html><?php }} ?>