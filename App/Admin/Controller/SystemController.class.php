<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    public function webupd(){
        $system=D('system');
        if(IS_POST){
            $data['id']=I('id');
            $data['webtitle']=I('webtitle');
            $data['icp']=I('icp');
            $data['email']=I('email');
            $data['qq']=I('qq');
            $data['xinlang']=I('xinlang');
            $data['weixinpic']=I('weixinpic');
            $data['email']=I('email');
            $data['logo']=I('logo');
            $data['copyright']=I('copyright');
            $data['keywords']=I('keywords');
            $data['describe']=I('describe');
             // dump($data);die;
             if($system->create($data)){
                $save=$system->save();
                if( $save !== false){
                       $this->success('修改成功！');
                }else{
                    $this->error('修改失败！');
                }
              }else{
                $this->error($system->getError());
            }
            return;
        }
         $systems=$system->find();
        $this->assign('systems',$systems);
        $this->display();
    }
    public function menulst(){
    	$menu=D('menu');
        $menus =$menu->order()->select();
        $this->assign('menus',$menus);
        $this->display();
    }
    public function menuupd(){
        $menu=D('menu');
        if(IS_POST){
            $data['id']=I('id');
            $data['name']=I('name');
            $data['link']=I('link');
            $data['sort']=I('sort');             // dump($data);die;
             if($menu->create($data)){
                $save=$menu->save();
                if( $save !== false){
                    $this->success('修改成功！');
                }else{
                    $this->error('修改失败！');
                }
              }else{
                $this->error($menu->getError());
            }
            return;
        }
        $menus=$menu->find(I('id'));
        $this->assign('menus',$menus);
        $this->display();
    }
    public function menuadd(){
    	$menu=D('menu');
    	if(IS_POST){
            $data['name']=I('name');
            $data['id']=I('id');
            $data['link']=I('link');
            $data['state']=I('state');
            $data['sort']=I('sort');
                if($menu->add($data)){
                    $this->success('添加菜单成功！');
                }else{
                    $this->error('添加菜单失败！');
                }
            return;
    	}
        $this->display();
    }
   
    public function menudel(){
        $menu=D('menu');
        $id=I('id');
        $menudel=$menu->find($id);
        $system=$menudel['system'];
        if($system==1){
            $this->error('此菜单不能删除！');
        }else{
            if($menu->delete(I('id'))){
            $this->success('删除成功！');
        }else{
            $this->error('删除失败！');
           }
        }
    }
     public function linklst(){
        $link=D('link');
        $links =$link->order()->select();
        $this->assign('links',$links);
        $this->display();
    }
    public function linkadd(){
        $link=D('link');
        $img=D('img');
        if(IS_POST){
            $pic=$img->find(I('pic'));
            $data['name']=I('name');
            $data['id']=I('id');
            $data['link']=I('link');
            $data['sort']=I('sort');
            $data['pic']=$pic["address"];
           
                if($link->add($data)){
                    $this->success('添加链接成功！');
                }else{
                    $this->error('添加链接失败！');
                }
            return;
        }
        $this->display();
    }
    public function linkupd(){
        $link=D('link');
        $img=D('img');
        if(IS_POST){
            $pic=$img->find(I('pic'));
            $data['id']=I('id');
            $data['name']=I('name');
            $data['link']=I('link');
            $data['sort']=I('sort');
            $data['pic']=$pic["address"];
             // dump($data);die;
             if($link->create($data)){
                $save=$link->save();
                if( $save !== false){
                    $this->success('修改成功！');
                }else{
                    $this->error('修改失败！');
                }
              }else{
                $this->error($link->getError());
            }
            return;
        }
         $links=$link->find(I('id'));
        $this->assign('links',$links);
        $this->display();
    }
    public function linkdel(){
        $link=D('link');
        $id=I('id'); 
        $linkdel=$link->find($id);
        $system=$linkdel['system'];
        if($system==1){
            $this->error('此链接不能删除！');
        }else{
            if($link->delete(I('id'))){
            $this->success('删除成功！');
        }else{
            $this->error('删除失败！');
           }
        }
    }
    //轮播图
    public function slidelst(){
        $slide=D('slide');
        $slides =$slide->order()->select();
        $this->assign('slides',$slides);
        $this->display();
    }
    public function slideupd(){
        $slide=D('slide');
        $slides=$slide->find(I('id'));
        $img=D('img');
        if(IS_POST){
            $data['title']=I('title');
            $data['link']=I('link');
            $data['id']=I('id');
            $address1=$img->find(I('address1'));
            $address2=$img->find(I('address2'));
            $address3=$img->find(I('address3'));       
            $data['address1']=$address1['address'];
            $data['address2']=$address2['address'];
            $data['address3']=$address3['address'];
            $data['img_id1']=I('address1');
            $data['img_id2']=I('address2');
            $data['img_id3']=I('address3');
            if($slide->create($data)){
                $save=$slide->save();
                if($save !== false){
                    $this->success('修改文章成功！',U('system/slidelst'));
                }else{
                    $this->error('修改文章失败！');
                }
            }else{
                $this->error($slide->getError());
            }

            return;
        }
        $this->assign('slides',$slides);
        $this->display();
    }
    //上传图片
    public function slideupload($pid=''){
        $slide=D('slide');     
        if(IS_POST){
            $data['id']=I('id');
            
            dump($data);die;
        }
        $slides=$slide->find(I('id'));
        $this->assign('slides',$slides);
        
        $this->display();
    }
    //清除缓存
    private function _deleteDir($R){
        $handle = opendir($R);
        while(($item = readdir($handle)) !== false){
        if($item != '.' and $item != '..'){
            if(is_dir($R.'/'.$item)){
                $this->_deleteDir($R.'/'.$item);
            }else{
                if(!unlink($R.'/'.$item))
                die('error!');
            }
        }
        }
        closedir( $handle );
        return rmdir($R); 
    }
    public function clearRuntime(){
        $R = $_GET['path'] . $_GET['path'] . RUNTIME_PATH;
        if($this->_deleteDir($R)){
                $this->success('清除成功！');
            }else{
                $this->error('清除失败！');
        }
    }

}
