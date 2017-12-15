<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function catelst()
    {
        $cate = D('cate');
        $c =  $cate->where("tid = 0")->order('id ASC')->select();
        $cs = $cate->where("tid != 0")->order('id ASC')->select();
        $this->assign("c", $c);
        $this->assign("cs", $cs);
        $this->display();
    }
    public function cateadd()
    {
        $cate = D('cate');
        $c = $cate->where("tid=0")->select();
        $this->assign("c", $c);
        $this->display();
    }
    public function doadd()
    {
        $cate = D('cate');
        $data = $cate->create();
        $data['time'] = time();
        
        $result = $cate->add($data);
        if ($result > 0) {
            $this->success('添加成功！', U('Cate/catelst'));
        } else {
            $this->error('添加失败！');
        }
    }
    public function cateupd($id)
    {
        $cate = D('cate');
        $c = $cate->find($id);
        $this->assign('c', $c);
        $cs = $cate->where("tid = 0")->select();
        $this->assign('cs', $cs);
        $this->display();
    }
    public function doedit()
    {
        $cate = D('cate');
        $data = $cate->create();
        $result = $cate->save($data);
        if ($result > 0) {
            $this->success('修改成功！', U('Cate/catelst'));
        } else {
            $this->error('修改失败！');
        }
    }
    public function delete($id)
    {
        $cate = D("cate");
        $check = $cate->where("tid={$id}")->find();
        if ($check != null) {
            $this->error("请先删除子栏目");
        } else {
            $result = $cate->delete($id);
        }
        if ($result > 0) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败！");
        }
    }
}