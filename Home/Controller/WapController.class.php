<?php

namespace Home\Controller;

use Think\Controller;

//Controller父类：ThinkPHP/Library/Think/Controller.class.php

class WapController extends Controller
{

    function index()
    {
        $articles = D('Articles');
        $urlz = $_SERVER['HTTP_HOST'];
        //获取网页地址
        $url = $_SERVER['PHP_SELF'];
        $parm = substr($url, $url . length - 2, 2);//截取最后的'm2'或者'2/'
/*

        if ($parm == 'm3' || $parm == '3/') {
            $picList = $articles->where('category_id=42')->select();
        } else if ($parm == 'm4' || $parm == '4/') {
            $picList = $articles->where('category_id=43')->select();
        } else if ($parm == '11' || $parm == '1/') {
            $picList = $articles->where('category_id=44')->select();
        } else {
            $picList = $articles->where('category_id=41')->select();
        }
*/
        if ($urlz == 'm3.scmidai.com') {
            $picList = $articles->where('category_id=42')->select();
        } else if ($urlz == 'm4.scmidai.com') {
            $picList = $articles->where('category_id=43')->select();
        } else if ($parm == '11' || $parm == '1/') {
            $picList = $articles->where('category_id=44')->select();
        } else {
            $picList = $articles->where('category_id=41')->select();
        }

        /*
         * cnzz统计代码
         *
         * */
        if($urlz=='m2.scmidai.com'){
            //m2.scmidai.com
            $cnzz = '<script src="https://s22.cnzz.com/z_stat.php?id=1269393554&web_id=1269393554" language="JavaScript"></script>';
        }else if($urlz=='m3.scmidai.com'){
            //m3.scmidai.com
            $cnzz = '<script src="https://s19.cnzz.com/z_stat.php?id=1269396283&web_id=1269396283" language="JavaScript"></script>';
        }else if($urlz=='m4.scmidai.com'){
            //m4.scmidai.com
            $cnzz = '<script src="https://s19.cnzz.com/z_stat.php?id=1269396456&web_id=1269396456" language="JavaScript"></script>';
        }

        //var_dump($picList[0]);
        $this->assign('picList', $picList[0]);
        $this->assign('cnzz', $cnzz);
        $this->display();
    }

    function test()
    {
        $php = M('apply');
        $result = $php->find(1);
        var_dump($result);
        $this->display();
    }

    //新增、修改
    function add()
    {
        // echo 66;exit();
        $article = D('apply');
        //操作数据库
        if (!empty($_POST)) {
            if (!$article->create()) {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            } else {
                $_POST["createtime"] = date("Y-m-d H:i:s", time());

                if($_GET['source']!='null'){
                    $_POST["website"] = $_GET['source'];
                }else{
                    $_POST["website"] = $_SERVER['HTTP_HOST'];
                }

                if ($_SERVER['HTTP_HOST'] == 'www.scmidai.com' || $_SERVER['HTTP_HOST'] == 'www.cdmidai.com' || $_SERVER['HTTP_HOST'] == 'www.yunwei.com') {
                    $_POST["source"] = 1; //PC
                } else {
                    $_POST["source"] = 2; //WAP
                }

                $inertID = $article->add($_POST);
                if ($inertID) {
                    $data = array('status' => true, 'msg' => '申请成功');
                    ob_clean();//不加这个，前端收不到json数据
                    $this->ajaxReturn($data);
                } else {
                    $this->ajaxReturn(array(
                        'status' => false,
                        'msg' => '申请失败',
                    ));
                }
            }
        }
        $this->display();
    }

    function _empty()
    {
        echo "<img src='" . IMG_URL . '404.gif' . "' alt='' />";
    }

    //制作专门方法实现验证码生成
    function verifyImg()
    {
        //以下类Verify在之前并没有include引入
        //走自动加载Think.class.php  autoload()
        $config = array(
            'imageH' => 45, // 验证码图片高度
            'imageW' => 134,
            'fontSize' => 19,
            'fontttf' => '4.ttf', // 验证码字体，不设置随机获取
            'length' => 4, // 验证码位数
            'useCurve' => false, // 是否画混淆曲线
            'useNoise' => true, // 是否添加杂点
        );
        ob_clean(); // 输出缓冲区 避免不显示验证码
        $verify = new \Think\Verify($config);
        $verify->entry();
    }

}

