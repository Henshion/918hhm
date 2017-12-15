<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="<?php echo ($systems["keywords"]); ?>">
  <meta name="Description" content="<?php echo ($systems["describe"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="applicable-device" content="pc,mobile"/>
  <link rel="shortcut icon" href="/Public/img/favicon.ico">
  <link href='/Public/Index/css/allStyle/head-homePage-old.css' rel='stylesheet'/>
  <link href='/Public/Index/css/index/index-old.css' rel='stylesheet'/>
  <link href="/Public/Index/css/allStyle/header.css" rel="stylesheet">
  <link href="/Public/Index/css/allStyle/footer.css" rel="stylesheet">
  <link href='/Public/Index/css/allStyle/footer-old.css' rel='stylesheet'/>
  <link href='/Public/Index/css/allStyle/mobile.css' rel='stylesheet'/>
  <link href='/Public/Index/css/allStyle/mobile-old.css' rel='stylesheet'/>
  <link rel="stylesheet" href="/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
  <script src = '/Public/Index/plug-in/jquery-2.2.0.min.js' type='text/javascript'></script>
  <script src = '/Public/Index/plug-in/jquery.mousewheel.js' type='text/javascript'></script>
  <title><?php echo ($systems["webtitle"]); ?></title>
  <body>
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
<!--上栏-->
  <!--前瞻-->
  <div class='perview'>
  	<div class='perview-banner plug-carousel' data-carousel='effect:fade;delay:1500;time:6000'>
  		<ul class='banner-wrapper container'>
        <li class='item-0' style='background-image:url(<?php echo ($slides_1["address1"]); ?>)'>
          <a href='<?php echo ($slides_1["link"]); ?>' target='_blank'></a>
        </li>
  			<li class='item-1' style='background-image:url(<?php echo ($slides_2["address1"]); ?>)'>
          <a href='<?php echo ($slides_2["link"]); ?>' target='_blank'>
            <img class='img-1' src='<?php echo ($slides_2["address2"]); ?>'/>
            <img class='img-2' src='<?php echo ($slides_2["address3"]); ?>'/>
          </a>
        </li>
  			<li class='item-2' style='background-image:url(<?php echo ($slides_3["address1"]); ?>)'>
          <a href='<?php echo ($slides_3["link"]); ?>' target='_blank'>
            <img class='img-1' src='<?php echo ($slides_3["address2"]); ?>'/>
            <img class='img-2' src='<?php echo ($slides_3["address3"]); ?>'/>
          </a>       
        </li>
  			<li class='item-3' style='background-image:url(<?php echo ($slides_4["address1"]); ?>)'>
          <a href='<?php echo ($slides_4["link"]); ?>' target='_blank'>
            <img src='<?php echo ($slides_4["address2"]); ?>'/>
          </a>
        </li>
        <li class='item-4' style='background-image:url(<?php echo ($slides_5["address1"]); ?>)'>
           <a href='<?php echo ($slides_5["link"]); ?>' target='_blank'></a>
        </li>
        <li class='item-5' style='background-image:url(<?php echo ($slides_6["address1"]); ?>)'>
          <a href='<?php echo ($slides_6["link"]); ?>' target='_blank'>
            <img src='<?php echo ($slides_6["address2"]); ?>'/>
          </a>
        </li>
  		</ul>
      <div class='banner-tab'>
        <ul class='tab-wrapper tab'>
          <li class='first'></li><li></li><li></li><li></li><li></li><li></li>
        </ul>
      </div>
      <div class='banner-control'>
        <div class='control-prev control prev'>&#xe618;</div>
        <div class='control-next control next'>&#xe606;</div>
      </div>
  	</div>
  </div>
  <!--身体部分-->
  <div class='blog-bd'>
    <!--成长部分-->
    <div class='bd-grow'>
      <div class='grow-hd bd-hd'>
         <div class='hd-title'>
            <span>&#xe624;</span>
            <h2><-博主的成长历程-></h2>
         </div>
         <div class='hd-menu'>
            <ul class='menu-list'>
              <li><i>more..</i><div class='hot'>&#xe608;</div></li>
            </ul>
         </div>
       </div>
      <div class='grow-container large-container'>
        <ul class='container-item'>
          <li class='item item-1'>
            <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_2['id']));?>" target='_blank'>
              <div class='item-viewport' style='background-image:url(/Public/Index/image/grow/item-1.jpg)'>
                <div class='viewport-mask'></div>
                <div class='viewport-info'>
                  <img src='/Public/Index/image/grow/item-1-info.png'>
                </div>
                <div class='viewport-icon'>
                  <img src='/Public/Index/image/grow/item-1-img.png'>
                </div>
              </div>
            </a>
            <div class='item-inner'>
              <p>流畅效率书写Html,css代码,清楚各大浏览器兼容问题,对css3动画有极高的创造力,并能熟练书写响应式H5页面</p>
            </div>
          </li>
          <li class='item item-2'>
            <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_1['id']));?>" target='_blank'>
              <div class='item-viewport' style='background-image:url(/Public/Index/image/grow/item-2.jpg)'>
                <div class='viewport-mask'></div>
                <div class='viewport-info'>
                  <img src='/Public/Index/image/grow/item-2-info.png'>
                </div>
                <div class='viewport-icon'>
                  <img src='/Public/Index/image/grow/item-2-img.png'>
                </div>
              </div>
            </a>
            <div class='item-inner'>
              <p>对php拥有浓厚兴趣.熟悉框架(Thinkphp),还在不断学习中...</p>
            </div>
          </li>
          <li class='item item-3'>
            <a href="" target='_blank'>
              <div class='item-viewport' style='background-image:url(/Public/Index/image/grow/item-3.jpg)'>
                <div class='viewport-mask'></div>
                <div class='viewport-info'>
                  <img src='/Public/Index/image/grow/item-3-info.png'>
                </div>
                <div class='viewport-icon'>
                  <img src='/Public/Index/image/grow/item-3-img.png'>
                </div>
              </div>
            </a>
            <div class='item-inner'>
              <p>光哥,请拯救我的JAVA吧,威兄,我的js就靠你了...</p>
            </div>
          </li>
          <li class='item item-4'>
            <a href='#' target='_blank'>
              <div class='item-viewport' style='background-image:url(/Public/Index/image/grow/item-4.jpg)'>
                <div class='viewport-mask'></div>
                <div class='viewport-info'>
                  <img src='/Public/Index/image/grow/item-4-info.png'>
                </div>
                <div class='viewport-icon'>
                  <img src='/Public/Index/image/grow/item-4-img.png'>
                </div>
              </div>
            </a>
            <div class='item-inner'>
              <p>略懂服务器,会搭虚拟主机,目前正努力学习linux</p>
            </div>
          </li>
        </ul>
      </div>
      <div class='bd-more'>
        <div class='more-enter'><i>&#xe627;</i>我想知道更多..</div>
      </div>
    </div>
     <!--音乐部分-->
    <div class='bd-music'>
       <div class='page-hd bd-hd'>
         <div class='hd-title'>
            <span style='line-height:25px;'>&#xe60c;</span>
            <h2><-喜欢的歌-></h2>
         </div>
       </div>
       <div class='music-container plug-carousel' data-carousel='effect:musicX;auto:false;delay:500;'>
        <audio id="Audio" autoplay='autoplay'>
          <source src="" type="audio/mpeg">
          你的浏览器不支持该功能！！
        </audio>
        <div class='music-box'>
          <div class='box-controls' id='controls'>
             <div class='prev'></div>
             <div class='play'></div>
             <div class='pause'></div> 
             <div class='next'></div>
          </div>
          <div class='box-cd active' style='background-image:url(/Public/Index/image/music/1.png)'></div>
          <div class='box-container'>
              <h4><i>&#xe622;</i><span></span></h4>
              <ul class='box-menu clearfix tab'>
                  <li class='active'></li>
                  <li class='m-1'></li>
                  <li class='m-2'></li>
                  <li class='m-3'></li>
              </ul>
          </div>
        </div>
        <div class='music-viewport'>
          <ul class='viewport-list container'>
            <li style='background-image:url(/Public/Index/image/music/3.jpg);'></li>
            <li style='background-image:url(/Public/Index/image/music/2.jpg);'></li>
            <li style='background-image:url(/Public/Index/image/music/1.jpg);'></li>
            <li style='background-image:url(/Public/Index/image/music/4.jpg);'></li>
          </ul>
        </div>
       </div>
    </div>
       <!--php功能部分-->
    <div class='bd-page'>
      <div class='page-hd bd-hd'>
        <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_1['id']));?>">
         <div class='hd-title'>
            <span><i class="fa fa-product-hunt" aria-hidden="true"></i></span>
            <h2><-php功能开发-></h2>
         </div>
         <div class='hd-menu'>
            <ul class='menu-list'>
              <li><i>Thinkphp</i><span>/</span></li>
              <li><i>微信</i><span>/</span></li>
              <li><i>AJAX</i><span>/</span></li>
              <li><i>更多资料..</i><div class='hot'>&#xe608;</div></li>
            </ul>
         </div>
         </a>
      </div>
      <div class='page-container large-container'>
        <ul class='container-items'>
        <?php if(is_array($articles_1)): $i = 0; $__LIST__ = $articles_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='top'>
            <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blank'>
              <div class='items-perviewer'>
                 <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
              </div>
              <div class='items-info'>
                <h3><?php echo ($vo["title"]); ?></h3>
                <div class='items-inner'>
                   <p><?php echo ($vo["description"]); ?>...</p>
                </div>
                <div class='items-rooter'>
                    <div class='author'><span>&#xe61f;</span><p><?php echo ($vo["author"]); ?></p></div>
                    <div class='time'><span>&#xe61d;</span><p><?php echo (date("Y-m-d H:i",$vo["time"])); ?></p></div>
                </div>
              </div>
            </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class='bd-more'>
        <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_1['id']));?>"><div class='more-enter'><i>&#xe627;</i>我想看到更多..</div></a>
      </div>
    </div>
    <!--特效部分-->
    <div class='bd-color-wrapper' style='background-color:#49627B;'>
      <div class='bd-effect bd-column'>
        <div class='column bd-hd'>
           <div class='hd-title'>
              <span><i class="fa fa-css3" aria-hidden="true"></i></span>
              <h2><-web特效专栏-></h2>
           </div>
           <div class='hd-menu'>
              <ul class='menu-list'>
                <li><i>css3特效</i><span>/</span></li>
                <li><i>Js,Jq特效</i><span>/</span></li>
                <li><i>jq css3结合特效</i><span>/</span></li>
                <li><i>更多资料..</i><div class='hot' style='color:#FFED5F'>&#xe608;</div></li>
              </ul>
           </div>
        </div>
        <div class='column-container large-container'>
          <div class='column-lt column-wrapper plug-carousel' data-carousel='effect:fade;delay:600;auto:false;'>
            <div class='column-preview'>
              <ul class='preview-list container'>
              <?php if(is_array($articles_2)): $i = 0; $__LIST__ = $articles_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                  <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blank'>
                    <div class='list-pic'>
                       <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
                    </div>
                  </a>
                  <div class='list-info'>
                    <div class='info-title'>
                      <h4 class='title-name'><?php echo ($vo["title"]); ?></h4>
                      <div class='title-inner'>
                        <div class='inner-author'><i class='icon-author'>&#xe609;</i><p><?php echo ($vo["author"]); ?></p></div>
                        <div class='inner-time'><i class='icon-time'>&#xe61d;</i><p><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></p></div>
                      </div>
                    </div>
                    <div class='info-text'>
                      <p><?php echo ($vo["description"]); ?>...</p>
                    </div>
                  </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
            <div class='column-tab'>
              <ul class='tab-list tab'>
                <li class='first'></li><li></li><li></li><li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--插件开发-->
    <div class='bd-wedget'>
      <div class='wedget-hd bd-hd'>
           <div class='hd-title'>
              <span><i class="fa fa-html5" aria-hidden="true"></i></span>
              <h2><-前端插件封装-></h2>
           </div>
            <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_3['id']));?>"><div class='hd-menu'>
              <ul class='menu-list'>
                <li><i>纯静态面</i><span>/</span></li>
                <li><i>交互式页面</i><span>/</span></li>
                <li><i>响应式页面</i><span>/</span></li>
                <li><i>更多资料..</i><div class='hot'>&#xe608;</div></li>
              </ul>
           </div>
           </a>
      </div>
      <div class='page-container large-container'>
          <ul class='container-items'>
          <?php if(is_array($articles_3)): $i = 0; $__LIST__ = $articles_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='top'>
              <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blank'>
              <div class='items-perviewer'>
                <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
              </div>
              <div class='items-info'>
                <h3><?php echo ($vo["title"]); ?></h3>
                <div class='items-inner'>
                   <p><?php echo ($vo["description"]); ?>...</p>
                </div>
                <div class='items-rooter'>
                    <div class='author'><span>&#xe61f;</span><p><?php echo ($vo["author"]); ?></p></div>
                    <div class='time'><span>&#xe61d;</span><p><?php echo (date("Y-m-d H:i",$vo["time"])); ?></p></div>
                </div>
              </div>
              </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
      </div>
      <div class='bd-more'>
         <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_3['id']));?>"><div class='more-enter'><i>&#xe627;</i>我想看到更多..</div></a>
      </div>
    </div>
     <!--生活记忆-->
    <div class='bd-article'>
      <div class='article-hd bd-hd'>
           <div class='hd-title'>
              <span><i class="fa fa-yelp" aria-hidden="true"></i></span>
              <h2><-生活记忆-></h2>
           </div>
            <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_4['id']));?>"><div class='hd-menu'>
              <ul class='menu-list'>
                <li><i>更多资料..</i><div class='hot'>&#xe608;</div></li>
              </ul>
           </div>
           </a>
      </div>
      <div class='page-container large-container'>
          <ul class='container-items'>
           <?php if(is_array($articles_4)): $i = 0; $__LIST__ = $articles_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='top'>
            <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blank'>
              <div class='items-perviewer'>
                <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
              </div>
              <div class='items-info'>
                <h3><?php echo ($vo["title"]); ?></h3>
                <div class='items-inner'>
                   <p><?php echo ($vo["description"]); ?></p>
                </div>
                <div class='items-rooter'>
                    <div class='author'><span>&#xe61f;</span><p><?php echo ($vo["author"]); ?></p></div>
                    <div class='time'><span>&#xe61d;</span><p><?php echo (date("Y-m-d H:i",$vo["time"])); ?></p></div>
                </div>
              </div>
            </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
      </div>
      <div class='bd-more'>
        <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_4['id']));?>"><div class='more-enter'><i>&#xe627;</i>我想看到更多..</div></a>
      </div>
    </div>
    <!--ps作品-->
    <div class='bd-column bd-ps'>
      <div class='ps-hd bd-hd'>
          <div class='hd-title'>
              <span style='font-size:.15rem;'>&#xe607;</span>
              <h2><-ps作品-></h2>
          </div>
            <a href="<?php echo U('Home/index/cate',array('id'=>$tpti_5['id']));?>"><div class='hd-menu'>
              <ul class='menu-list'>
                <li><i>展架</i><span>/</span></li>
                <li><i>网页类设计</i><span>/</span></li>
                <li><a href='../a/Pszuopin/'><i>更多作品..</i><div class='hot'>&#xe608;</div></a></li>
              </ul>
          </div>
          </a>
      </div>
      <div class='column-container large-container'>
          <div class='column-lt column-wrapper plug-carousel' data-carousel='effect:fade;delay:600;auto:false;'>
            <div class='column-preview'>
              <ul class='preview-list container'>
                <?php if(is_array($articles_5)): $i = 0; $__LIST__ = $articles_5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                  <div class='list-pic'>
                    <a href="<?php echo U('Home/Index/article1',array('id'=>$vo[id]));?>" target='_blanket'>
                      <?php if($vo[pic] != ''): ?><img src="/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                        <?php else: ?> 
                            <img src="/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
                    </a>
                  </div>
                  <div class='list-info'>
                    <div class='info-title'>
                      <h4 class='title-name'><?php echo ($vo["title"]); ?></h4>
                      <div class='title-inner'>
                        <div class='inner-author'><i class='icon-author'>&#xe609;</i><p><?php echo ($vo["author"]); ?></p></div>
                        <div class='inner-time'><i class='icon-time'>&#xe61d;</i><p><?php echo (date("Y-m-d H:i",$vo["time"])); ?></p></div>
                      </div>
                    </div>
                    <div class='info-text'>
                      <p><?php echo ($vo["description"]); ?></p>
                    </div>
                  </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
            <div class='column-tab'>
              <ul class='tab-list tab'>
                <li class='first'></li><li></li><li></li><li></li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!--测导航部分-->
  <div class='blog-SideNav'>
    <div class='sideNav-menu'>
      <ul class='menu-list'>
        <li>历程</li>
        <li>音乐</li>
        <li>功能</li>
        <li>特效</li>
        <li>插件</li>
        <li>文章</li>

        <li>p图</li>
      </ul>
    </div>
    <div class='sideNav-forTop goTop'><i>&#xe612;</i></div>
    <div class='sideNav-lineHeight'>
        <div class='lineHeight-img'></div>
        <div class='lineHeight-num'><span class='num'>2923</span>m</div>
    </div>
  </div>
  <div style="height: 55px;"></div>
   <!--页尾-->

<div class="blog-footer">
<img src="/Public/Index/image/footer/logo.png">
<p> &copy; Copyright 2016-2023 Hhm 版权所有 &nbsp;<a href="http://www.miitbeian.gov.cn/"><?php echo ($systems["icp"]); ?></a></p> 
</div>
  <script src = '/Public/Index/js/banner.js' type='text/javascript'></script>
  <script src = '/Public/Index/js/Popup.js' type='text/javascript'></script>
  <script src = '/Public/Index/js/nav.js' type='text/javascript'></script>
  <script src = '/Public/Index/js/sideNav.js' type='text/javascript'></script>
  <script src = '/Public/Index/js/global.js' type='text/javascript'></script>
  <script src = '/Public/Index/js/grow.js' type='text/javascript'></script>
</body>
</html>