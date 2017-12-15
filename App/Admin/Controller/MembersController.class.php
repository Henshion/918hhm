<?php
namespace Admin\Controller;
use Think\Controller;
class MembersController extends CommonController {
    public function bloglst(){
        $adminblog=D('adminblog');
        $count= $adminblog->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);
        $show=$Page->show();
        $bloglist = $adminblog->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('bloglist',$bloglist);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function blogadd(){
        $adminblog=D('adminblog');
        $time=date('Y-m-d H:i:s');
        $headerimg='http://918hhm.com/Public/Admin/images/0.jpg';
        if(IS_POST){
            $data['username']=I('username');
            $data['actualname']=I('actualname');
            $data['birthday']=I('birthday');
            $data['phone']=I('phone');
            $data['weixin']=I('weixin');
            $data['qq']=I('qq');
            $data['email']=I('email');
            $data['address']=I('address');
            $data['headerimg']= $headerimg;
            $data['create_time']= $time;
            $data['password']=md5(I('password'));
            if($adminblog->create($data)){
                    if($adminblog->add($data)){
                        $this->success('添加成功！');
                    }else{
                        $this->error('添加失败！');
                    }
                }else{
                     $this->error($adminblog->getError());
                }
            return;
        }
        $this->display();
    }
    public function blogupd(){
        $adminblog=D('adminblog');
        if(IS_POST){
            $data['id']=I('id');
            $data['username']=I('username');
            $data['actualname']=I('actualname');
            $data['birthday']=I('birthday');
            $data['phone']=I('phone');
            $data['weixin']=I('weixin');
            $data['qq']=I('qq');
            $data['email']=I('email');
            $data['address']=I('address');
            $data['header']=I('header');
            $data['password']=md5(I('password'));       // dump($data);die;
            $adminupd=$adminblog->find(I('id'));
            $system=$adminupd['system'];
            if($system==1){
                $this->error('您没有权限修改！');
            }else{
                if($adminblog->create($data)){
                    $save=$adminblog->save();

                    if( $save !== false){
                            $this->success('修改成功！');
                         }else{
                            $this->error('修改失败！');
                        }
                      }else{
                        $this->error($adminblog->getError());
                    }
                }
            return;
        }
        $blogs=$adminblog->find(I('id'));
        $this->assign('blogs',$blogs);
        $this->display();
    }
    public function blogdel(){
        $adminblog=D('adminblog');
        $id=I('id');
        $admindel=$adminblog->find(I('id'));
        $system=$admindel['system'];
        if($system==1){
            $this->error('博主不能删除！');
        }else{
            if($adminblog->delete($id)){
                $this->success('删除成功！',U('members/bloglst'));
            }else{
                $this->error('删除失败！');
            }             
        }
    }

}