<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 10:40:50
         compiled from "D:/WWW/yunwei/Admin/View\Problem\hchats.html" */ ?>
<?php /*%%SmartyHeaderCode:206315811612c523860-98318866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49c685b1618a7e0e249bb75c1c454efd1e34a362' => 
    array (
      0 => 'D:/WWW/yunwei/Admin/View\\Problem\\hchats.html',
      1 => 1478140846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206315811612c523860-98318866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5811612c5eea8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811612c5eea8')) {function content_5811612c5eea8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

    var myChart = echarts.init(document.getElementById('main'),'shine');
    myChart.setOption({
        
        title : {  
            'text':'四川智美高科科技有限公司服务器运行状态图',  
            'subtext':'数据来自四川智美高科科技有限公司服务器'  
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data: ['正常运行', '主动维护','故障维护']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis:  {
            type: 'value',
            min:0,
            max:86400,
            splitNumber:12,
            axisLabel:{ 
                show: true,
                formatter:function(value)
                                {
                                var relVal ="";                               
                                relVal += value/3600+":00";
                                return relVal;
                                }
            }
        },
        yAxis: {
            type: 'category',
            data: ['鼠标 ','其他  -  微博 ','掉包 ','高新  -  微博 ','云服务 ','微博 ','武侯  -  乐政 ']
        },        
        series: [            
            { name: '正常运行', type: 'bar', stack: '总量', itemStyle: { normal: { color: 'green'} }, data: [80000, 40000, 20, 0, 0, 230, 300] },
            { name: '主动维护', type: 'bar', stack: '总量', itemStyle: { normal: { color: 'orange'} }, data: [1000, 6000, 1000, 1000, 1000, 1000, 1000] },
            { name: '故障维护', type: 'bar', stack: '总量', itemStyle: { normal: { color: 'red'} }, data: [200, 400, 30, 0, 50, 330, 300] },
            { name: '正常运行', type: 'bar', stack: '总量', itemStyle: { normal: { color: 'green'} }, data: [5200, 40000, 800, 0, 200, 230, 42100] }            
        ]
    });
    </script>
    </body>
</html>
<?php }} ?>