<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
    public function index(){
        $adminblog=D('adminblog');
        $blogname=I('username');
        $data['username']= $blogname;
        //查询
        $where = array();
        $where['username'] = $data['username'];
        $result = $adminblog->where($where)->field('id,username,password')->find();
        $blog_id=$result['id'];
        $blog_username=$result['username'];
        if(IS_POST){
            if($adminblog->create($_POST,4)){   	
                if($adminblog->login()){

                    $this->success('登录成功，跳转中...',U('Index/index',array("id"=>$blog_id,'username'=>$blog_username)));
                }else{
                    $this->error('您的用户名或者密码错误！');
                }
            }else{
                $this->error($adminblog->getError());
            }
            return;
        }
        if(session('id')){
            $this->error('您已经登录该系统，请勿重复登录！',U('Index/index'));
        }else{
           $this->display('login');
        }
    }
    public function verify(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }

    
}