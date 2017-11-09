<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class AboutController extends Controller
{
    public function index($catid)
    {
        $articles = D('Articles');
        //成功案例
        $aboutList = $articles->where('category_id='.$catid)->select();

        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid)->select();

        $this->assign('aboutList', $aboutList);//列表
        $this->assign('other', $other);//列表
        $this->display();
    }

    public function map(){
        $this->display();
    }

}