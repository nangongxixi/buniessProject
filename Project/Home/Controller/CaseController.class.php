<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class CaseController extends Controller
{
    public function index($catid)
    {
        $articles = D('Articles');
        //成功案例
        $sql = "SELECT * FROM yw_articles as a LEFT JOIN yw_articles_category as b ON ( a.category_id=b.category_id  ) WHERE (a.status=0 and b.category_pid=$catid) ORDER BY a.sort desc,a.id desc";
        $data = $articles->query($sql);
        $caseList = [];
        foreach ($data as $k => $v) {
            $caseList[$v['category_name']][$v['title']] = $v['content'];
        }

        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('status=0 and article_id=' . $catid)->select();

        $this->assign('caseList', $caseList);//列表
        $this->assign('other', $other);//列表
        $this->display();
    }

}