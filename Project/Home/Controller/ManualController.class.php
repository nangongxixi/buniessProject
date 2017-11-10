<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class ManualController extends Controller
{
    public function index($catid,$catname)
    {
        $articles = D('Articles');

        //贷款攻略
        $manualList = $articles->where('category_id='.$catid)->select();

        //常见问答
        $askList = $articles->where('category_id=10')->select();

        $this->assign('manualList', $manualList);//贷款攻略
        $this->assign('askList', $askList); //常见问答
        $this->assign('catname', $catname); //常见问答

        $this->display();
      // show_bug($manualList);
    }

    public function detail($id){
        $articles = D('Articles');
        $info = $articles->where('id='.$id)->select();
        //常见问答
        $askList = $articles->where('category_id=10')->select();
        $this->assign('askList', $askList); //常见问答
        $this->assign('info', $info[0]); //详情
        $this->display();
    }

}