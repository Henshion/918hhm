<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function header()
    {
        $system=D('system');
        $systems=$system->find();
        $this->assign('systems',$systems);
        $menu=D('menu');
        $menus =$menu->order()->select();
        $this->assign('menus',$menus);
        $cate = D('cate');
        $cates1 = $cate->find(1);
        $cates2 = $cate->find(2);
        $cates3 = $cate->find(3);
        $cates4 = $cate->find(4);
        $this->assign("cates1", $cates1);
        $this->assign("cates2", $cates2);
        $this->assign("cates3", $cates3);
        $this->assign("cates4", $cates4);
        $link=D('link');
        $links =$link->order()->select();
        $this->assign("links", $links);
        $this->display();
    }
}
