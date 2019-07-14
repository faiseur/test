<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选课结果</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="./index">首页</a></li>
			<li><a href="./xuanke">选择课题</a></li>
			<li class="active"><a href="./result">选择结果</a></li>
		</ul>

		<a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

		<table class="table table-bordered">
			<tr>
				<th>课题编号</th>
				<th>课题名</th>
				<th>指导老师</th>
                <th>课题内容</th>
			</tr>
			<tr>
				<td><?php echo ($info["c_num"]); ?></td>
				<td><?php echo ($info["c_name"]); ?></td>
				<td><?php echo ($info["c_teacher"]); ?></td>
                <td><?php echo ($info["c_content"]); ?></td>
			</tr>
		</table>
	</div>
</body>
</html>