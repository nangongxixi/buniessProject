<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 14:06:12
         compiled from "D:/wamp/www/yunwei/Admin/View\Problem\example.html" */ ?>
<?php /*%%SmartyHeaderCode:28834581ad3d4159767-78231191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc9cbd3b51f8e8f2fb49c24b891e44b4c1a1517' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Problem\\example.html',
      1 => 1478075341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28834581ad3d4159767-78231191',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad3d43bad6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad3d43bad6')) {function content_581ad3d43bad6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>四川智美高科科技有限公司服务器运行状态图</title>
            <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
    </head>
    <body> 
        <br>
            <div id="main" style="height:400px;border:0px solid #ccc;margin:0 auto; width:92% "></div>
            <script src="<?php echo @ADMIN_JS_URL;?>
echarts-all.js"></script>
            
            <script type="text/javascript">

                var myChart = echarts.init(document.getElementById('main'), 'shine');
                myChart.setOption({
                    title: {
                        'text': '四川智美高科科技有限公司服务器运行状态图',
                        'subtext': '数据来自四川智美高科科技有限公司服务器'
                    },
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {// 坐标轴指示器，坐标轴触发有效
                            type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                        }
                    },
                    legend: {
                        data: ['正常运行', '主动维护', '故障维护']
                    },
                    grid: {
                        left: '3%',
                        right: '4%',
                        bottom: '3%',
                        containLabel: true
                    },
                    xAxis: {
                        type: 'value',
                        min: 0,
                        max: 86400,
                        splitNumber: 12,
                        axisLabel: {
                            show: true,
                            formatter: function (value)
                            {
                                var relVal = "";
                                relVal += value / 3600 + ":00";
                                return relVal;
                            }
                        }
                    },
                    yAxis: {
                        type: 'category',
                        data: ['鼠标 ', '其他  -  微博 ', '掉包 ', '高新  -  微博 ', '云服务 ', '微博 ', '武侯  -  乐政 ']
                    },
                    series: 
                        (function () {
                            var arr = [];
                            $.ajax({
                                type: "POST",
                                async: false, //同步执行
                                url: "/yunwei/index.php/Admin/Problem/getData",
                                dataType: "json", //返回数据形式为json
                                success: function (result) {                                    
                                    if (result) {
                                        for (var i = 0; i < result.length; i++) {
                                            console.log(result[i]);
                                            arr.push(result[i]);
                                        }
                                    }
                                },
                                error: function (errorMsg) {
                                    alert("sorry，请求数据失败");
                                    myChart.hideLoading();
                                }
                            })                            
                            return arr;
                        })()
                });
            </script>
            
    </body>
</html>
<?php }} ?>