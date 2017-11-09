<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class CarController extends Controller
{
    public function index($catid, $catname)
    {
        //产品
        $articles = D('Articles');
        $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON ( a.id=b.article_id  ) WHERE (a.category_id=$catid and b.status=0) ORDER BY a.sort desc,a.id desc LIMIT 3";
        $carList = $articles->query($sql);

        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid )->select();

        //流程
        $other['liucImg'] = D('images')->field('img_url')->where('article_id=31')->select();

        //中图
        $other['middImg'] = D('images')->field('img_url')->where('article_id=32')->select();

        //客服列表
        $customer = $articles->table("yw_articles as a")->join("yw_images as b")->where("a.id=b.article_id and a.category_id=12 and b.status=0 and b.type=0")->select();

       // $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON a.id=b.article_id WHERE (a.category_id=12 and b.status=0 )";
       // $customer = $articles->query($sql);

        //常见问答
        $askList = $articles->where('category_id=10')->select();

        $this->assign('catname', $catname);//标题
        $this->assign('carList', $carList);//车贷
        $this->assign('other', $other);//其他
        $this->assign('customer', $customer);//客服列表
        $this->assign('askList', $askList); //常见问答

        $this->display();
        //show_bug($customer);
    }

    public function detail(){
        $this->display();
    }

}