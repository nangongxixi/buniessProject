<?php /* Smarty version Smarty-3.1.6, created on 2016-10-27 21:38:56
         compiled from "E:/wamp/www/yunwei/Admin/View\Problem\hchats.html" */ ?>
<?php /*%%SmartyHeaderCode:2665758120370bf6975-89920651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96817a95c0f4fcb2e866dfd11b214de901f31309' => 
    array (
      0 => 'E:/wamp/www/yunwei/Admin/View\\Problem\\hchats.html',
      1 => 1477540665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2665758120370bf6975-89920651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5812037134bda',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812037134bda')) {function content_5812037134bda($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>智美高科服务器运行状态图</title>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.3.min.js"></script>
<!--${demo.css}-->
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'columnrange',
                inverted: true
            },
            title: {
                text: '智 美 高 科 服 务 器 运 行 状 态 图'
            },
            subtitle: {
                text: '三种运行状态'
            },
            xAxis: {
                categories: ['运行状态', '通电状态'] //任务名称
            },
            yAxis: {
                type: "datetime",
                title: {
                    text: '时'
                },
                dateTimeLabelFormats:
                        {
                            //day : '%m-%d'
                            hour: '%H'

                                    /* second: '%H:%M:%S',
                                     minute: '%e. %b %H:%M',
                                     hour: '%b/%e %H:%M',
                                     day: '%e日/%b',
                                     week: '%e. %b',
                                     month: '%b %y',
                                     year: '%Y'  */
                        },
                tickInterval: 24 * 3600 * 1000
            },
            plotOptions: {
                columnrange: {
                    grouping: false
                }
            },
            tooltip: {
                formatter: function () {
                    return this.series.name;
                    /* return this.x + "<br>" + this.series.name + "<br>" + "日期：" +
                     Highcharts.dateFormat('%Y-%m-%e', this.point.low) + " ~ " +
                     Highcharts.dateFormat('%Y-%m-%e', this.point.high);*/
                }
            },
            legend: {
                enabled: true
            },
            series: [
                {
                    name: 'RUN',
                    data: [[10, Date.UTC(1), Date.UTC(2015, 9, 15)], [10, Date.UTC(2015, 9, 17), Date.UTC(2015, 9, 18)], [10, Date.UTC(2015, 9, 21), Date.UTC(2015, 9, 31)]]
                },
                {
                    name: 'WAIT',
                    data: [[10, Date.UTC(2015, 9, 16), Date.UTC(2015, 9, 17)], [10, Date.UTC(2015, 9, 19), Date.UTC(2015, 9, 21)]]
                },
                {
                    name: 'ALARM',
                    data: [[10, Date.UTC(2015, 9, 15), Date.UTC(2015, 9, 16)], [10, Date.UTC(2015, 9, 31), Date.UTC(2015, 10, 2)]]
                }
            ]
        });
    });
</script>
</head>
<body>
    <script src="<?php echo @ADMIN_JS_URL;?>
highcharts.js"></script>
    <script src="<?php echo @ADMIN_JS_URL;?>
highcharts-more.js"></script>
    <script src="<?php echo @ADMIN_JS_URL;?>
modules/exporting.js"></script>
    <br/>
    <div id="container" style="min-width: 310px; max-width: 95%; height: 400px; margin: 0 auto"></div>
</body>
</html>
<?php }} ?>