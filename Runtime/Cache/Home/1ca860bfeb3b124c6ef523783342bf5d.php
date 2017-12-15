<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="<?php echo ($systems["keywords"]); ?>">
  <meta name="Description" content="<?php echo ($systems["describe"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="applicable-device" content="pc,mobile"/>
   <link rel="shortcut icon" href="/Public/img/favicon.ico">
      <link href='/Public/Index/css/allStyle/head-homePage-old.css' rel='stylesheet'/>
  <link href="/Public/Index/css/allStyle/header.css" rel="stylesheet">
  <link href='/Public/Index/css/allStyle/footer.css' rel='stylesheet'/>
  <link href='/Public/Index/css/allStyle/mobile.css' rel='stylesheet'/>
  <link href='/Public/Index/css/article/article.css' rel='stylesheet'/>
  <link href="/Public/share/css/share.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/Public/Admin/plugins/layui/css/layui.css" media="all" />
      <link rel="stylesheet" href="/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
  <script src ='/Public/Index/plug-in/jquery-2.2.0.min.js' type='text/javascript'></script>
  <title><?php echo ($systems["webtitle"]); ?>--<?php echo ($tptl["title"]); ?></title>
  </head>
  <body style='background-color:#313131'>
    <!--页头-->
  <!--页头-->
  <div class="blog-header">
    <div class="header-topBar">
      <div class="topBar-container">
        <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="topBar-home1"><a href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class='header'>
          <div class='header-container'>
          
            <div class='container-nav'>
              <ul class='nav-list'>
                <li class='plug-pop list-item' data-pop='trigger:pop-member;event:click;effect:slideDown;'>
                  <p>会员登录</p><span><i></i></span>
                  <div class='container-member  pop-trigger' id='pop-member'>
                    <ul class='member-top'>
                      <li>
                        <div class='list-preview'>
                            <img src="/Public/Index/image/topbar/coww.jpg">
                        </div>
                        <p>会员账号</p>
                      </li>
                      <li>
                        <a href="/qqLogin/index.php">
                          <div class='list-preview'>
                            <img src="/Public/Index/image/topbar/qq.jpg">
                          </div>
                          <p>QQ账号</p>
                        </a>
                      </li>
                      <li>
                        <a href="/plus/weixin.php">
                          <div class='list-preview'>
                              <img src="/Public/Index/image/topbar/weixin.jpg">
                          </div>
                          <p>微信账号</p>
                        </a>
                      </li>
                      <li>
                        <div class='list-preview'>
                            <img src="/Public/Index/image/topbar/sina.jpg">
                          </div>
                          <p>新浪账号</p>
                      </li>
                    </ul>
                    <div class='member-bottom'>
                      <div>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($blog_find["qq"]); ?>&site=qq&menu=yes">
                          <p>与博主聊人生</p>
                          <img border="0" src="http://wpa.qq.com/pa?p=2:595700844:52" alt="点击这里给我发消息" title="点击这里给我发消息"/>
                        </a>
                      </div>
                      <div>
                        <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=34cf84d3b4992dffdad4efd722aeb16d94e99473e8cdce4fbb1bc1477c986512">
                          <p>讨论群:</p>
                          <img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="学习生活帮" title="学习生活帮">
                        </a>
                      </div>
                    </div>
                </div>
                </li>
                <li class='plug-pop list-item' data-pop='trigger:pop-friend;event:click;effect:slideDown;'>
                  <p>友情链接</p><span><i></i></span>
                  <div class='container-friend pop-trigger' id='pop-friend'>
                    <ul class='friend-wrapper'>
                    <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href='<?php echo ($vo["link"]); ?>' target='_blanket'>
                           <div class='feature' style='background-image:url(<?php echo ($vo["pic"]); ?>)'>
                              <div class='feature-mask'>
                                <span class='mask-circular'></span>
                                <p></p>
                              </div>
                           </div>
                           <p><?php echo ($vo["name"]); ?></p>
                        </a>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                  </div>
                </li>
                <li class='last list-item'><p>博主信息</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu">

      <div class="menu-container">
        <div class="bar-logo">
          <div class="logo-cow"></div>
          <div class="logo-info"></div>
        </div>
        <div class="menu-lt menu">
              <a href="<?php echo u('index/cate',array('id'=>$cates1[id]));?>"><?php echo ($cates1["name"]); ?></a>
              <a href="<?php echo u('index/cate',array('id'=>$cates2[id]));?>"><?php echo ($cates2["name"]); ?></a>
        </div>
        <div class="menu-rt menu">
              <a href="<?php echo u('index/cate',array('id'=>$cates3[id]));?>"><?php echo ($cates3["name"]); ?></a>
              <a href="<?php echo u('index/cate',array('id'=>$cates4[id]));?>"><?php echo ($cates4["name"]); ?></a>
        </div>
        <div class="menu-logo"></div>
        <form name="formsearch" class="dede-form menu-search" action="<?php echo u('Index/search');?>" method="post">
        <input  class="search-form" placeholder="输入关键字" name="kw" value="<?php echo I('kw');?>" placeholder="面向对象" type="text">
        <button lass="submit" type="submit"><span><i class='icon-prev'>&#xe620;</i></span></button>
      </form>
      </div>
      
    </div>
  </div>
   <div class='article-bd'>
    <div class='bd-wrapper'>
      <div class='bd-sidelist'>
        <div class='sidelist-tip tip'><p><i>&#xe621;</i>热门推荐</p></div>
        <div class='sidelist-menu'>
          <ul class='sidelist-list'>
            <?php if(is_array($tptb)): $i = 0; $__LIST__ = $tptb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>1</span><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
      <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/Index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
      <div class='bd-container'>
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
            <a class="bds_qzone"></a>
            <a class="bds_tsina"></a>
            <a class="bds_tqq"></a>
            <a class="bds_renren"></a>
            <a class="bds_douban db"></a>
            <a class="bds_sqq sqq"></a>
            <a class="bds_kaixin001 kxw"></a>
            <a class="bds_fbook facebook"></a>
            <a class="bds_twi twitter"></a>
            <span class="bds_more"></span>
         </div>
        <div class='container-tip tip'>
          <i>&#xe629;</i>博文正文
        </div>
        <div class='container-wrapper'>
          <div class='container-info'>
            <div class='info-title'>
              <h1><?php echo ($tptl["title"]); ?></h1>
            </div>
             <div class='info-inner'>
                <ul class='inner-lt'>
                  <li>作者 : <?php echo ($tptl["author"]); ?></li>
                  <li>时间 ：<?php echo (date("Y-m-d H:i:s",$tptl["time"])); ?></li>
                  <li>来源 ：<?php echo ($tptl["source"]); ?></li>
                  <li>观看 ：</li>
                </ul>
                <div class='inner-gt'>当前位置: <a href=''>主页</a> > <?php if(C('WEB_URL') == 1): ?><a href="/index/<?php echo ($tpti["id"]); ?>.html"><?php else: ?>
          <a href="<?php echo U('Home/index/cate',array('id'=>$tpti['id']));?>"><?php endif; echo ($tpti["name"]); ?></a> > </div>
            </div>
            <div class='info-article'>
              <?php echo ($content); ?>
               <p>
                (责任编辑：)
               </p>
            </div>
            
            <div class="info-select">
                <div class="select-wrapper newdigg" id="newdigg">
                  <a class="zan" id="<?php echo ($tptl["id"]); ?>" href="javascript:void(0);">
                  <div class="diggbox digg_good" >
                    
                    <div class="digg_act">
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                      &nbsp;
                      顶一下
                    </div>
                    <div class="digg_num"><?php echo ($tptl["zan"]); ?></div>
                  </div>
                  </a>
                  <div class="diggbox digg_bad" >
                    <div class="share-demo">
                     <a href="javascript:void(0)" class="share" style="color: #fff;"><div >
                     <i class="fa fa-share-alt" aria-hidden="true"></i>
                      &nbsp;分享
                     </div>
                    </a>
                    </div>
                </div>
              </div>
            </div>        
            <script type="text/javascript" src="/Public/Admin/plugins/layui/layui.js"></script>
            <script type="text/javascript">
            layui.use(['form'], function() {
              var form = layui.form(),
                layer = layui.layer;
            $(".zan").on('click',function(){
                    var Oa=$(this);
                    var id=Oa.attr('id');//获取id属性
                    //alert(id);
                    var vl=Oa.find(".digg_num").text();
                        vl=parseInt(vl)+1;
                       
                    $.post('/index.php/Home/Index/zan',{id:id},function(data){
                        if(data.status==1){ 
                            layer.msg('感谢您的支持！',{ time: 800,});//模拟异步数据加1
                            Oa.find(".digg_num").text(vl);//页面元素加1
                            Oa.find(".digg_act").css('color','#ff6262');
                        }else{
                            layer.msg('您已经点过赞了,不要重复哦！',{ time: 1200,});
                            Oa.find(".digg_act").css('color','#ff6262');
                        }
                    },'json'); 
                })
            });
            </script>
            <!--分享-->
            <script type="text/javascript" src="/Public/share/js/share.js"></script>
            <script  type="text/javascript">
              $('.share').shareConfig({
                Shade : true, //是否显示遮罩层
                Event:'click', //触发事件
                Content : 'Share', //内容DIV ID
                Title : '我爱分享' //显示标题
              });
            </script>
          </div>
        </div>
      </div>
      <div class='bd-sideHero'>
         <div class='sidelist-tip tip'><p><i>&#xe627;</i>类目指引</p></div>
          <div class='sideHero-prev sideHero-container plug-carousel' data-carousel='effect:scrollX;delay:300;auto:false'>
            <div class='sideHero-box'>
              <div class='box-previewer'>
                <ul class='previewer-menu container'>  
                  <?php if(is_array($tptj)): $i = 0; $__LIST__ = $tptj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                      <div class='menu-flag'><?php echo ($tpti["name"]); ?> </div>
                      <div class='menu-info'><?php echo ($vo["title"]); ?></div>
                      <a href="<?php echo U('Home/index/cate',array('id'=>$tpti['id']));?>" target='_blank'>
                        <div class='menu-btn'>前往查看</div>
                      </a>
                      <div class='menu-feature'><a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blank'><?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?></a></div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
                </ul>
              </div>
              <div class='box-prev contral prev'>&lt</div>
              <div class='box-next contral next'>&gt</div>
              <div class='box-tab'>
                <ul class='tab-list tab'>
                  <li class='first active'></li><li></li><li></li><li></li>
                </ul>
              </div>
            </div>
          </div>
          <div class='sideHero-last sideHero-container plug-carousel' data-carousel='effect:scrollX;delay:300;auto:false'>
            <div class='sideHero-box'>
              <div class='box-previewer'>
                <ul class='previewer-menu container'>
                   <?php if(is_array($tptc)): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                      <div class='menu-flag'>
                         精选内容
                      </div>
                      <div class='menu-info'><?php echo ($vo["title"]); ?></div>
                      <?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
      <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/Index/article',array('id'=>$vo['id']));?>"><?php endif; ?><div class='menu-btn'>前往查看</div></a>
                      
                      <div class='menu-feature'><a href="<?php echo U('Home/Index/article',array('id'=>$vo[id]));?>" target='_blank'><?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?></a></div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
              <div class='box-prev contral prev'>&lt</div>
              <div class='box-next contral next'>&gt</div>
              <div class='box-tab'>
                <ul class='tab-list tab'>
                  <li class='first active'></li><li></li><li></li><li></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div id='mode-choose'>
    <div class='night-mode mode'></div>
    <div class='day-mode mode active'></div>
  </div>
  <div style="height: 80px;"></div>
<!--footer-->
 <!--页尾-->

<div class="blog-footer">
<img src="/Public/Index/image/footer/logo.png">
<p> &copy; Copyright 2016-2023 Hhm 版权所有 &nbsp;<a href="http://www.miitbeian.gov.cn/"><?php echo ($systems["icp"]); ?></a></p> 
</div>
<script src = '/Public/Index/js/Popup.js' type='text/javascript'></script>
<script src = '/Public/Index/js/banner.js' type='text/javascript'></script>
<script>
!(function(){
  //侧栏调整
  var $sideList = $('.sidelist-list').find('span');
  $.each($sideList,function(i){
    if(i<3) $(this).parent().addClass('hot');
    $(this).text(i+1);
  })

  //调用pop函数
  var $pop = $('.plug-pop');
  $.each($pop,function(){
    var data = $(this).data('pop'),
      option = getOption(data);
    $(this).Popup(option);
  });

  //文章页调整
  var $sizeImg = $('.info-article').find('img').not('.icon');
  function resizeImg(){
    if($(window).width()<1023){
        screenSize(100+'%','auto')
    }else{
        screenSize('auto','auto')
    }
  }
  function screenSize(w,h){
      $.each($sizeImg,function(){
        $(this).css({'width':w,'height':h});
      });
    }
  resizeImg();
  $(window).on('resize',function(){resizeImg()});

  //轮播调用
  var $carousel = $('.plug-carousel');
  $.each($carousel,function(){
    var data = $(this).data('carousel'),
      option = getOption(data);
    $(this).Carousel($(this),option);
  });

  function getOption(data){
    var option = {},
      op = data.replace('hover','mouseenter').split(';');
    $.each(op,function(){
      if(this!=''){
        var attr = this.split(':');
        option[attr[0]] = attr[1];
      };
    });
    return option;
  };
})();
</script>
<script>
 //白夜间模式
window.onload=function(){
  var $mode = $('#mode-choose').children(),
      $colorObj = new Array();
  $.each($mode,function(){
    $(this).on('click',function(){
      if($(this).index()){
        $(this).removeClass('active').prev().addClass('active');
        $('body').css('background','#fff');
        addC($colorObj);;
      }else{
        $(this).removeClass('active').next().addClass('active');
        $('body').css('background','#313131');
        removeC($colorObj);
      }
    })
  });
  function addC(obj){
    $.each(obj,function(){
      $(this).addClass('active');
    });
  };
  function removeC(obj){
    $.each(obj,function(){
      $(this).removeClass('active');
    });
  };
};
</script>
<!--百度推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>