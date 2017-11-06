<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $articles = D('Articles');
        //贷款项目
        $articleList = $articles->where('category_id in (3,4,5,6)')->select();
        //客服列表
        $customer = $articles->table("yw_articles as a")->join("yw_images as b")->where("a.id=b.article_id and a.category_id=12")->select();
        //资金支持
        $amount =  $articles->where('category_id=15')->select();
        //贷款攻略
        $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON ( a.id=b.article_id  ) WHERE (a.category_id=7) ORDER BY a.sort desc,a.id desc LIMIT 7";
        $dkglList = $articles->query($sql);
        //资讯中心
        $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_images as b ON ( a.id=b.article_id  ) WHERE (a.category_id=8) ORDER BY a.sort desc,a.id desc LIMIT 7";
        $zxzxList = $articles->query($sql);
        //常见问答
        $askList =  $articles->where('category_id=10')->select();
        //友情连接
        $links =  $articles->where('category_id=14')->select();
        //底部信息
        $footInfo =  $articles->where('category_id=16')->select();
        //echo $articles->_sql();
        //show_bug($zxzxList);
        $this->assign('articleList', $articleList);
        $this->assign('customer', $customer);
        $this->assign('amount', $amount);

        $this->assign('dkglList', $dkglList);
        $this->assign('zxzxList', $zxzxList);
        $this->assign('askList', $askList);
        $this->assign('links', $links);
        $this->assign('footInfo', $footInfo);

        $this->display();
    }

    public function hello()
    {
        echo "nihao";
    }
}