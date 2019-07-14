<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新增</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="./index">首页</a></li>
			<li><a href="./cha">查看课题</a></li>
			<li class="active"><a href="./add">新增课题</a></li>
            <li><a href="./cha1">查看选题</a></li>
		</ul>

		<a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

		<table class="table table-bordered">
			<tr>
				<th>课题名</th>
				<th>内容</th>
			</tr>
            <form action="./add" method="post">
			<tr>
				<td><input type="text" name="name" value=""/></td>
				<td><input type="text" name="content" value=""/></td>
                <td><input type="submit" name="add" value="添加"></td>
            </tr>
            </form>
		</table>
	</div>
</body>
</html>