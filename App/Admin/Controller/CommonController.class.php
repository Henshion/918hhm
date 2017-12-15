<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct(){
        parent::__construct();
        $this->checkAdminSession();
    }
    public function checkAdminSession() {
		if(!session('id')){
            $this->error('请先登录系统！',U('Login/login'));
        }
		 //设置超时为10分
		/*$nowtime = time();
		$s_time = $_SESSION['logintime'];
		dump($_SESSION);die;
		 if (($nowtime - $s_time) > 600) {
			unset($_SESSION['logintime']);
			$this->error('当前用户登录超时，请重新登录', U('Login/login'));
		 } else {
			$_SESSION['logintime'] = $nowtime;
		 }*/
	}
	
}