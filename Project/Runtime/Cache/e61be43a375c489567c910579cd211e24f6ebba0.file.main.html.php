<?php /* Smarty version Smarty-3.1.6, created on 2017-11-07 13:34:34
         compiled from "D:/phpStudy/WWW/buniessProject/Project/Home/View\index\main.html" */ ?>
<?php /*%%SmartyHeaderCode:123995a0142755eb3a2-95025325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61be43a375c489567c910579cd211e24f6ebba0' => 
    array (
      0 => 'D:/phpStudy/WWW/buniessProject/Project/Home/View\\index\\main.html',
      1 => 1510032869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123995a0142755eb3a2-95025325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0142756e53e',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0142756e53e')) {function content_5a0142756e53e($_smarty_tpl) {?><span id="index">
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


<script>

    $(function () {
        //贷款项目 默认显示
        $('.lo_ul li:first-child').addClass('cur');
        $('.alConts').eq(0).show();

        //贷款攻略第一条
        var dkglOne = $('.ntot').eq(0);
        firstInfo(dkglOne);
        //资讯中心第一条
        var zxzxOne = $('.ntot').eq(1);
        firstInfo(zxzxOne);

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
                            sessionStorage.clear();
                            location.reload();
                            parent.layer.close(index);
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
                layer.msg($(formVal[0]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                },function(){
                    //alert(dd);
                    parent.layer.close(index);
                });
                return false;
            }

            //姓名
            if ($(formVal[1]).val() == '') {
                layer.msg($(formVal[1]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                },function(){
                    //alert(dd);
                    parent.layer.close(index);
                });
                return false;
            }

            //电话
            if ($(formVal[2]).val() == '' || !$(formVal[2]).val().match(/^1\d{10}$/g)) {
                layer.msg($(formVal[2]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                },function(){
                    //alert(dd);
                    parent.layer.close(index);
                });
                return false;
            }
            return true;
        }


        //第一条信息
        function firstInfo(Obj) {
            var coverImg = Obj.find('li:first-child a').attr('imgurl');
            var title = Obj.find('li:first-child a').html();
            var discript = Obj.find('li:first-child a').attr('discript');

            Obj.find('.one img').attr('src', '../../' + coverImg);
            Obj.find('.one h5 a').html(title);
            Obj.find('.one p').html(discript);
            Obj.find('li:first-child').remove();
        }
    });


</script>
<?php }} ?>