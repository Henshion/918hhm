<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>栏目</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Admin/css/artileadd.css">
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
        <legend><a class="layui-btn" href="<?php echo U('Cate/cateadd');?>"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;&nbsp;添加</i></a></legend>
        <div class="layui-field-box">
          <table class="layui-table">
            <thead>
              <tr class="global-center">
                <th>栏目ID</th> 
                <th>名称</th>
                <th>栏目类型</th>
                <th>添加时间</th>
                <th>编辑</th>
              </tr>
            </thead>
            <?php if(is_array($c)): foreach($c as $k=>$vo): ?><tr>
<td align="center"><?php echo ($vo["id"]); ?></td>
<td style="padding-left: 20px;"><a target="_blank" href="http://918hhm.com//index.php?m=Home&c=index&a=cate&id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></td>
<td align="center">
<?php if($vo['type'] == 1): ?>文章<?php endif; ?>
<?php if($vo['type'] == 2): ?>产品<?php endif; ?>
</td>

<td align="center"><?php echo (date("Y-n-d",$vo["time"])); ?></td>
<td align="center">
<a class="layui-btn layui-btn-small" href="<?php echo U('cate/cateupd',array('id'=>$vo['id']));?>">修改</a>  <a  class="layui-btn layui-btn-primary layui-btn-small" href="<?php echo U('cate/delete',array('id'=>$vo['id']));?>" onclick="return confirm('您确定删除吗？');">删除</a>
</td>
</tr>
<?php if(is_array($cs)): foreach($cs as $k=>$vs): if($vo["id"] == $vs['tid']): ?><tr>
<td align="center"><?php echo ($vs["id"]); ?></td>
<td style="padding-left: 20px;">———— <a target="_blank" href="http://918hhm.com//index.php?m=Home&c=index&a=cate&id=<?php echo ($vs["id"]); ?>"><?php echo ($vs["name"]); ?></a></td>
<td align="center">
<?php if($vs['type'] == 1): ?>文章<?php endif; ?>
<?php if($vs['type'] == 2): ?>产品<?php endif; ?>
</td>
<td align="center"><?php echo (date("Y-n-d",$vs["time"])); ?></td>
<td align="center">
<a class="layui-btn layui-btn-small" href="<?php echo U('cate/cateupd',array('id'=>$vs['id']));?>">修改</a>  <a  class="layui-btn layui-btn-primary layui-btn-small" href="<?php echo U('cate/delete',array('id'=>$vs['id']));?>" onclick="return confirm('您确定删除吗？');">删除</a>
</td>
</tr><?php endif; endforeach; endif; endforeach; endif; ?>
            </tbody>
          </table><div id="page"><?php echo ($page); ?></div>
        </div>
      </fieldset>
        
<script type="text/javascript" src="/Public/Admin/plugins/layui/layui.js"></script>
<script>
/*layui.use(['form', 'layedit', 'laydate'], function() {
        var form = layui.form(),
          layer = layui.layer,
          layedit = layui.layedit,
          laydate = layui.laydate;
          $('#add').on('click', function(){
              var url = "<?php echo U('Cate/cateadd');?>";
              $.get(url,function(data){
                if(data.status == 'error'){
                  layer.msg(data.msg,{icon: 5});
                  return;
                }
                layer.open({
                    title:'添加用户',
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                     area: ['380px'],
                    content: data,
                });
              })
          });
        

           

});*/
</script>

</body>
</html>