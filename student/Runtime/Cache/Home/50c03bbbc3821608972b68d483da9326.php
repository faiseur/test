<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css ">
</head>
<body>
	<div class="container form-horizontal">
		<form action="" method="post">
			<h4>注册信息</h4>
			<div class="form-group">
				<label for="num" class="control-label col-lg-4">姓名：</label>
				<div class="col-lg-8">
					<input type="text" name="num" id="num" class="form-control" placeholder="请输入姓名">
				</div>
			</div>
			<div class="form-group">
				<label for="pwd" class="control-label col-lg-4">密码：</label>
				<div class="col-lg-8">
					<input type="password" name="pwd" id="pwd" class="form-control" placeholder="请输入密码">
				</div>
			</div>
			<div class="form-group">
				<label for="check" class="control-label col-lg-4">确认密码：</label>
				<div class="col-lg-8">
					<input type="password" id="check" class="form-control" placeholder="请再次输入密码">
				</div>
			</div>
			<div>
				<input type="button" class="btn btn-default" value="注册">
				<a href="login.html" class="btn btn-default">登录</a>
			</div>
		</form>	
		
	</div>
</body>
</html>