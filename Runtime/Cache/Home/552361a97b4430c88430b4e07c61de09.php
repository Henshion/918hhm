<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="<?php echo ($systems["keywords"]); ?>">
  <meta name="Description" content="<?php echo ($systems["describe"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="applicable-device" content="pc,mobile">
    <link rel="shortcut icon" href="/Public/img/favicon.ico">
    <link href='/Public/Index/css/allStyle/head-homePage-old.css' rel='stylesheet'/>
  <link href="/Public/Index/css/allStyle/header.css" rel="stylesheet">
  <link href="/Public/Index/css/allStyle/footer.css" rel="stylesheet">
  <link href="/Public/Index/css/allStyle/mobile.css" rel="stylesheet">
  <link href="/Public/Index/css/article/list-article.css" rel="stylesheet">

  <link rel="stylesheet" href="/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
  <script src="/Public/Index/plug-in/jquery-2.2.0.min.js" type="text/javascript"></script>
  <title><?php echo ($systems["webtitle"]); ?></title>
  <!--头部-->

  </head>
  <body>
  <iframe frameborder="0" style="display: none;"></iframe>
  <div id="bdshare_s" style="display: block;">
  <iframe id="bdsIfr" style="position:absolute;display:none;z-index:9999;" frameborder="0"></iframe>
  <div id="bdshare_m" style="display: none;">
  <div id="bdshare_m_c"><h6>分享到</h6><ul><li><a href="#" class="bds_mshare mshare">一键分享</a></li><li><a href="#" class="bds_qzone qqkj">QQ空间</a></li><li><a href="#" class="bds_tsina xlwb">新浪微博</a></li><li><a href="#" class="bds_bdysc bdysc">百度云收藏</a></li><li><a href="#" class="bds_renren rrw">人人网</a></li><li><a href="#" class="bds_tqq txwb">腾讯微博</a></li><li><a href="#" class="bds_bdxc bdxc">百度相册</a></li><li><a href="#" class="bds_more">更多...</a></li></ul><p><a href="#" class="goWebsite">百度分享</a></p></div></div></div>
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
                           <div class='feature' style='background-image:url(image/topbar/ks.jpg)'>
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
  <!--主体-->
  <div class="article-list-bd">
    <div class="bd-wrapper">
      <div class="bd-hd">
        <div class="bd-container">
          <ul class="container-menu">
          <?php if(is_array($tptj)): $i = 0; $__LIST__ = $tptj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <div class="menu-info">
                <div class="info-triangle"></div>
                <div class="info-perview">
                  <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                    <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
                    <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
                    <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
                    <a class="bds_renren" title="分享到人人网" href="#"></a>
                    <a class="bds_douban db" href="#"></a>
                    <a class="bds_sqq sqq" href="#"></a>
                    <a class="bds_kaixin001 kxw" href="#"></a>
                    <a class="bds_fbook facebook" href="#"></a>
                    <a class="bds_twi twitter" href="#"></a>
                    <span class="bds_more"></span>
                  </div>
              <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
                  </a>
                </div>
                <div class="info-inner">
                  <h3><span>[ <a href="#"><?php echo ($vo["view"]); ?></a> ]</span><?php echo ($vo["title"]); ?></h3>
                  <div class="inner-brief">
                   <?php echo ($vo["description"]); ?>...
                  </div>
                  
                  <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>">
                  <div class="inner-enter">
                      <div class="enter-btn">
                          <p>点击阅读</p>
                           <i class="fa fa-file-text-o" aria-hidden="true"></i>
                      </div>
                  </div>
                  </a>
                  <div class="inner-dialog">
                    <div class="time">
                      <i class="fa fa-user-o" aria-hidden="true"></i><?php echo ($vo["author"]); ?>
                      <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?>
                    </div>
                    <div class="another">
                      <ul>
                         <li><i class="fa fa-eye" aria-hidden="true"></i>251</li>
                        <li><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo ($vo["zan"]); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-timeAxis">
                <div class="timeAxis-topLine line"></div>
                <div class="timeAxis-ball"><span></span><p class="time"><?php echo (date("Y-m-d",$vo["time"])); ?></p></div>
                <div class="timeAxis-bottomLine line"></div>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <div class="bd-index">
            <div class="index-list">
              <div class="page">
              <?php echo ($page); ?>
              </div>
           </div>
          </div>
        </div>
        <div class="bd-sidebar">
          <div class="sidebar-column sidebar">
            <div class="sidebar-container">
              <h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>热门推荐</h3>
              <ul class="sidebar-menu">
              <?php if(is_array($tptb)): $i = 0; $__LIST__ = $tptb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
    <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/Index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            </div>
          </div>
          <div class="sidebar-hot sidebar">
            <div class="sidebar-container">
              <h3><i class="fa fa-tags" aria-hidden="true"></i>精选内容</h3>
              <ul class="sidebar-menu">
                <?php if(is_array($tptc)): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
      <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/Index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
 <!--页尾-->

<div class="blog-footer">
<img src="/Public/Index/image/footer/logo.png">
<p> &copy; Copyright 2016-2023 Hhm 版权所有 &nbsp;<a href="http://www.miitbeian.gov.cn/"><?php echo ($systems["icp"]); ?></a></p> 
</div>

<script src="/Public/Index/js/Popup.js" type="text/javascript"></script>
<script>
(function(){
  var $pop = $('.plug-pop');
  $.each($pop,function(){
    var data = $(this).data('pop'),
      option = getOption(data);
    $(this).Popup(option);
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
  var $resultNum =  $('.container-menu').find('li').size(),
      $index = $('.bd-index');
  if(!$resultNum){
    $('<div class="no-index">您搜索的内容为空..</div>').prependTo($('.bd-container'));
  }
})();
</script>

</body></html>