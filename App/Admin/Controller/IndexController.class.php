<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index($id='',$username=''){
    	$adminblog=D('adminblog');
    	if($id==''){
    		$this->success('请先登录系统！',U('Login/login'));
    	}else{
    		if($username==''){
    			$this->success('请先登录系统！',U('Login/login'));
    		}else{
    			$adminblogs=$adminblog->find($id);
		    	$this->assign('adminblogs', $adminblogs);
		        $this->display();
    		}
    	}
    }
    public function index_v1(){
        $this->display();
    }
     public function out(){
        Session(null);
        return $this->success('退出成功','login/login');
    }
    //下载文件
     public     function download_file(){
                $file='Public/img/xx.png';
                if(is_file($file)){
                    $length = filesize($file);
                    $type = mime_content_type($file);
                    $showname =  ltrim(strrchr($file,'/'),'/');
                    header("Content-Description: File Transfer");
                    header('Content-type: ' . $type);
                    header('Content-Length:' . $length);
                     if (preg_match('/MSIE/', $_SERVER['HTTP_USER_AGENT'])) { //for IE
                         header('Content-Disposition: attachment; filename="' . rawurlencode($showname) . '"');
                     } else {
                         header('Content-Disposition: attachment; filename="' . $showname . '"');
                     }
                     readfile($file);
                     exit;
                 } else {
                     exit('文件已被删除！');
                 }
             }
}