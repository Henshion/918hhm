<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>登录</title>
		<link rel="stylesheet" href="/Public/Admin/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/Public/Admin/css/login.css" />
		<link rel="stylesheet" media="screen" href="/Public/Admin/login/css/style.css">
	</head>

	<body class="beg-login-bg">
		<!-- count particles -->
		<!-- particles.js container -->
		<div id="particles-js">
			<div class="beg-login-box">
			<header>
				<h1>后台登录</h1>
			</header>
			<div class="beg-login-main">
					<div class="layui-form-item">
						<label class="beg-login-icon">
	                        <i class="layui-icon">&#xe612;</i>
	                    </label>
						<input type="text" name="username" id="username"   placeholder="请输入登录名" class="layui-input">
					</div>
					<div class="layui-form-item">
						<label class="beg-login-icon">
	                        <i class="layui-icon">&#xe642;</i>
	                    </label>
						<input type="password" name="password" id="password"   placeholder="请输入密码" class="layui-input">
					</div>
					<div class="layui-form-item">
						<label class="beg-login-icon">
                       	 	<i class="layui-icon">&#xe609;</i>
                    	</label>
						<input type="text" name="verify" id="verify"  size="10" placeholder="这里输验证码" class="layui-input_style" /><img class="layui-input_style-img"  onclick="this.src='/index.php/admin/login/verify/'+Math.random();" src="/index.php/admin/login/verify">
					</div>
					<div class="layui-form-item">
						<div>
						<button class="layui-btn beg-pull-button layui-btn-danger"  type="submit" id="login">
                            <i class="layui-icon">&#xe650;</i> 登录
                        </button>
                       <!-- <input type="submit" class="layui-btn beg-pull-button layui-btn-danger" value="登陆" id="login">  -->
						</div>
						<div class="beg-clear"></div>
					</div>
			</div>
			<footer>
				<p> © 粤ICP备17085554号</p>
			</footer>
		</div>

		</div>

	<!-- scripts -->
	<script src="/Public/Admin/login/particles.min.js"></script>
	<script src="/Public/Admin/login/js/app.js"></script>
	
    <script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/layer/layer.js"></script>
	<script type="text/javascript">  
    $(function(){  
        $('#login').click(function(){  
            var $nameVal = $.trim($('#username').val());  
            var $passwordVal = $.trim($('#password').val()); 
            var $verify = $.trim($('#verify').val()); 
            //如果没有填写数据,则直接返回false.不执行ajax提交操作  
            if($nameVal == '' || $passwordVal == ''|| $verify == ''){  
                layer.msg('请输入用户名、密码、验证码', {time: 1000, icon:6,shade: 0.8});
                return false;  
            }  
            /* 
                $.post(url,parameters,callback); 
                url : post提交的服务器端资源地址。 
                parameters: 需要传递到服务器端的参数。 参数形式为“键/值”。 
                callback : 在请求完成时被调用,这里我们通过$data来接收服务器返回的数据   
             */  
            $.post('<?php echo U("Login/index");?>', {username : $nameVal,verify :$verify,password : $passwordVal},function($data) {  
                layer.msg($data.info, {time: 1000, icon:2,shade: 0.8});
                if($data.status == 1){  
                	layer.msg('登录成功', {
                		time: 2000,
                		 icon:1,
                		 shade: 0.8,
                		 end: function(){ //此处用于跳转父级
							location.href = $data.url; 
						  }
                		});				
				        //location.href = $data.url;   
                }else{  
                    $('#username').reset();  
                    $('#password').reset();
                    $('#verify').reset();
                }     
            });  
        });  
    });  
	</script>  
	</body>
</html>