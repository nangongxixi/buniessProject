<?php

namespace Admin\Controller;

use Component\AdminController;

class CategoryController extends AdminController {

    function showlist() {
        $info = $this->getInfo();
        $this->assign('info', $info);
        $this->display();
    }

    function add() {
        if (!empty($_POST)) {
            //在AuthModel里边通过一个指定方法实现权限添加
            $auth = new \Model\CategoryModel();
            $z = $auth->addCagegory($_POST);
            if ($z) {
                $this->ajaxReturn(array(
                    'status' => true,
                    'msg' => '操作成功',
                ));
            } else {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            }
        } else {
            //获得父级权限信息
            $info = $this->getInfo(true);
            //show_bug($info);
            //从$info里边获得信息。例如：array(1=>'商品管理',2=>'添加商品',3=>'订单打印')
            //以便在smarty模板中使用{html_options}
            $categoryinfo = array();
            foreach ($info as $v) {
                $categoryinfo[$v['category_id']] = $v['category_name'];
            }

            $this->assign('categoryinfo', $categoryinfo);
            $this->display();
        }
    }

    function getInfo($flag = false) {
        //如果$flag标志为false，查询全部的权限信息
        //如果$flag标志为true,只查询level=0/1的权限信息
        $auth = D('articles_category');
        if ($flag == true) {
            $info = D('articles_category')->where('category_level<2 and del=0')->order('category_path asc')->select();
        } else {
            $info = D('articles_category')->where('del=0')->order('category_path asc')->select();
        }
        //$info[X][auth_name] = "->"auth_name
        foreach ($info as $k => $v) {
            if($v['category_level']>1){
                $info[$k]['category_name'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $v['category_level']) .'├&nbsp;'. $info[$k]['category_name'];
            }else{
                $info[$k]['category_name'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;', $v['category_level']) . $info[$k]['category_name'];
            }



        }
        return $info;
    }

}
