<?php

namespace Home\Controller;
use Think\Controller;

//Controller父类：ThinkPHP/Library/Think/Controller.class.php

class WapController extends Controller{

   function index(){
       $this -> display();
   }

    function _empty(){
        echo "<img src='".IMG_URL.'404.gif'."' alt='' />";
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

