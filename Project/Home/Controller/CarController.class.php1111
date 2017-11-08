<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class CarController extends Controller
{
    public function index($catid)
    {
        //产品列表
        $articles = D('Articles');
        $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON ( a.id=b.article_id  ) WHERE (a.category_id=$catid) ORDER BY a.sort desc,a.id desc LIMIT 7";
        $carList = $articles->query($sql);
        //banner图
        $bannerImg = D('images')->field('img_url')->where('article_id='.$catid)->select();
        $carList['bannerImg']=$bannerImg;

        //客服列表
        $customer = $articles->table("yw_articles as a")->join("yw_images as b")->where("a.id=b.article_id and a.category_id=12")->select();


       // show_bug($carList);
        $this->assign('customer', $customer);

        $this->assign('carList', $carList);
        $this->display();
        show_bug($carList);
    }

}