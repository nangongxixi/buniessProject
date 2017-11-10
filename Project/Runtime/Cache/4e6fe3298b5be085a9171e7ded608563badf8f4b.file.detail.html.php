<?php /* Smarty version Smarty-3.1.6, created on 2017-11-10 12:12:41
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\Car\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:189295a04187966bc19-73097349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e6fe3298b5be085a9171e7ded608563badf8f4b' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\Car\\detail.html',
      1 => 1510287160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189295a04187966bc19-73097349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a04187972b2c',
  'variables' => 
  array (
    'other' => 0,
    'v' => 0,
    'info' => 0,
    'askList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a04187972b2c')) {function content_5a04187972b2c($_smarty_tpl) {?><link href="<?php echo @CSS_URL;?>
zzsc.css" rel="stylesheet" type="text/css">

<!--图片滚动-->
<link href="<?php echo @CSS_URL;?>
owl.carousel.css" rel="stylesheet" media="all"/>
<link href="<?php echo @CSS_URL;?>
owl.theme.css" rel="stylesheet" media="all"/>
<script type="text/javascript" src="<?php echo @JS_URL;?>
owl.carousel.min.js"></script>

<style>
    .nei-liuc{
        background-color: #fff !important;
        width: 835px !important;
    }
    .dkpt .dkpt_l{
        height: auto;
    }
    .dkpt_l{
        margin-bottom: 20px;
    }
    .name,.tel,.sum{
        width: 230px !important;
    }
    input[type="text"]{
        background-color: #f6f6f6;
        width: 230px !important;
    }
</style>





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


<!--
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
-->


<div class="main">
    <div class="container">
        <div class="dkpt container">

            <div class="dkpt_l" style="border:0px">
                <div class="dkpt_l_t">
                    <span style="float: none; font-size: 20px" id="title"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</span>
                </div>
                <div id="content" style="margin-top: 15px">
                    <div style="line-height: 200%; margin-bottom: 60px"><?php echo $_smarty_tpl->tpl_vars['info']->value['detail'];?>
</div>
                    <div class="clear"> </div>
                    <div class="nei-liuc" >
                        <div class="nei nei-liuc">
                            <div class="nav">
                                <span class="ico"></span>
                                <span class="tit nei-liuc">常见问题</span>
                            </div>
                            <div class="newscenter">
                                <div class="faq"
                                     style="width:835px; height: auto; float: none !important; border: 0 !important;">
                                    <div class="faqtot" style="padding: 0">
                                        <dl id="dingdan" style="overflow: hidden;  height: 308px;">
                                            <table cellspacing="0" cellpadding="0"
                                                   style="border-collapse:collapse; width:835px !important">
                                                <tbody>
                                                <tr>
                                                    <td style="background-color: #fff">
                                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['askList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></dt>
                                                        <dd style="border-bottom: 1px dotted #c3c3c3"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</dd>
                                                       <!-- <hr size="15" color="#f5f6f6"  style="position: relative;left: -15px; width: 1300px">-->
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </dl>
                                    </div>

                                </div>
                                <script type="text/javascript">
                                    new Marquee("dingdan", 0, 1, 835, 308, 40, 0, 1000, 22);
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>

            <div class="dkpt_r" style="border:0px; width: 258px !important; padding: 0">
                <div style="position: relative; margin: 0 auto">
                    <div style=" width: 230px; height: 290px;top:-360px; right:0; margin: 0 auto"
                         class="apply">
                        <div class="content">
                            <h3 style="margin:30px 0 15px 0; font-size: 24px; color: #333; text-align: center; letter-spacing: 3px">
                                申请贷款</h3>
                            <form enctype="multipart/form-data" id="formData" class="applyForm" method="POST" target="_blank">
                                <div class="sum">
                                    <input onkeyup="this.value=this.value.replace(/[^0-9|\.^]/g,'');"
                                           onafterpaste="this.value=this.value.replace(/\D/g,'');" maxlength="5"
                                           placeholder="贷款金额(单位：万元)" name="amount" type="text" errorMsg="金额格式为：X或者X.X或者X.XX"
                                           accept="number" autocomplete="off"
                                           value="">
                                </div>
                                <div class="name clearfix">
                                    <input type="text" maxlength="10" placeholder="请输入姓名" errorMsg="姓名不能为空" name="name"
                                           autocomplete="off" value="">
                                </div>

                                <div class="tel">
                                    <input type="text" maxlength="11" name="phone"
                                           onkeyup="this.value=this.value.replace(/[^0-9|\.^]/g,'');"
                                           onafterpaste="this.value=this.value.replace(/\D/g,'');" placeholder="输入手机号" accept="number"
                                           autocomplete="off" value="" errorMsg="手机号为1开始的11位纯数字">
                                </div>
                                <input type="button" id="submit" class="btn_apply but_submit" value="立即申请"
                                       style="width: 100% !important; background-color: #be1717">
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="clear"> </div>
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

        //数据提交
        $('#submit').unbind('click').click(function () {
            var index = layer.load(1, {
                shade: [0.1, '#fff'] //0.1透明度的白色背景
            });

            //数据验证
            if (!validata(index)) {
                return false;
            }

            var formData = new FormData($("#formData")[0]);
            $.ajax({
                url: 'wap/add',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (returnJSON) {
                    if (returnJSON.status) {
                        layer.msg(returnJSON.msg, {
                            icon: 1,
                            time: 2000
                        }, function () {
                            parent.layer.close(index);
                            location.reload();
                            // localStorage.setItem('address', '../article/showlist');//保存当前地址,避免刷新跳转
                            // $('#content').load('../article/showlist');
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

        //数据验证
        function validata(index) {
            var formVal = $('form input,textarea');
            //金额
            if ($(formVal[0]).val() == '' || !$(formVal[0]).val().match(/^\d+.?\d{0,2}$/g)) {
                parent.layer.close(index);
                layer.msg($(formVal[0]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                }, function () {
                    //alert(dd);

                });
                return false;
            }

            //姓名
            if ($(formVal[1]).val() == '') {
                parent.layer.close(index);
                layer.msg($(formVal[1]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                }, function () {
                    //alert(dd);
                });
                return false;
            }

            //电话
            if ($(formVal[2]).val() == '' || !$(formVal[2]).val().match(/^1\d{10}$/g)) {
                parent.layer.close(index);
                layer.msg($(formVal[2]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                }, function () {
                    //alert(dd);
                });
                return false;
            }
            return true;
        }

    });
</script>
<?php }} ?>