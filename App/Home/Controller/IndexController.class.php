<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
     //第一层
    public function category_1(){
        $index_1=D('index');
        $indexs_1 = $index_1->where()->find(1);
        $indexs_id_1= $indexs_1['cateid'];
        $article_1 = D('article');
        $open_1['open'] = 1;
        $id_1 = $indexs_id_1;
        $cate_1 = D('cate');
        $c = $cate_1->where("id = {$id_1}")->find();
        if ($c) {
            $tpti_1 = $cate_1->where("id ={$id_1}")->find();
            $this->assign("tpti_1", $tpti_1);
            $count_1 = $article_1->where("tid={$id_1}")->count();
            $Page_1 = new \Think\Page($count_1, 8);
            $show_1 = $Page_1->show();
            $articles_1 =  $article_1->where("tid={$id_1}")->where($open_1)->order('id DESC')->limit( $Page_1->firstRow . ',' .  $Page_1->listRows)->select();
            $this->assign('articles_1', $articles_1);
   
        } 
    }
    //第二
     public function category_2(){
        $index_2=D('index');
        $indexs_2 = $index_2->where()->find(2);
        $indexs_id_2= $indexs_2['cateid'];
        $article_2 = D('article');
        $open_2['open'] = 1;
        $id_2 = $indexs_id_2;
        $cate_2 = D('cate');
        $c_2 = $cate_2->where("id = {$id_2}")->find();
        if ($c_2) {
            $tpti_2 = $cate_2->where("id ={$id_2}")->find();
            $this->assign("tpti_2", $tpti_2);
            $count_2 = $article_2->where("tid={$id_2}")->count();
            $Page_2 = new \Think\Page($count_2, 4);
            $show_2 = $Page_2->show();
            $articles_2 = $article_2->where("tid={$id_2}")->where($open_2)->order('id DESC')->limit($Page_2->firstRow . ',' . $Page_2->listRows)->select();
            $this->assign('articles_2', $articles_2);
                    
        } 
    }
    //第三
     public function category_3(){
        $index_3=D('index');
        $indexs_3 = $index_3->where()->find(3);
        $indexs_id_3= $indexs_3['cateid'];

         
        $article_3 = D('article');
        $open_3['open'] = 1;
        $id_3= $indexs_id_3;
        $cate_3 = D('cate');
        $c_3 = $cate_3->where("id = {$id_3}")->find();
        if ($c_3) {
            $tpti_3 = $cate_3->where("id ={$id_3}")->find();
            $this->assign("tpti_3", $tpti_3);

           
            $count_3 = $article_3->where("tid={$id_3}")->count();
            $Page_3 = new \Think\Page($count_3, 8);
            $show_3 = $Page_3->show();
            $articles_3 = $article_3->where("tid={$id_3}")->where($open_3)->order('id DESC')->limit($Page_3->firstRow . ',' . $Page_3->listRows)->select();
            $this->assign('articles_3', $articles_3);
           
        } 
    }
    //第四
     public function category_4(){
        $index_4=D('index');
        $indexs_4 = $index_4->where()->find(4);
        $indexs_id_4= $indexs_4['cateid'];

         
        $article_4 = D('article');
        $open_4['open'] = 1;
        $id_4= $indexs_id_4;
        $cate_4 = D('cate');
        $c_4 = $cate_4->where("id = {$id_4}")->find();
        if ($c_4) {
            $tpti_4 = $cate_4->where("id ={$id_4}")->find();
            $this->assign("tpti_4", $tpti_4);

           
            $count_4 = $article_4->where("tid={$id_4}")->count();
            $Page_4 = new \Think\Page($count_4, 8);
            $show_4 = $Page_4->show();
            $articles_4 = $article_4->where("tid={$id_4}")->where($open_4)->order('id DESC')->limit($Page_4->firstRow . ',' . $Page_4->listRows)->select();
            $this->assign('articles_4', $articles_4);
           
        } 
    }
    //第五
     public function category_5(){
        $index_5=D('index');
        $indexs_5 = $index_5->where()->find(5);
        $indexs_id_5= $indexs_5['cateid'];

         
        $article_5 = D('article');
        $open_5['open'] = 1;
        $id_5= $indexs_id_5;
        $cate_5 = D('cate');
        $c_5 = $cate_5->where("id = {$id_5}")->find();
        if ($c_5) {
            $tpti_5 = $cate_5->where("id ={$id_5}")->find();
            $this->assign("tpti_5", $tpti_5);

           
            $count_5 = $article_5->where("tid={$id_5}")->count();
            $Page_5 = new \Think\Page($count_5, 4);
            $show_5 = $Page_5->show();
            $articles_5 = $article_5->where("tid={$id_5}")->where($open_5)->order('id DESC')->limit($Page_5->firstRow . ',' . $Page_5->listRows)->select();
            $this->assign('articles_5', $articles_5);
           
        } 
    }
    public function index(){
        $this->category_1();
        $this->category_2();
        $this->category_3();
        $this->category_4();
        $this->category_5();
       	$this->display();
    }
    public function article()
    {   
        $article = D('Article');
        $open['open'] = 1;
        $count = $article->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $tptg = $article->where($open)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('tptg', $tptg);
        $this->assign('page', $show);
        $this->display();
    }
    public function search()
    {
        $article = D('Article');
        $where = 1;
        if ($kw = I('kw')) {
            $where .= ' AND title LIKE "%' . $kw . '%"';
        }
        $count = $article->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $tpth = $article->where($where)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('tpth', $tpth);
        $this->assign('page', $show);
        $this->display();
    }
    public function tags()
    {
        $article = D('Article');
        $where = 1;
        if ($ks = I('ks')) {
            $where .= ' AND article.keywords LIKE "%' . $ks . '%"';
        }
        $count = $article->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $tpth = $article->where($where)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('tpth', $tpth);
        $this->assign('page', $show);
        $this->display();
    }
    public function cate()
    {
        $article = D('article');
        $open['open'] = 1;
        $id = I('id');
        $cate = D('cate');
        $c = $cate->where("id = {$id}")->find();
        if ($c) {
            $tpti = $cate->where("id ={$id}")->find();
            $this->assign("tpti", $tpti);
            $count = $article->where("tid={$id}")->count();
            $Page = new \Think\Page($count, 10);
            $show = $Page->show();
            $tptj = $article->where("tid={$id}")->where($open)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('tptj', $tptj);
            $this->assign('page', $show);
            $this->display();
        } else {
            $this->error("亲！你迷路了！");
        }
    }
    public function article1()
    {
        $article = D('article');
        $commend['commend'] = 1;
        $choice['choice'] = 1;
        $open['open'] = 1;    
        $tptb = $article->limit(4)->order('id DESC')->where($commend)->where($open)->select();
        $this->assign('tptb', $tptb);
        $tptc = $article->limit(4)->order('id DESC')->where($choice)->where($open)->select();
        $this->assign('tptc', $tptc);
        $article = D('article');
        $open['open'] = 1;
        $id = I('id');
        $a = $article->where("id = {$id}")->where($open)->find();
        if ($a) {
            $article->where("id = {$id}")->setInc('view', 1);
            $tptl = $article->find($id);
            $this->assign('tptl', $tptl);
            $content = $tptl['content'];
            $content = htmlspecialchars_decode($content);
            $this->assign('content', $content);
            $cate = D('cate');
            $tpti = $cate->where("id = {$tptl['tid']}")->find();
            $cate_id = $tpti['id'];
                $cate = D('cate');
                $c = $cate->where("id = {$cate_id}")->find();
                if ($c) {
                    $tpti = $cate->where("id ={$cate_id}")->find();
                    $this->assign("tpti", $tpti);
                    $count = $article->where("tid={$cate_id}")->count();
                    $Page = new \Think\Page($count,4);
                    $show = $Page->show();
                    $tptj = $article->where("tid={$cate_id}")->where($open)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
                    $this->assign('tptj', $tptj);
                    $this->assign('page', $show);
                } 
            $this->assign("tpti", $tpti);
            $this->display();
        } else {
            $this->error("文章已被删除或正在审核！");
        }
    }
    //点赞
     public function zan(){
        $data['id']=isset($_POST['id'])?intval(trim($_POST['id'])):0;
        $obj = D("Article");

        if(!isset($_COOKIE[$_POST['id']+10000])&&$obj->where($data)->setInc('zan')){
            $cookiename = $_POST['id']+10000;
            setcookie($cookiename,40,time()+86400,'/'); 
 
            $data['info'] = "ok";
            $data['status'] = 1;
            $this->ajaxReturn($data);
             
            exit();
        }else{
            $data['info'] = "fail";
            $data['status'] = 0;
            $this->ajaxReturn($data);
            exit();
        }
         
    }

}