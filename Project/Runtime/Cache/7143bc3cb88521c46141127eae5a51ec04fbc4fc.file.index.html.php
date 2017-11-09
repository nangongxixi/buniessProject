<?php /* Smarty version Smarty-3.1.6, created on 2017-11-09 16:48:30
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\About\index.html" */ ?>
<?php /*%%SmartyHeaderCode:121915a02b82a164824-42406428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7143bc3cb88521c46141127eae5a51ec04fbc4fc' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\About\\index.html',
      1 => 1510217300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121915a02b82a164824-42406428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a02b82a1be5b',
  'variables' => 
  array (
    'other' => 0,
    'v' => 0,
    'aboutList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02b82a1be5b')) {function content_5a02b82a1be5b($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo @CSS_URL;?>
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
 $_from = $_smarty_tpl->tpl_vars['aboutList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <li>
                                <p class="about-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                            </li>
                            <li style="display: none"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dkpt_l" style="float: right;border:0px; margin-bottom: 30px">

                <div class="nei" style="padding: 0">
                    <div class="nav ">
                        <span class="ico"></span>
                        <span style="float: none; font-size: 18px;padding-left:18px;color:#333" id="title">高效•快捷•安全</span>
                    </div>
                </div>
                <div id="content" style="margin-top: 4px">暂无…</div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div id="map" style="background-color: #f3f3f3; display: none">
            <iframe id="content_frame" width="100%" height="430" scrolling="no" src="http://www.yunwei.com/index.php/Home/about/map" frameborder="0"></iframe>
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

        $('.list li').eq(sessionStorage.getItem('about-index')).find('p').css('border-bottom','2px solid #ac6a00');
        //点击左侧菜单的时候
        $('.list li').click(function(){
            $(this).find('p').css('border-bottom','2px solid #ac6a00');
            $(this).siblings().find('.about-title').css('border-bottom','2px solid #dcdcdc')

            $('#title').html($(this).find('p').html());
            $('#content').html($(this).next().html());
            sessionStorage.setItem('about-tit',$(this).find('p').html());
            sessionStorage.setItem('about-con',$(this).next().html());
            sessionStorage.setItem('about-index',$(this).index());
        });

        //默认显示
        if(sessionStorage.getItem('about-tit')){
            $('#title').html(sessionStorage.getItem('about-tit'));
        }else{
            $('#title').html($('.list').find('li').eq(0).find('p').html());
        }
        if(sessionStorage.getItem('about-con')){
            $('#content').html(sessionStorage.getItem('about-con'));
        }else{
            $('#content').html($('.list').find('li').eq(1).html());
        }

        //地图
        $('.list .about-title:last').click(function(){
            $('#map').show();
        });
        $('.list .about-title:not(":last")').click(function(){
            $('#map').hide();
        });


    });
</script><?php }} ?>