<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 相册</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/bootstrap/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/bootstrap/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/bootstrap/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">

    <link href="/Public/bootstrap/css/animate.css" rel="stylesheet">
    <link href="/Public/bootstrap/css/style.css?v=4.1.0" rel="stylesheet">

    <style>
        .lightBoxGallery img {
            margin: 5px;
            width: 160px;
            height: 160px;
            vertical-align:middle;
        }
        .blogimg{
            height: 200px;
             margin: 5px;
            text-align: center;
            float: left;
            box-shadow:0 4px 21px rgba(107, 107, 107, 0.52)
        }
         .lightBoxGallery p{
          margin: 0 0 0;
        }
    </style>

</head>

<body>
        <div class="row" style="padding: 0px 35px 0px;">
            <div class="col-lg-12">
                        <h2>相册</h2>

                        <div class="lightBoxGallery">
                       
                        <?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blogimg">
                           <p>id：<?php echo ($vo["id"]); ?></p>
                            <a href="<?php echo ($vo["address"]); ?>" title="图片" data-gallery=""> <img src="<?php echo ($vo["address"]); ?>"></a>
                              </div><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>
                        </div>
                    </div>
            </div>

    <!-- 全局js -->
    <script src="/Public/bootstrap/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="/Public/bootstrap/js/content.js?v=1.0.0"></script>

    <!-- blueimp gallery -->
    <script src="/Public/bootstrap/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

    
    

</body>

</html>