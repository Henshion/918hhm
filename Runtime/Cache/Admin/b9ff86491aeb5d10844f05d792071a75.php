<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>文章列表</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Admin/hhmblog.css" media="all" />
    <link rel="stylesheet" href="/Public/Admin/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/Public/Admin/css/global.css" media="all">
    <link rel="stylesheet" href="/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
        <link href="/Public/Admin/css/animate.css" rel="stylesheet">
  </head>
<body class="gray-bg">
    <div class="animated fadeInRight">
    <div style="margin: 15px;">
      <fieldset class="layui-elem-field">
        <legend><a href="<?php echo u('Article/articleadd');?>" class="layui-btn" id="add"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;&nbsp;添加</i></a></legend>
        <div class="layui-field-box">
          <table class="layui-table">
            <thead>
              <tr class="global-center">
                <th>编号</th> 
                <th>文章标题</th>
                <th>缩略图</th>
                <th>是否推荐</th>
                <th>是否精选</th>
                <th>所属栏目</th>
                <th>显示</th>
                <th>添加时间</th>
                <th>编辑</th>
              </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tbody-center">
                <td ><?php echo ($vo["id"]); ?></td>
                <td ><?php echo ($vo["title"]); ?></td>
                <td ><?php if($vo[pic] != ''): ?><img src="http://918hhm.com//<?php echo ($vo["pic"]); ?>" height="30">
                  <?php else: ?> 
                  暂无缩略图<?php endif; ?>
                  </td>
                <td><?php if($vo[commend] == 1): ?><span style="color:#FF5722;">已推荐</span><?php else: ?>未推荐<?php endif; ?></td>
                <td><?php if($vo[choice] == 1): ?><span style="color:#FF5722;">已精选</span><?php else: ?>未精选<?php endif; ?></td>
                <td><?php if($vo[tid] == 0): ?><span style="color:#FF5722;">栏目</span><?php else: echo ($vo["name"]); endif; ?></td>
                <td><?php if($vo[open] == 0): ?><span style="color:#FF5722;">关闭</span><?php else: ?>显示<?php endif; ?></td>
                <td><?php echo (date("Y-n-d",$vo["time"])); ?></td>
                <td>
                    <a class="layui-btn layui-btn-small" href="<?php echo U('article/articleupd',array('id'=>$vo['id']));?>"><i class="layui-icon"></i></a>
                    <a class="layui-btn layui-btn-primary layui-btn-small"  id="del_<?php echo ($vo["id"]); ?>"><i class="layui-icon"></i></a>
                </td>
              <script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
                <script src="/Public/layer/layer.js"></script>
                  <script>
                    $('#del_<?php echo ($vo["id"]); ?>').on('click', function(){
                     layer.confirm('您确定删除？', {
                        btn: ['确定','取消'] //按钮
                      }, function(){
                        location.href = "<?php echo U('article/articledel',array('id'=>$vo['id']));?>"; 
                      }, function(){
                        layer.msg('相信您的选择是对的', {
                          time: 1000, //20s后自动关闭
                        });
                      }); 
                    });     // location.href = $data.url;  
                      $('#upd_<?php echo ($vo["id"]); ?>').click(function(){
                      var url = '<?php echo u("members/blogupd",array("id"=>$vo[id]));?>';
                      $.get(url,function(data){
                      if(data.status == 'error'){
                        layer.msg(data.msg,{icon: 5});
                        return;
                      }
                      layer.open({
                          title:'修改',
                          type: 1,
                          skin: 'layui-layer-rim', //加上边框
                           area: ['380px'],
                          content: data,
                      });
                    })
                     });  
                    </script>                 
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table><div id="page"><?php echo ($page); ?></div>
        </div>
      </fieldset>   
<script type="text/javascript" src="/Public/Admin/plugins/layui/layui.js"></script>
</body>
</html>