<?php
namespace Admin\Controller;
use Think\Controller;
class ImgController extends CommonController {
    public function imglst(){
        $img=D('img');
        $imgs=$img->order()->select();
        $this->assign('imgs',$imgs);
        $this->display();
    }
     public function imgadd(){
       	$img=D('img');

       	/*
       	if(IS_POST){
       		dump(IS_POST);die;
       		$data['id']=I('id');
            $data['name']=I('name');
            $data['address']=I('address');
            $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/blogimg/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $upload->autoSub   = false;
                $info   =   $upload->upload();
            if(!$info){
                $this->error($upload->getError());
            }else{
                foreach($info as $file){
                   $data = $file['savepath'].$file['savename'];
                }

            }
            dump( $data);die; 

       	}*/

        $this->display();
    }
    public function imgupd(){
    	$img=D('img');

    	 $upload = new \Think\Upload();
         $upload->maxSize = 3145728;
         $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './';
        $upload->savePath = 'Public/Uploads/';
         $info = $upload->upload();
        foreach($info as $file){
            $data1['savename']=$file['savename'];
            $data1['address']='/'.$file['savepath'] . $file['savename'];
            $data1['file']=$file['savepath'];
            $img->add($data1);
        }    
	}
}