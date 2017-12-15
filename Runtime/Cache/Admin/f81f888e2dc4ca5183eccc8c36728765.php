<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 主页</title>

     <link href="/Public/bootstrap/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/bootstrap/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/bootstrap/css/animate.css" rel="stylesheet">
    <link href="/Public/bootstrap/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row row-sm text-center">
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="h1 text-info font-thin h1">521</div>
                                    <span class="text-muted text-xs">文章</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo u('img/imglst');?>">
                                    <div class="panel padder-v item bg-info">
                                        <div class="h1 text-fff font-thin h1">521</div>
                                        <span class="text-muted text-xs">相册</span>
                                        <div class="top text-right w-full">
                                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item bg-primary">
                                    <div class="h1 text-fff font-thin h1">521</div>
                                    <span class="text-muted text-xs">评论</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="font-thin h1">$129</div>
                                    <span class="text-muted text-xs">访问</span>
                                    <div class="bottom text-left">
                                        <i class="fa fa-caret-up text-warning m-l-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>个人资料</h5>
                            </div>
                            <div>
                                <div class="ibox-content no-padding border-left-right">
                                    <img alt="image" class="img-responsive" src="img/profile_big.jpg">
                                </div>
                                <div class="ibox-content profile-content">
                                    <h4><strong>Hhm</strong></h4>
                                    <p><i class="fa fa-map-marker"></i> 广州大石</p>
                                    <h5>
                                            关于我
                                        </h5>
                                    <p>
                                        专注php、会点前端技术，div+css啊，jQuery之类的，不是很精；热爱生活，热爱互联网，热爱新技术；有一个小的团队，在不断的寻求新的突破。
                                    </p>
                                    <div class="user-button">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> 发送消息</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> 赞助</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="ibox float-e-margins">
                <div class="" id="ibox-content">

                    <div id="vertical-timeline" class="vertical-container light-timeline">
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>ASDASDAS</h2>
                                <p>AASDASDASD。
                                </p>
                                <a href="#" class="btn btn-sm btn-primary"> 查看详细</a>
                                <span class="vertical-date">
                            今天 <br>
                            <small>7月25日</small>
                        </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon blue-bg">
                                <i class="fa fa-file-text"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>给张三发送XX</h2>
                                <p>ASDASDAS</p>
                                <a href="#" class="btn btn-sm btn-success"> 查看详细 </a>
                                <span class="vertical-date">
                            今天 <br>
                            <small>7月25日</small>
                        </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon lazur-bg">
                                <i class="fa fa-coffee"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>打飞机</h2>
                                <p>打飞机打飞机打飞机打飞机打飞机打飞机打飞机打飞机打飞机~~</p>
                                <a href="#" class="btn btn-sm btn-info"> 查看详细</a>
                                <span class="vertical-date"> 昨天 <br><small>7月24日</small></span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon yellow-bg">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>给李四打电话</h2>
                                <p>打飞机打飞机打飞机打飞机打飞机打飞机打飞机打飞机打飞机</p>
                                  <a href="#" class="btn btn-sm btn-info"> 查看详细</a>
                                <span class="vertical-date">昨天 <br><small>7月24日</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/Public/bootstrap/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/Public/bootstrap/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="/Public/bootstrap/js/content.js"></script>
   
</body>

</html>