<?php if (!defined('THINK_PATH')) exit();?>
        <div style="margin: 15px;">                            
            <form class="layui-form" action="<?php echo u('system/linkadd');?>"  method="post">
                <input type="hidden" name="id" value="<?php echo ($links["id"]); ?>" />
                <div class="layui-form-item">
                    <label class="layui-form-label">昵称 ：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="name" lay-verify="required" placeholder="请输入昵称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                      <label class="layui-form-label">链接 ：</label>
                      <div class="layui-input-inline">
                        <input type="tel" name="link" lay-verify="url" autocomplete="off" placeholder="请输入链接地址" class="layui-input">
                      </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">排序 ：</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="state" placeholder="请输入排序号" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                <label class="layui-form-label">缩略图</label>
                 <div class="layui-input-block">
                 <div class="file-box">
                 <i class="layui-icon">&#xe61f;</i>
                 <input class="file-btn" type="button" value="选择图片"> 
                 <input class="file-txt" type="text" name="textfield" id="textfield"> 
                 <input class="file-file" type="file" name="pic" id="pic" size="28" onchange="document.getElementById('textfield').value=this.value" /> 
                 </div>
                 </div>
              </div>
               <div class="layui-form-item">
                    <div class="layui-input-block">
                         <button class="layui-btn" type="submit" lay-submit=""  lay-filter="demo1" >立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
        <script>
        layui.use('form', function(){
          var form = layui.form();
        });
        </script>
        <script type="text/javascript">
            var editor = new wangEditor('textarea');
          editor.config.uploadImgUrl = "<?php echo U('article/doUploadPic');?>";
            editor.create();
        </script>