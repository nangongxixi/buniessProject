<?php /* Smarty version Smarty-3.1.6, created on 2017-11-14 16:01:28
         compiled from "D:/phpStudy/WWW/buniessProject/Home/View\Car\index.html" */ ?>
<?php /*%%SmartyHeaderCode:136515a0a7c3d46ac11-75468092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0b00e753556f6fff9126e723d0c3dbf8d0ff0b' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Home/View\\Car\\index.html',
      1 => 1510646486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136515a0a7c3d46ac11-75468092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0a7c3d52191',
  'variables' => 
  array (
    'other' => 0,
    'v' => 0,
    'catname' => 0,
    'carList' => 0,
    'customer' => 0,
    'askList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0a7c3d52191')) {function content_5a0a7c3d52191($_smarty_tpl) {?><link href="<?php echo @CSS_URL;?>
zzsc.css" rel="stylesheet" type="text/css">

<!--图片滚动-->
<link href="<?php echo @CSS_URL;?>
owl.carousel.css" rel="stylesheet" media="all"/>
<link href="<?php echo @CSS_URL;?>
owl.theme.css" rel="stylesheet" media="all"/>
<script type="text/javascript" src="<?php echo @JS_URL;?>
owl.carousel.min.js"></script>

<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .scroll-outer {
        height: 421px
    }

    #scroll {
        width: 1080px;
        margin: 0 auto;
        padding-top: 30px;
        font-family: "Microsoft Yahei";
    }

    #scroll .owl-wrapper-outer {
        margin: 0 auto;
    }

    #scroll .item {
        position: relative;
        width: 250px;
        height: 380px;
        margin: 0 auto;
        background-color: #fff;
        overflow: hidden;
        text-align: center
    }

    #scroll .shd {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(188, 188, 188, 0.15);
    }

    #scroll .shd a {
        display: block;
        width: 250px;
        height: 239px;
        *background-image: url(about:blank);
        background-image: url(about:blank) \0;
    }

    #scroll .txt {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 226px;
        height: 132px;
        padding: 0 12px;
        color: #888;
        box-shadow: 0 0 15px 15px rgba(245, 246, 246, 0.95);
        background-color: #e4e9ee \9;
        background-color: rgba(248, 249, 249, 0.95);
    }

    #scroll h3 {
        width: 226px;
        height: 25px;
        margin-bottom: 6px;
        padding-top: 7px;
        font: 18px/25px arial, "Microsoft Yahei";
        overflow: hidden;
    }

    #scroll h3 a {
        color: #333;
        text-decoration: none;
    }

    #scroll h3 a:hover {
        color: #338de6;
    }

    #scroll p {
        width: 226px;
        height: 54px;
        line-height: 18px;
        font-size: 12px;
    }

    #scroll .item:hover .shd {
        background-color: rgba(0, 0, 0, 0);
    }

    #scroll .item:hover .txt {
        background-color: #fff \9;
        background-color: rgba(248, 249, 249, 0.95);
        box-shadow: 0 0 15px 15px rgba(248, 249, 249, 0.95);
    }

    .owl-theme .owl-controls .owl-buttons div {
        position: absolute;
        top: 180px;
        width: 30px;
        height: 60px;
        margin: 0;
        padding: 0;
        border-radius: 0;
        font: 60px/60px "宋体";
        background-color: transparent;
        overflow: hidden;
        _display: none;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev {
        left: -40px;
    }

    .owl-theme .owl-controls .owl-buttons .owl-next {
        right: -40px;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev:before {
        content: "<";
        color: #333
    }

    .owl-theme .owl-controls .owl-buttons .owl-next:before {
        content: ">";
        color: #333
    }
</style>
<script type="text/javascript">
    $(function () {
        $('#scroll').owlCarousel({
            items: 4,
            autoPlay: true,
            navigation: true,
            navigationText: ["", ""],
            scrollPerPage: true
        });
    });
</script>



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
" style="max-width:100%;overflow:hidden; height: 455px" alt=""
                 border="0"></li>
        <?php } ?>
    </ul>
</div>
<div class="main" style="padding-top: 0 !important;  background-color: #fff!important;">

    <div class="container">
        <div class="nei">
            <div class="nav">
                <span class="ico"></span>
                <span class="tit"><?php echo $_smarty_tpl->tpl_vars['catname']->value;?>
</span>
            </div>
            <div id="myscroll">
                <div id="myscrollbox">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li detailId="<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
">
                            <a href="javascript:;">
                                <img src="../../<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" width="380" height="240">
                                <span class="intro">
                                    <h5 class="yous-tit">产品优势</h5>
                                    <div class="youshi" style="min-height: 100px">
                                       <?php echo $_smarty_tpl->tpl_vars['v']->value['advantage'];?>

                                        <span class="ask">立即咨询</span>
                                    </div>
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="pro-introbox">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <div class="pro-intro">
                    <span style="font-size: 18px; line-height: 40px"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span>
                    <br><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="nei-liuc">
        <div class="nei nei-liuc">
            <div class="nav ">
                <span class="ico"></span>
                <span class="tit nei-liuc">申请流程</span>
            </div>
            <div class="liuc-img">
                <img src="../../<?php echo $_smarty_tpl->tpl_vars['other']->value['liucImg'][0]['img_url'];?>
">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nei">
            <img src="../../<?php echo $_smarty_tpl->tpl_vars['other']->value['middImg'][0]['img_url'];?>
" width="1200" height="150">
        </div>
    </div>
    <!-- 相册滚动 -->
    <div class="container">
        <div class="nei">
            <div class="nav">
                <span class="ico"></span>
                <span class="tit">贷款顾问</span>
            </div>
            <div class="scroll-outer">
                <div id="scroll" class="owl-carousel">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="item">
                        <img src="../../<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" alt="" width="220" height="250" style="margin-top: 15px">
                        <div class="shd">
                            <a target="_blank" href="http://www16.53kf.com/webCompany.php?arg=10161753&amp;style=1&amp;language=cn&amp;charset=GBK&amp;kflist=off&amp;kf=&amp;zdkf_type=1&amp;referer=http%3A%2F%2Fwww.scmidai.com%2F&amp;keyword=&amp;tfrom=1&amp;tpl=crystal_blue&amp;uid=9469d95cc13f1e69b1a27b8527c440bf&amp;timeStamp=1502931683656&amp;ucust_id="></a></div>
                        <div class="txt">
                            <h3><a href="http://www16.53kf.com/webCompany.php?arg=10161753&amp;style=1&amp;language=cn&amp;charset=GBK&amp;kflist=off&amp;kf=&amp;zdkf_type=1&amp;referer=http%3A%2F%2Fwww.scmidai.com%2F&amp;keyword=&amp;tfrom=1&amp;tpl=crystal_blue&amp;uid=9469d95cc13f1e69b1a27b8527c440bf&amp;timeStamp=1502931683656&amp;ucust_id="><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
                            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
</span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>


    <div class="nei-liuc">
        <div class="nei nei-liuc">
            <div class="nav">
                <span class="ico"></span>
                <span class="tit nei-liuc">常见问题</span>
            </div>
            <div class="newscenter">
                <div class="faq"
                     style="width:1200px; height: auto; margin: 0 auto; float: none !important; border: 0 !important;">
                    <div class="faqtot" style="padding: 0">
                        <dl id="dingdan" style="overflow: hidden;  height: 308px;">
                            <table cellspacing="0" cellpadding="0"
                                   style="border-collapse:collapse; width:1200px !important; background-color: #f5f6f6">
                                <tbody>
                                <tr>
                                    <td style="background-color: #fff;">
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['askList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></dt>
                                        <dd style="border-bottom: 0px"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</dd>
                                        <hr size="15" color="#f5f6f6"
                                            style="position: relative;left: -15px; width: 1300px">
                                        <?php } ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </dl>
                    </div>
                </div>
                <script type="text/javascript">
                    new Marquee("dingdan", 0, 1, 1200, 308, 40, 0, 1000, 22);
                </script>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready(function (e) {
        $('#b03').unslider({
            dots: true
        });
        //打开咨询窗口
        $('.ask').click(function () {
            window.open("http://www16.53kf.com/webCompany.php?arg=10161753&amp;style=1&amp;language=cn&amp;charset=GBK&amp;kflist=off&amp;kf=&amp;zdkf_type=1&amp;referer=http%3A%2F%2Fwww.scmidai.com%2F&amp;keyword=&amp;tfrom=1&amp;tpl=crystal_blue&amp;uid=9469d95cc13f1e69b1a27b8527c440bf&amp;timeStamp=1502931683656&amp;ucust_id=");
        });
    });
</script><?php }} ?>