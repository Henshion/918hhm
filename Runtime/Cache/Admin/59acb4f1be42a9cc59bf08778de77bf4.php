<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>菜单设置</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
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
          <legend>
              <button class="layui-btn" id="linkadd"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;&nbsp;添加</i></button>
        </legend>

        <div class="layui-form">
          <table class="layui-table">
            <colgroup>
              <col width="50">
              <col width="200">
              <col width="200">
              <col width="200">
              <col width="200">
              <col width="200">
              <col width="200">
              <col width="200">
              <col width="300">
            </colgroup>
            <thead>
              <tr class="global-center">
                <th>ID</th>
                <th>昵称</th>
                <th>链接</th>
                 <th>缩略图</th>
                 <th>排序</th>
                <th>状态</th>
                <th>编辑</th>
              </tr> 
            </thead>
            <tbody>
              <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tbody-center">
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["link"]); ?></td>
                <td><?php if($vo[pic] != ''): ?><img src="http://918hhm.com//<?php echo ($vo["pic"]); ?>" height="30">
                  <?php else: ?> 
                  暂无缩略图<?php endif; ?></td>
                <td><?php echo ($vo["sort"]); ?></td>
                <td><?php if($vo['state'] == 1 ): ?><a class="layui-btn layui-btn-mini layui-btn-normal">启动</a>
                    <?php else: ?>
                  <a class="layui-btn layui-btn-primary layui-btn-mini">关闭</a><?php endif; ?></td>
                <td>
                  <a class="layui-btn layui-btn-normal layui-btn-small" id="upd_<?php echo ($vo["id"]); ?>"><i class="layui-icon"></i></a>
                                                        
                  <a class="layui-btn layui-btn-primary layui-btn-small" id="del_<?php echo ($vo["id"]); ?>"><i class="layui-icon"></i></a>
                </td>
              </tr>
              <script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
              <script src="/Public/layer/layer.js"></script>
              <script>
                    $('#upd_<?php echo ($vo["id"]); ?>').click(function(){
                      var url = '<?php echo u("System/linkupd",array("id"=>$vo[id]));?>';
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

                $('#del_<?php echo ($vo["id"]); ?>').on('click', function(){
                 layer.confirm('您确定删除？', {
                      btn: ['确定','取消'] //按钮
                      }, function(){
                        location.href = '<?php echo u("system/linkdel",array("id"=>$vo[id]));?>'; 
                      }, function(){
                        layer.msg('相信您的选择是对的', {
                          time: 1000, //20s后自动关闭
                        });
                      }); 
                });  
                </script><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<script type="text/javascript" src="/Public/Admin/plugins/layui/layui.js"></script>
<script>
layui.use(['form'], function() {
        var form = layui.form(),
          layer = layui.layer;
          $('#linkadd').on('click', function(){
              var url = "<?php echo U('System/linkadd');?>";
              $.get(url,function(data){
                if(data.status == 'error'){
                  layer.msg(data.msg,{icon: 5});
                  return;
                }
                layer.open({
                    title:'添加链接',
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                     area: ['380px'],
                    content: data,
                });
              })
          });
});
</script>


</body>

</html>