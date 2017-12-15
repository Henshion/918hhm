<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function articlelst(){
      	$article = D('article');
		$where = 1;
        if ($kw = I('kw')) {
            $where .= ' AND title LIKE "%' . $kw . '%"';
        }
        $count = $article->count();
        $Page = new \Think\Page($count, 8);
        $show = $Page->show();
        $list = $article->where($where)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }
    public function articleadd()
    {
        $cate = D('cate');
        $c = $cate->where("type = 1")->select();
        $this->assign('c', $c);
		$tags = C('WEB_TAG');
        $tagss = explode(',', $tags);
		$this->assign('tagss', $tagss);
        $this->display();
    }
    public function doadd()
    {
        $article = D('article');
        $data = $article->create();
        $data['time'] = time();
        if ($_FILES['pic']['tmp_name'] != '') {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './';
            $upload->savePath = 'Public/Uploads/';
            $info = $upload->uploadOne($_FILES['pic']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['pic'] = $info['savepath'] . $info['savename'];  
                $img=D('img');
               $data_img['savename']=$info['savename'];
                $data_img['address']='/'.$info['savepath'] . $info['savename'];
               $data_img['file']=$file['savepath'];
                $img->add($data_img);
            }
        }
        $result = $article->add($data);
        if ($result > 0) {

            $this->success('添加成功！',U('Article/articlelst'));

        } else {
            $this->error('添加失败！');
        }
    }
    public function articleupd($id)
    {
        $cate = D('cate');
        $c = $cate->where("type = 1")->select();
        $this->assign('c', $c);
        $article = D('article');
        $a = $article->find($id);
        $this->assign('a', $a);
		$tags = C('WEB_TAG');
        $tagss = explode(',', $tags);
		$this->assign('tagss', $tagss);
        $this->display();
    }
    public function doarticleupd()
    {
        $article = D('article');
        $data = $article->create();
		$data['open'] = I('open');
        $data['commend'] = I('commend');
        $data['choice'] = I('choice');
        if ($_FILES['pic']['tmp_name'] != '') {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './';
            $upload->savePath = 'Public/Uploads/';
            $info = $upload->uploadOne($_FILES['pic']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['pic'] = $info['savepath'] . $info['savename'];
                $img=D('img');
               $data_img['savename']=$info['savename'];
                $data_img['address']='/'.$info['savepath'] . $info['savename'];
               $data_img['file']=$info['savepath'];
                $img->add($data_img);
                }
        }
        $result = $article->save($data);
        if ($result > 0) {
            $this->success('修改成功！',U('Article/articlelst'));
        } else {
            $this->error('修改失败！');
        }
    }
    public function articledel($id)
    {
        $article = D('article');
        if ($article->delete($id)) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
    }
	public function deletes(){
		$article=D('article');
		$deletes=I('deletes');
		$deletes=implode(',',$deletes);
		if($article->delete($deletes)){
			$this->success('批量删除成功！',U('index'));
		}else{
			$this->error('批量删除失败！');
		}
		
	}
   public function doUploadPic()
    {
        $upload = new \Think\Upload();
         $upload->maxSize = 3145728;
         $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './';
            $upload->savePath = 'Public/Uploads/';
         $info = $upload->upload();
         if(!$info){
             $this->error($upload->getError());
         }else{
             foreach($info as $file){
             $data = '/'.$file['savepath'] . $file['savename'];
             $img=D('img');
           $data_img['savename']=$file['savename'];
            $data_img['address']='/'.$file['savepath'] . $file['savename'];
           $data_img['file']=$file['savepath'];
            $img->add($data_img);
             $this->ajaxReturn($data,'EVAL');
             }
         }
    }
}