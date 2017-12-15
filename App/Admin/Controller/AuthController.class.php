<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends CommonController {
    public function authadminlst(){
        $authadmin=D('auth_group');
        $data =  $authadmin->getGroupList();
       //  \Org\Util\Log4php::init()->info($_SESSION['user_info']['name'].'查看角色列表');
        $this->assign('list', $data['list']);
        $this->assign('page', $data['page']);
        $this->display();
    }
}