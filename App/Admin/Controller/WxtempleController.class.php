<?php
namespace Admin\Controller;
use Think\Controller;
class WxtempleController extends Controller {
    
    /*public function wxupd(){
        $wxappapi=D('weixinapi');
        $wxappapis=$wxappapi->find(1);
        $this->assign('wxappapis',$wxappapis);
        if(IS_POST){
            $date['id']=1;
             $date['appid']=I('appid');
             $date['appsecret']=I('appsecret');
             $date['template']=I('template');
             $date['url']=I('url');

            if( $wxappapi->create(  $date)){
                $save=$wxappapi->save();
                if( $save !== false){
                    $this->success('添加栏目成功！',U('wxlst'));
                }else{
                    $this->error('添加栏目失败！',U('wxlst'));
                }
            }else{
                $this->error( $wxappapis->getError());
            }
            return;
        }
        $this->display();
    }
    */
    public function index(){
        //获得参数 signature nonce token timestamp echostr
        $nonce     = $_GET['nonce'];
        $token     = 'hhm';
        $timestamp = $_GET['timestamp'];
        $echostr   = $_GET['echostr'];
        $signature = $_GET['signature'];
        //形成数组，然后按字典序排序
        $array = array();
        $array = array($nonce, $timestamp, $token);
        sort($array);
        //拼接成字符串,sha1加密 ，然后与signature进行校验
        $str = sha1( implode( $array ) );

        if( $str  == $signature && $echostr ){
            //第一次接入weixin api接口的时候
            echo  $echostr;
            exit;
        }else{

            $this->reponseMsg();

        }

    }
    public function  show(){
        echo 'hhm';
    }

    //消息处理函数
    public function reponseMsg(){
        //1.获取到微信推送过来post数据（xml格式）
        $postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
        //2.处理消息类型，并设置回复类型和内容
        /*<xml>
    <ToUserName><![CDATA[toUser]]></ToUserName>
    <FromUserName><![CDATA[FromUser]]></FromUserName>
    <CreateTime>123456789</CreateTime>
    <MsgType><![CDATA[event]]></MsgType>
    <Event><![CDATA[subscribe]]></Event>
    </xml>*/
        $postObj = simplexml_load_string( $postArr );
        //$postObj->ToUserName = '';
        //$postObj->FromUserName = '';
        //$postObj->CreateTime = '';
        //$postObj->MsgType = '';
        //$postObj->Event = '';
        // gh_e79a177814ed
        //判断该数据包是否是订阅的事件推送
       
        if( strtolower( $postObj->MsgType) == 'event'){
            //如果是关注 subscribe 事件
            if( strtolower($postObj->Event == 'subscribe') ){
                //回复用户消息(纯文本格式)
                $toUser   = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $MsgType  =  'text';
                $Content  = '欢迎关注Hhm个人博客!!!'.$postObj->FromUserName.'-'.$postObj->ToUserName;
                $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";
                $info     = sprintf($template, $toUser, $fromUser, $time, $MsgType, $Content);
                echo $info;
                /*<xml>
                <ToUserName><![CDATA[toUser]]></ToUserName>
                <FromUserName><![CDATA[fromUser]]></FromUserName>
                <CreateTime>12345678</CreateTime>
                <MsgType><![CDATA[text]]></MsgType>
                <Content><![CDATA[你好]]></Content>
                </xml>*/


            }
        }
        //根据用户输入消息进行回复
        else if(strtolower( $postObj->MsgType) == 'text'){
            $toUser   = $postObj->FromUserName;
            $fromUser = $postObj->ToUserName;
            $time     = time();
            $msgType  =  'text';
            //$content  = 'imooc is very good'.$postObj->FromUserName.'-'.$postObj->ToUserName;
            $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";
            switch( trim($postObj->Content)){


                case 1:
                    $content = '您输入的数字是1';
                break;
                case 奥晨:
                    $content = '<a href="http://918hhm.win/index.php/Admin/Wxtemple/sendTemplateMsg">点击预约</a>';
                break;
                case 加入:
                        $arr=array(
                            array('title'=>'纳丶贤士丨招募一路同行的伙伴！！！',
                                'description'=>'我们希望能找到志同道和的你！',
                                'picUrl'=>'http://918hhm.win/Public/weixin/zhaopin.jpg',
                                'url'=>'http://918hhm.com/'),
                          
                         );
                    $content = '<a href="http://www.konglejiaoyu.com">孔乐</a>';
                    $template_tuWen = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <ArticleCount>".count($arr)."</ArticleCount>
                                <Articles>";
                    foreach($arr as $k=>$v){
                        $template_tuWen .= "<item>
                                <Title><![CDATA[".$v['title']."]]></Title>
                                <Description><![CDATA[".$v['description']."]]></Description>
                                <PicUrl><![CDATA[".$v['picUrl']."]]></PicUrl>
                                <Url><![CDATA[".$v['url']."]]></Url>
                                </item>";
                    }
                    $template_tuWen .="</Articles>
                                </xml>";
                    $info     = sprintf($template_tuWen, $toUser,$fromUser,$time,'news');
                    echo $info;
                break;
                case 课程体验:
                        $arr=array(
                            array('title'=>'在线预约',
                                'description'=>'免费参加体验课！',
                                'picUrl'=>'http://918hhm.win/Public/weixin/cj.jpg',
                                'url'=>'http://918hhm.com/'),
                          
                         );
                    $content = '<a href="http://www.konglejiaoyu.com">孔乐</a>';
                    $template_tuWen = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <ArticleCount>".count($arr)."</ArticleCount>
                                <Articles>";
                    foreach($arr as $k=>$v){
                        $template_tuWen .= "<item>
                                <Title><![CDATA[".$v['title']."]]></Title>
                                <Description><![CDATA[".$v['description']."]]></Description>
                                <PicUrl><![CDATA[".$v['picUrl']."]]></PicUrl>
                                <Url><![CDATA[".$v['url']."]]></Url>
                                </item>";
                    }
                    $template_tuWen .="</Articles>
                                </xml>";
                    $info     = sprintf($template_tuWen, $toUser,$fromUser,$time,'news');
                    echo $info;
                break;
                case 预约:
                        $arr=array(
                            array('title'=>'在线预约',
                                'description'=>'免费参加体验课！',
                                'picUrl'=>'http://918hhm.win/Public/weixin/cj.jpg',
                                'url'=>'http://918hhm.com/'),
                          
                         );
                    $content = '<a href="http://www.konglejiaoyu.com">孔乐</a>';
                    $template_tuWen = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <ArticleCount>".count($arr)."</ArticleCount>
                                <Articles>";
                    foreach($arr as $k=>$v){
                        $template_tuWen .= "<item>
                                <Title><![CDATA[".$v['title']."]]></Title>
                                <Description><![CDATA[".$v['description']."]]></Description>
                                <PicUrl><![CDATA[".$v['picUrl']."]]></PicUrl>
                                <Url><![CDATA[".$v['url']."]]></Url>
                                </item>";
                    }
                    $template_tuWen .="</Articles>
                                </xml>";
                    $info     = sprintf($template_tuWen, $toUser,$fromUser,$time,'news');
                    echo $info;
                break;
                case 4:
                        $arr=array(
                            array('title'=>'孔乐教育',
                                'description'=>'不好意思、我们在努力开发中...请您谅解！',
                                'picUrl'=>'http://918hhm.win/Public/slide/kongle.jpg',
                                'url'=>'http://www.konglejiaoyu.com'),
                          
                         );
                    $content = '<a href="http://www.konglejiaoyu.com">孔乐</a>';
                    $template_tuWen = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <ArticleCount>".count($arr)."</ArticleCount>
                                <Articles>";
                    foreach($arr as $k=>$v){
                        $template_tuWen .= "<item>
                                <Title><![CDATA[".$v['title']."]]></Title>
                                <Description><![CDATA[".$v['description']."]]></Description>
                                <PicUrl><![CDATA[".$v['picUrl']."]]></PicUrl>
                                <Url><![CDATA[".$v['url']."]]></Url>
                                </item>";
                    }

                    $template_tuWen .="</Articles>
                                </xml>";
                    $info     = sprintf($template_tuWen, $toUser,$fromUser,$time,'news');
                    echo $info;
                    break;
            }

            $info     = sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
            echo $info;
            }

    }

    //$url  接口url string
    //$type 请求类型string
    //$res  返回类型string
    //$arr= 请求参数string
    public function http_curl($url,$type='get',$res='json',$arr=''){

        //1.初始化curl
        $ch  =curl_init();
        //2.设置curl的参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        if($type == 'post'){
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
        }
        //3.采集
        $output =curl_exec($ch);

        //4.关闭
        curl_close($ch);
        if($res=='json'){
            if(curl_error($ch)){
                //请求失败，返回错误信息
                return curl_error($ch);
            }else{
                //请求成功，返回错误信息

                return json_decode($output,true);
            }
        }
        echo var_dump( $output );
    }

    //获取测试号微信AccessToken
    /*function  getWxAccessToken(){

        //2初始化
        $ch  =curl_init();
        //3设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        //4.调用接口
        $res =curl_exec($ch);
        //5.关闭curl
        curl_close($ch);
        if(curl_error($ch)){
            var_dump(curl_error($ch));
        }
        $arr=json_decode($res,true);
        var_dump($arr);
    }*/

    
    public function  getWxAccessToken(){
       
            //如果access_token比存在或者已经过期，重新取access_token
            //1 请求url地址
            //$wxappapi=D('weixinapi');
            //$wxappapis=$wxappapi->find(1);
            $AppId='wx28932dfa178d6d40';
            $AppSecret='8ec1eee62f6c2dd39a122948d6da6262';
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$AppId."&secret=".$AppSecret;
            $res=$this->http_curl($url,'get','json');
            echo "res";
            echo "</pre>";
            echo $res;
            echo "</pre>";
            $access_token =$res['access_token'];
            //将重新获取到的aceess_token存到session
            $_SESSION['access_token']=$access_token;
            $_SESSION['expire_time']=time()+7000;
            echo "2222";
            echo "</pre>";
            echo $access_token;
            echo "</pre>";
            return $access_token;
        
    }

    //获取微信服务器IP地址
    function  getWxServerIp(){
        $accessToken =$this->getWxAccessToken($access_token);
        $url = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$accessToken;
        $ch  =curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $res =curl_exec($ch);
        //5.关闭curl
        curl_close($ch);
        if(curl_error($ch)){
            var_dump(curl_error($ch));
        }
        $arr=json_decode($res,true);
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
    }
    //返回access_token *session解决办法 存mysql memcache
     public function sendTemplateMsg(){
        //1.获取到access_token
        $openid='oDgH2vgVRdUJRjCQK3gbVbR7uu4w';
         $wxappapi=D('weixinapi');
        $wxappapis=$wxappapi->find(1);
        $template_id=$wxappapis['template'];
        $url1=$wxappapis['url'];
        $access_token=$this->getWxAccessToken();
        $url="https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$access_token;
        //2.组装数组
            $array=array(
            'touser'=>$openid,
            'template_id'=>$template_id,
            "url"=>$url1,
            'data'=>array(
                    'first'=>array('value'=>'黄老师，您好。欢迎孔乐教育','color'=>"#173177"),
                    'keyword1'=>array('value'=>'广州番禺万利商业园','color'=>"#173177"),
                    'keyword3'=>array('value'=>'孔乐教育','color'=>"#173177"),
                    'keyword2'=>array('value'=>date('Y-m-d H:i:s'),'color'=>"#173177"),
                    'keyword4'=>array('value'=>'31141596','color'=>"#173177"),
                    'remark'=>array('value'=>'如有疑问，请及时与我们取得联系','color'=>"#173177"),
                ),

            );
        //3.将数组->json
        $postJson=json_encode($array);
        //4.调用curl函数
        $res=$this->http_curl($url,'post','json',$postJson);
        var_dump($res);
    }
    
    //群发接口
    public function sendMsgALL(){
        echo $access_token=$this->getWxAccessToken();
        echo "<hr/>";
        $url="https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=".$access_token;
        $array=array(
            'touser'=>'oDgH2vgVRdUJRjCQK3gbVbR7uu4w',//微信用户的openid
            'text'=>array('content'=>'imooc is very happy'),
            'msgtype'=>'text'
            );
        $postJson=json_encode($array);
        var_dump($postJson);
        echo "<hr/>";
        $res=$this->http_curl($url,'post','json',$postJson);
        var_dump($res);
    }
    public function material(){
        $access_token=$this->getWxAccessToken();
        $url="https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=".$access_token."&type=image";
        $ch1 = curl_init ();    $timeout = 5;   $real_path="{$_SERVER['DOCUMENT_ROOT']}{$file_info['filename']}";   //$real_path=str_replace("/", "//", $real_path);    
        $data= array("media"=>"@{$real_path}",'form-data'=>$file_info);
        curl_setopt ( $ch1, CURLOPT_URL, $url );    
        curl_setopt ( $ch1, CURLOPT_POST, 1 );  
        curl_setopt ( $ch1, CURLOPT_RETURNTRANSFER, 1 );    
        curl_setopt ( $ch1, CURLOPT_CONNECTTIMEOUT, $timeout ); 
        curl_setopt ( $ch1, CURLOPT_SSL_VERIFYPEER, FALSE );    
        curl_setopt ( $ch1, CURLOPT_SSL_VERIFYHOST, false );    
        curl_setopt ( $ch1, CURLOPT_POSTFIELDS, $data );    
        $result = curl_exec ( $ch1 );   
        curl_close ( $ch1 );    
        if(curl_errno()==0){       
         $result=json_decode($result,true);      //var_dump($result);        
         return $result['media_id'];
        }else {
             return false;   
         }
         dump(  $data );die;
    }   
}