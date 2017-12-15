<?php if (!defined('THINK_PATH')) exit();?>
    <div style="margin: 15px;">
        <form class="layui-form" action="<?php echo u('system/linkupd');?>"  method="post">

            <input type="hidden" name="id" value="<?php echo ($links["id"]); ?>" />
            <div class="layui-form-item">
                <label class="layui-form-label">昵称 ：</label>
                <div class="layui-input-inline">
                    <input type="text" name="name" value="<?php echo ($links["name"]); ?>" lay-verify="required" placeholder="请输入昵称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                  <label class="layui-form-label">链接 ：</label>
                  <div class="layui-input-inline">
                    <input type="tel" name="link" value="<?php echo ($links["link"]); ?>" lay-verify="url" autocomplete="off" placeholder="请输入链接地址" class="layui-input">
                  </div>
                </div>
            <div class="layui-form-item">
                <label class="layui-form-label">排序 ：</label>
                <div class="layui-input-inline">
                    <input type="tel" name="sort" value="<?php echo ($links["sort"]); ?>"  placeholder="请输入排序号" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 70px;">缩略图 ：</label>
                <div class="layui-input-inline">
                    <img src="<?php echo ($links["pic"]); ?>">
                    <input type="text" name="pic" placeholder="请输入相册图片ID" class="layui-input">
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