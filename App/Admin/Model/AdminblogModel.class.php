<?php
namespace Admin\Model;
use Think\Model;
class AdminblogModel extends Model {
    
    protected $_validate=array(
        array('verify','check_verify','验证码错误！',1,'callback',4),  
        array('username','','博主已存在！！！',1,'unique',3), 
        );

    public function login(){
    	$password=$this->password;
    	$info=$this->where(array('username'=>$this->username))->find();
    	if($info){
    		if($info['password']==md5($password)){
    			session('id',$info['id']);
    			session('username',$info['username']);
    			return true;
    		}else{
    			return false;
    		}
    	}else{
    		return false;
    	}
    }

    function check_verify($code, $id = ''){
    	$verify = new \Think\Verify();
    	return $verify->check($code, $id);
    }

    
}