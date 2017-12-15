<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" href="__ADMIN__/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
		<link rel="stylesheet" href="__ADMIN__/plugins/font-awesome/css/font-awesome.min.css">
    <link href="__ADMIN__/css/plugins/iCheck/custom.css" rel="stylesheet">
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.jump{ padding-top: 10px;display: none;}
.jump a{ color: #333;}

.jump1 a{ color: #fff;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 16px }
</style>
</head>
<body>
<p class="jump">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b></p>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 500);
})();
</script>
<!-- 全局js -->
<script src="__ADMIN__/js/jquery.min.js?v=2.1.4"></script>
<!-- iCheck -->

<script type="text/javascript" src="__PUBLIC__/layer/layer.js" charset="utf-8"></script>
<script type="text/javascript">
</script>
<script>
$(function(){
  window.iframeConfig = {
    iframe_1: {
      attr_name: 'iframe_1'
    }
  };
  var index = parent.layer.getFrameIndex(window.name);  
    layer.msg('<div class="system-message"><?php if(isset($message)) {?><p class="success"><?php echo($message); ?></p><?php }else{?><p class="error"><?php echo($error); ?></p><?php }?><p class="detail"></p></div>', {
      time: 2300,
      icon: 6,
      shade: 0.8,
      });
});
</script>
</body>
</html>