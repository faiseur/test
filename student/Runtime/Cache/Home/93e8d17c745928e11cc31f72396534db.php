<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css ">
	<script type="text/javascript" src="<?php echo (PUBLIC_PATH); ?>js/register.js"></script>
</head>
<body>
	<div class="container form-horizontal">
		<form action="../User/login" method="post" enctype="multipart/form-data">
			<h4>毕业选题管理系统</h4>
			<div class="form-group">
				<label for="num" class="control-label col-lg-3">学号：</label>
				<div class="col-lg-9">
					<input type="text" name="num" id="num" class="form-control" placeholder="请输入学号">
				</div>
			</div>
			<div class="form-group">
				<label for="pwd" class="control-label col-lg-3">密码：</label>
				<div class="col-lg-9">
					<input type="password" name="pwd" id="pwd" class="form-control" placeholder="请输入密码">
					<img src="<?php echo (PUBLIC_PATH); ?>image/1.png" alt="eye" id="eye">
				</div>
			</div>
			<div class="form-group">
				<label for="choose" class="control-label col-lg-3">选择：</label>
				<div class="col-lg-8">
					<select class="form-control" id="choose" size="1" name="shenfen">
						<option  value="学生">学生</option>
						<option  value="教师">教师</option>
					</select>
				</div>
			</div>
			<div>
				<a href="register.html" class="btn btn-default" >注册</a>
				<input type="submit" class="btn btn-default" value="登录">
			</div>
		</form>	
		
	</div>
</body>
</html>