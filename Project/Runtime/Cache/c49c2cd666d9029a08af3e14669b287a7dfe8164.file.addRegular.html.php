<?php /* Smarty version Smarty-3.1.6, created on 2016-11-16 15:16:40
         compiled from "D:/wamp/www/yunwei/Admin/View\Server\addRegular.html" */ ?>
<?php /*%%SmartyHeaderCode:25359581ad370943571-65763814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49c2cd666d9029a08af3e14669b287a7dfe8164' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Server\\addRegular.html',
      1 => 1479280579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25359581ad370943571-65763814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad370e4308',
  'variables' => 
  array (
    'plog' => 0,
    'v' => 0,
    'zlog' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad370e4308')) {function content_581ad370e4308($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel='icon' href='<?php echo @ADMIN_IMG_URL;?>
bitbug_favicon.ico' type=‘image/x-ico’ />
        <title>四川智美高科科技有限公司 - 运维工作管理系统 - 填写日志</title>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
        <link href="<?php echo @ADMIN_CSS_URL;?>
regular/normalize.css" rel="stylesheet"/>
        <link href="<?php echo @ADMIN_CSS_URL;?>
regular/jquery-ui.css" rel="stylesheet"/>
        <link href="<?php echo @ADMIN_CSS_URL;?>
regular/jquery.idealforms.min.css" rel="stylesheet" media="screen"/>
        <script src="<?php echo @ADMIN_CSS_URL;?>
jeDate/jedate.js"></script>
        
        <style type="text/css">
            body{font:normal 15px/1.5 Arial, Helvetica, Free Sans, sans-serif;color: #222;background:url(/public/Admin/img/pattern.png);overflow-y:scroll;padding:30px 0 0 0;}
            #my-form{width:755px;margin:0 auto;border:1px solid #ccc;padding:3em;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.2);}
            #comments{width:350px;height:100px;}
        </style>
        

    </head>
    <body>
        <div class="row">
            <div class="eightcol last">
                <p style="text-align: center"><img src="/public/Admin/img/log.png"></p>
                <!-- Begin Form -->
                <form id="my-form" action="<?php echo @__SELF__;?>
" method="post">                    
                    <section name="请【<?php echo $_SESSION['mg_realname'];?>
】填写日志">
                        <div><label>项目名称:</label>
                            <select id="log_name" name="log_name">
                                <option value="default">——— 选择项目名称 ———</option>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['list_id'];?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['list_name'];?>
<br />                                                    
                                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['list_id']==$_smarty_tpl->tpl_vars['vv']->value['list_pid']){?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['vv']->value['list_id'];?>
' class="l">&nbsp;&nbsp;&nbsp;├ <?php echo $_smarty_tpl->tpl_vars['vv']->value['list_name'];?>
</option>
                                <?php }?>                                                        
                                <?php } ?>                                                    
                                </option>
                                <?php } ?>
                            </select>
                        </div> 
                       
                        <div><label>报告人电话:</label><input type="tel" name="log_phone" data-ideal="required phone"/></div>
                        <div><label>事件详细描述：</label><textarea id="log_describe" name="log_describe" data-ideal="required"></textarea></div>
                    </section>

                    <div><hr/></div>

                    <div>
                        <button type="submit">提交</button>
                        <!--<button id="reset" type="button">重置</button>-->
                    </div>
                    <div style="float:right; margin-top: 15px"><a href="logout" style="color:#ccc"> Logout >></a></div>

                </form>
                <!-- End Form -->
            </div>
        </div>

        <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
regular/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
regular/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
regular/jquery.idealforms.js"></script>
        
        <script type="text/javascript">

          
            var options = {
                onFail: function () {
                    alert('有' + $myform.getInvalid().length + '个项目填写不正确！')
                },
                inputs: {                   
                    'log_describe': {
                        filters: 'required min max',
                        data: {min: 10, max: 140}
                    },
                    'log_name': {
                        filters: 'exclude',
                        data: {exclude: ['default']},
                        errors: {
                            exclude: '必须选择项目名称.'
                        }
                    }
                }

            };

            var $myform = $('#my-form').idealforms(options).data('idealforms');

            $('#reset').click(function () {
                $myform.reset().fresh().focusFirst()
            });

            $myform.focusFirst();
        </script>
        
    </body>
</html><?php }} ?>