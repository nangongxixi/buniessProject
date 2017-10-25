<?php /* Smarty version Smarty-3.1.6, created on 2016-11-15 13:46:07
         compiled from "D:/wamp/www/yunwei/Admin/View\Problem\hchats.html" */ ?>
<?php /*%%SmartyHeaderCode:28572581ad3d7d6a8d8-12430258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7cb44f103e111762700cad8a2d6ea842fab447f' => 
    array (
      0 => 'D:/wamp/www/yunwei/Admin/View\\Problem\\hchats.html',
      1 => 1479188757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28572581ad3d7d6a8d8-12430258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad3d81038d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad3d81038d')) {function content_581ad3d81038d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>四川智美高科科技有限公司服务器运行状态图</title>
            <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
    </head>
    <body> 
        <br>
            <div id="main" style="height:710px;border:0px solid #ccc;margin:0 auto; width:92% "></div>
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
                            type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
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
                        data: (function () {
                            var arr = [];
                            $.ajax({
                                type: "POST",
                                async: false, //同步执行
                                url: "/index.php/Admin/Problem/getYAxis",
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
                    },
                    series: (function () {
                        var arr = [];
                        $.ajax({
                            type: "POST",
                            async: false, //同步执行
                            url: "/index.php/Admin/Problem/getData",
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