<?php /* Smarty version Smarty-3.1.6, created on 2017-11-09 16:57:29
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:33705a0268eeeeb946-24137944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dad774b95543d6d7c41475878874b3c87f1694' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\Index\\index.html',
      1 => 1510217844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33705a0268eeeeb946-24137944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0268ef254f6',
  'variables' => 
  array (
    'articleList' => 0,
    'v' => 0,
    'customer' => 0,
    'caseList' => 0,
    'amount' => 0,
    'dkglList' => 0,
    'zxzxList' => 0,
    'askList' => 0,
    'links' => 0,
    'footNav' => 0,
    'k' => 0,
    'vv' => 0,
    'footInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0268ef254f6')) {function content_5a0268ef254f6($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0050)http://cd.moerlong.com/?urlCode=wxoct4&fromSite=bd -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script>window.BasicDomain = ".moerlong.com";</script>

    <title>四川米袋金融服务外包有限公司</title>
    <meta content="四川米袋金融服务外包有限公司" name="keywords">
    <meta content="四川米袋金融服务外包有限公司" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta HTTP-EQUIV="Page-Enter" CONTENT="revealtrans(duration=6.0, transition=23)">

    <meta HTTP-EQUIV="Page-Exit" CONTENT="revealtrans(duration=6.0, transition=23)">

    <link rel="icon" href="<?php echo @IMG_URL;?>
bitbug_favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
edai-global.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
edai-index.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
alifont/iconfont.css">

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
yd-index.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
yd-Common.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
yd-reset.css">

    <!-- ./wrapper -->
    <script src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
    <!--banner-->
    <script src="<?php echo @JS_URL;?>
unslider.min.js"></script>
    <!--客服-->
    <script src="<?php echo @JS_URL;?>
yd-ScrollPic.js" type="text/javascript"></script>
    <!-- 问答 -->
    <script src="<?php echo @JS_URL;?>
yd-MSClass.js" type="text/javascript"></script>
    <!-- layer -->
    <script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>


</head>
<body>

<div class="top">
    <div class="wrap">
        <ul>
            <li class="fl" style="display: inline-block;padding-top: 5px; position: relative;top:5px">您好！欢迎来到米袋金融!</li>
            <li class="fr">
                <span style=" display: inline-block; padding-top: 2px">
                    <span class="iconfont icon-dianhua" style="font-size: 22px;position: relative;top:3px"></span>欢迎拨打咨询热线：
                </span>
                <span style="font-size: 22px; color:#fe6c00; display: inline-block;position: relative;top:3px">18080889915</span>
            </li>
        </ul>
    </div>
</div>
<!-- 头部 -->
<div class="header">
    <div class="wrap">
        <h1 class="logo fl">
            <img src="<?php echo @IMG_URL;?>
log.png" style="margin-top:-3px; width: 350px"><i class="logo-border"></i>
        </h1>
        <div class="nav fr">
            <a href="javascript:;" class="nav-on">首页</a>
            <a href="javascript:;">车贷</a>
            <a href="javascript:;">房贷</a>
            <a href="javascript:;">信用贷</a>
            <a href="javascript:;">保单贷</a>
            <a href="javascript:;">成功案例</a>
            <a href="javascript:;" class="mr0">关于我们</a>
        </div>
    </div>
</div>
<span id="index" style="min-height: 500px">
<!-- 切换 -->
<div class="banner" id="b03">
    <ul>
        <li><img src="<?php echo @IMG_URL;?>
01.jpg" style="max-width:100%;overflow:hidden;" alt="" height="430"
                 border="0"></li>

        <li><img src="<?php echo @IMG_URL;?>
02.jpg" style="max-width:100%;overflow:hidden;" alt="" height="430"
                 border="0"></li>
        <li><img src="<?php echo @IMG_URL;?>
02.jpg" style="max-width:100%;overflow:hidden;" alt="" height="430"
                 border="0"></li>
    </ul>
</div>
<div style="position: relative; width: 1200px; margin: 0 auto">
    <div style=" position:absolute; background-image: url(<?php echo @IMG_URL;?>
applybg.png); width: 330px; height: 290px;top:-360px; right:0"
         class="apply">
        <div class="content">
            <h3 style="margin:30px 0 25px 0; font-size: 24px; color: #fff; text-align: center; letter-spacing: 3px">
                申请贷款</h3>
            <form enctype="multipart/form-data" id="formData" class="applyForm" method="POST"
                  target="_blank">
                <div class="sum">
                    <span class="input_title">贷款金额： </span>
                    <input onkeyup="this.value=this.value.replace(/[^0-9|\.^]/g,'');"
                           onafterpaste="this.value=this.value.replace(/\D/g,'');" maxlength="5"
                           placeholder="贷款金额(单位：万元)" name="amount" type="text" errorMsg="金额格式为：X或者X.X或者X.XX"
                           accept="number" autocomplete="off"
                           value="">
                </div>
                <div class="name clearfix">
                    <span class="input_title">您的姓名： </span>
                    <input type="text" maxlength="10" placeholder="请输入姓名" errorMsg="姓名不能为空" name="name"
                           autocomplete="off" value="">
                </div>

                <div class="tel">
                    <span class="input_title">手机号码： </span>
                    <input type="text" maxlength="11" name="phone"
                           onkeyup="this.value=this.value.replace(/[^0-9|\.^]/g,'');"
                           onafterpaste="this.value=this.value.replace(/\D/g,'');" placeholder="输入手机号" accept="number"
                           autocomplete="off" value="" errorMsg="手机号为1开始的11位纯数字">
                </div>
                <input type="button" id="submit" class="btn_apply but_submit" value="立即申请"
                       style="margin: 10px 25px 0">
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (e) {
        $('#b03').unslider({
            dots: true
        });
    });
</script>

    <!-- 主体 -->
<div class="main">
    <div class="container">

        <div class="dkpt container">

            <div class="dkpt_l">
                <div class="dkpt_l_t">
                    <h4 style="font-weight: bold">
                        打造西南地区最快捷的贷款定制平台</h4>
                    <span>高效•快捷•安全</span></div>
                <div class="dkpt_l_o">
                    <ul class="lo_ul">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li class=""><a class="a3" href="#">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="alConts" style="display: none;">

                        <div class="lotot">

                            <?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>

                            <div class="anniu">
                                <span class="s"><a href="#" target="_blank">我要贷款</a></span><span><a
                                    href="#">了解详情</a></span>
                            </div>
                        </div>

                    </div>
                    <?php } ?>


                </div>
            </div>
            <script type="text/javascript">

                $('.dkpt_l_o ul li').mouseover(function () {
                    $(this).addClass("cur").siblings().removeClass("cur");
                    $(".dkpt_l_o .alConts").eq($('.dkpt_l_o ul li').index(this)).show().siblings(".alConts").hide();
                });
            </script>


            <div class="dkpt_r">
                <div class="dkpt_r_t">
                    <h4>
                        <a href="#">
                            信贷经理</a></h4>
                </div>
                <ul id="tuand" style="width: 258px; overflow: hidden;">
                    <div style="overflow: hidden; zoom: 1">
                        <div style="float: left;">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <li>
                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">
                                    <img alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" _src="../../<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" width="258"
                                         height="239" src="../../<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
"></a>
                                <h5>
                                    <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h5>
                                <a target="_blank"
                                   href="http://www16.53kf.com/webCompany.php?arg=10161753&amp;style=1&amp;language=cn&amp;charset=GBK&amp;kflist=off&amp;kf=&amp;zdkf_type=1&amp;referer=http%3A%2F%2Fwww.scmidai.com%2F&amp;keyword=&amp;tfrom=1&amp;tpl=crystal_blue&amp;uid=9469d95cc13f1e69b1a27b8527c440bf&amp;timeStamp=1502931683656&amp;ucust_id="
                                   class="ljzx">立即咨询</a>
                            </li>
                            <?php } ?>
                        </div>
                    </div>
                </ul>
                <a href="javascript:" class="l" id="tleft"></a><a href="javascript:" class="r" id="tright"></a>
            </div>
            <script language="javascript" type="text/javascript">

                var scrollPic_02 = new ScrollPic();
                scrollPic_02.scrollContId = "tuand"; // 内容容器ID
                scrollPic_02.arrLeftId = "tleft"; //左箭头ID
                scrollPic_02.arrRightId = "tright"; //右箭头ID
                scrollPic_02.frameWidth = 258; //显示框宽度
                scrollPic_02.pageWidth = 258; //翻页宽度
                scrollPic_02.speed = 8; //移动速度(单位毫秒，越小越快)
                scrollPic_02.space = 5; //每次移动像素(单位px，越大越快)
                scrollPic_02.autoPlay = true; //自动播放
                scrollPic_02.autoPlayTime = 4; //自动播放间隔时间(秒)

                scrollPic_02.initialize(); //初始化

            </script>
            <div class="clear">
            </div>
        </div>

        <div class="sqlc">
            <div class="sq_l">
                <a href="#"
                   target="_blank">
                    <img _src="<?php echo @IMG_URL;?>
sqlc_07.png"
                         src="<?php echo @IMG_URL;?>
sqlc_07.png"></a></div>
            <div class="sq_r">
                <p class="p1">
                    米袋金融</p>
                <p class="p2">
                    西南地区最快捷的贷款定制平台</p>
                <p class="p3">
                    5年来，我们已经为客户解决了</p>
                <p class="p4">
                    758,654,876</p>
                <p class="p5">
                    的资金问题</p>
            </div>
            <div class="clear">
            </div>
        </div>


        <div class="jg">
            <div class="jgtit">
                <img src="<?php echo @IMG_URL;?>
ys.jpg">
            </div>
        </div>


        <div class="ys container">
            <div class="ystit ">
                <em>西南地区最快捷的贷款定制平台</em>
                <h4><span>成功案例</span>，他们通过米袋金融成功贷款</h4>
            </div>
            <hr width="1120" style="border:1px solid #ff8900;"/>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['caseList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li>
                    <a href="#">
                    <span> <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" width="60" height="60"></span>
                    <h5 style="border-bottom:1px dotted #d2d2d2;"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h5>
                    <p><?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['discript'],'utf-8'))>320){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['discript'],0,320,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
<?php }?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>


        <div class="ggw">
            <img src="<?php echo @IMG_URL;?>
ggw.jpg">
        </div>


        <div class="gl">
            <a href="#"
               target="_blank">
                <img src="<?php echo @IMG_URL;?>
gl.jpg"></a></div>


        <div class="jg">
            <div class="jgtit">
                <h4>
                    感谢以下机构为<span style="font-size: 18px; color: #ff8900; font-weight: bold">米袋金融提供资金支持</span></h4>
                <em>Thanks to the following organizations to provide financial support for the Express
                    Loan</em>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['amount']->value[0]['content'];?>

        </div>


        <div class="newscenter">


            <div class="lr">
                <div class="ntit">
                    <h4>
                        <a target="_blank" href="#">
                            贷款攻略</a><span>/Loan Raiders</span></h4>
                    <a href="#">
                        <img src="<?php echo @IMG_URL;?>
more_03.png"></a></div>
                <div class="ntot">

                    <div class="one">
                        <a href="#">
                            <img src="<?php echo @IMG_URL;?>
20160124205149_67478.jpg" width="111" height="111"></a>
                        <h5><a href="#">暂无...</a></h5>
                        <p>暂无...</p>
                    </div>

                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dkglList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li>
                            <h5>
                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" imgurl="<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
"
                                   discript="<?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['discript'],'utf-8'))>50){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['discript'],0,50,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
<?php }?>">
                                    <?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'],'utf-8'))>20){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,20,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?>
                                </a></h5>
                        </li>
                        <?php } ?>


                    </ul>
                </div>
            </div>


            <div class="lc">
                <div class="ntit">
                    <h4><a href="#">资讯中心</a><span>/Information Center</span></h4>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
more_03.png"></a>
                </div>
                <div class="ntot">
                    <div class="one">
                        <a href="#"><img src="<?php echo @IMG_URL;?>
20170327192616_26378.jpg" width="111" height="111"></a>
                        <h5><a href="#">暂无...</a></h5>
                        <p>暂无...</p>
                    </div>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zxzxList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li>
                            <h5>
                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" imgurl="<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
"
                                   discript="<?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['discript'],'utf-8'))>50){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['discript'],0,50,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
<?php }?>">
                                    <?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'],'utf-8'))>20){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,20,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?>
                                </a></h5>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <div class="ntit">
                    <h4><a href="#">常见问题</a><span>/Frequently Asked Questions</span></h4>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
more_03.png"></a>
                </div>
                <div class="faqtot">
                    <div class="search">
                        <input type="text" name="" id="seachkeywords" class="txt">
                        <a href="javascript:" onclick="xuanze()"><img src="<?php echo @IMG_URL;?>
search_06.png"></a>
                    </div>
                    <dl id="dingdan" style="overflow: hidden; width: 349px; height: 308px;">
                        <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                            <tbody>
                            <tr>
                                <td>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['askList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</dd>
                                    <?php } ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </dl>
                </div>
            </div>
            <script type="text/javascript">

                new Marquee("dingdan", 0, 1, 349, 308, 40, 0, 1000, 22);
            </script>
        </div>
        <div class="link container"><?php echo $_smarty_tpl->tpl_vars['links']->value[0]['content'];?>
</div>

    </div>
</div>
</span>

<div class="footer">
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


<script>
    $(function () {

        var homeSite = sessionStorage.getItem('homeSite');
        var homeIndex = sessionStorage.getItem('homeIndex');

        if (homeSite) {
            $('#index').load(homeSite);//默认加载首页
        } else {
            $('#index').load('/index.php/Home/index/main');//默认加载首页
        }
        $('.nav a').eq(homeIndex).addClass('nav-on').siblings().removeClass();//加载保存的样式

        //导航
        $('.nav a').click(function () {
            $('#index').html("");
            $(this).addClass('nav-on').siblings().removeClass();
            var index = $(this).index();
            if (index == 1) {
                $url = '/index.php/Home/Car/index/catid/3/catname/车贷'; //车贷
            } else if (index == 2) {
                $url = '/index.php/Home/Car/index/catid/4/catname/房贷'; //房贷
            } else if (index == 3) {
                $url = '/index.php/Home/Car/index/catid/5/catname/信用贷';//信用贷
            } else if (index == 4) {
                $url = '/index.php/Home/Car/index/catid/6/catname/保单贷';//保单贷
            } else if (index == 5) {
                $url = '/index.php/Home/Case/index/catid/9';//成功案例
            } else if (index == 6) {
                $url = '/index.php/Home/About/index/catid/11';//关于我们
            } else {
                $url = '/index.php/Home/index/main';
            }
            $('#index').load($url);
            sessionStorage.setItem('homeSite', $url);
            sessionStorage.setItem('homeIndex', index);
        })

        //子页面
        $(document).on('click','#myscrollbox li',function(){
            $('#index').load('/index.php/Home/Car/detail');
        });


    });
</script>

</body>
</html><?php }} ?>