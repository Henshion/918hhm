<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>上传图片</title> 
        <link rel="stylesheet" href="/Public/Admin/plugins/layui/css/layui.css" media="all" />  
        <script type="text/javascript" src="/Public/bootstrap/jquery-1.7.2.js"></script>  
        <link rel="stylesheet" href="/Public/bootstrap/upload/skins/zyupload-1.0.0.min.css " type="text/css">
        <script type="text/javascript" src="/Public/bootstrap/upload/zyupload-1.0.0.min.js"></script>
        <link rel="stylesheet" href="/Public/Admin/hhmblog.css" media="all" />
        <link rel="stylesheet" href="/Public/Admin/css/global.css" media="all">
        <link rel="stylesheet" href="/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
        </head>
        <style>
            #uploadInf{
                position: absolute;top: 100px; left: 20px;
            }
            #uploadInf p{
                color: #333;line-height: 30px;
            }
        </style>
    <body>
    <div class="animated fadeInRight">
    <div style="margin: 15px;">
      <fieldset class="layui-elem-field">
        <legend>&nbsp;&nbsp;添加</legend>
        <div class="layui-field-box">
        <h1 style="text-align:center;">上传图片</h1>
        <div id="zyupload" class="zyupload"></div>  
         </div>
      </fieldset>
    </div>    
        <script type="text/javascript" src="/Public/Admin/plugins/layui/layui.js"></script>
        <script type="text/javascript">
            $(function(){
                // 初始化插件
                $("#zyupload").zyUpload({
                    width            :   "650px",                 // 宽度
                    height           :   "400px",                 // 宽度
                    itemWidth        :   "140px",                 // 文件项的宽度
                    itemHeight       :   "115px",                 // 文件项的高度
                    url              :   "<?php echo u('img/imgupd');?>",              // 上传文件的路径
                    fileType         :   ["jpg","png","txt","js"],// 上传文件的类型
                    fileSize         :   51200000,                // 上传文件的大小
                    multiple         :   true,                    // 是否可以多个文件上传
                    dragDrop         :   true,                    // 是否可以拖动上传文件
                    tailor           :   true,                    // 是否可以裁剪图片
                    del              :   true,                    // 是否可以删除文件
                    finishDel        :   false,                   // 是否在上传文件完成后删除预览
                    /* 外部获得的回调接口 */
                    onSelect: function(selectFiles, allFiles){    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                        console.info("当前选择了以下文件：");
                        console.info(selectFiles);
                    },
                    onDelete: function(file, files){              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                        console.info("当前删除了此文件：");
                        console.info(file.name);
                    },
                    onSuccess: function(file, response){          // 文件上传成功的回调方法
                        console.info("此文件上传成功：");
                        console.info(file.name);
                        console.info("此文件上传到服务器地址：");
                        console.info(response);
                        $("#uploadInf").append("<p>上传成功！</p>");
                    },
                    onFailure: function(file, response){          // 文件上传失败的回调方法
                        console.info("此文件上传失败：");
                        console.info(file.name);
                    },
                    onComplete: function(response){               // 上传完成的回调方法
                        console.info("文件上传完成");
                        console.info(response);
                    }
                });
                
            });
        
        </script> 
    </body>
</html>