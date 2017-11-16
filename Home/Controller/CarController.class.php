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
        // $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON ( a.id=b.article_id  ) and b.type=0 WHERE (a.category_id=$catid) ORDER BY a.sort desc,a.id desc LIMIT 3";
        $sql = "select a.*,b.img_url from yw_articles as a
        left join (select img_url,article_id,type from yw_images group by img_url) as b 
        on a.id=b.article_id and b.type=0
        WHERE a.category_id IN (SELECT category_id from yw_articles_category WHERE category_pid=$catid and status=0 or category_id=$catid)
        ORDER BY a.sort desc,a.id desc LIMIT 3";
        $carList = $articles->query($sql);

        // echo $articles->_sql();


        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid)->select();

        //流程
        $other['liucImg'] = D('images')->field('img_url')->where('article_id=31')->select();

        //中图
        $other['middImg'] = D('images')->field('img_url')->where('article_id=32')->select();

        //客服列表
        $customer = $articles->table("yw_articles as a")->join("LEFT JOIN yw_images as b on a.id=b.article_id and b.type=0")->where("a.category_id=12 and a.status=0")->select();

        // echo $articles->_sql();

        // $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON a.id=b.article_id WHERE (a.category_id=12 and b.status=0 )";
        // $customer = $articles->query($sql);

        //常见问答
        $askList = $articles->where('category_id=10')->select();

        $catname = iconv("gb2312", "UTF-8", $catname); //解决从url获取的中文乱码
        $this->assign('catname', $catname);//标题
        $this->assign('carList', $carList);//车贷
        $this->assign('other', $other);//其他
        $this->assign('customer', $customer);//客服列表
        $this->assign('askList', $askList); //常见问答

        $this->display();
        //show_bug($carList);
    }

    public function detail($id)
    {
        $articles = D('Articles');
        $info = $articles->where('id=' . $id)->select();
        //常见问答
        $askList = $articles->where('category_id=10')->select();
        $this->assign('askList', $askList); //常见问答
        $this->assign('info', $info[0]); //常见问答
        $this->display();
    }

}