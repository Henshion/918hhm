<?php
namespace Home\Controller;

use Think\Controller;
class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $system=D('system');
        $systems=$system->find();
        $this->assign('systems',$systems);
        $menu=D('menu');
        $menus =$menu->order()->select();
        $this->assign('menus',$menus);
        $cate = D('cate');
        $cates = $cate->order()->select();
        $cates1 = $cate->find(1);
        $cates2 = $cate->find(2);
        $cates3 = $cate->find(3);
        $cates4 = $cate->find(4);
        
        $this->assign("$cates", $$cates);
        $this->assign("cates1", $cates1);
        $this->assign("cates2", $cates2);
        $this->assign("cates3", $cates3);
        $this->assign("cates4", $cates4);
        $slide=D('slide');
        $slides_1=$slide->find(1);
        $slides_2=$slide->find(2);
        $slides_3=$slide->find(3);
        $slides_4=$slide->find(4);
        $slides_5=$slide->find(5);
        $slides_6=$slide->find(6);
        $this->assign("slides_1", $slides_1);
        $this->assign("slides_2", $slides_2);
        $this->assign("slides_3", $slides_3);
        $this->assign("slides_4", $slides_4);
        $this->assign("slides_5", $slides_5);
        $this->assign("slides_6", $slides_6);
        $link=D('link');
        $links =$link->order()->select();
        $this->assign("links", $links);
		$article = D('article');
        $commend['commend'] = 1;
		$choice['choice'] = 1;
        $open['open'] = 1;
		$tptb = $article->limit(9)->order('id DESC')->where($commend)->where($open)->select();
        $this->assign('tptb', $tptb);
        $tptc = $article->limit(9)->order('id DESC')->where($choice)->where($open)->select();
        $this->assign('tptc', $tptc);
		$link = D('link');
        $tptd = $link->select();
        $this->assign('tptd', $tptd);
        $this->assign("tpte", $tpte);
		$tags = C('WEB_TAG');
        $tagss = explode(',', $tags);
		$this->assign('tagss', $tagss);
    }
}