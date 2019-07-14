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
			<li><a href="./xuanke">选课</a></li>
			<li class="active"><a href="./result">选课结果</a></li>
			<li><a href="./inquire">成绩查询</a></li>
		</ul>

		<a href="" class="btn btn-sm btn-primary exit">退出</a>

		<table class="table table-bordered">
			<tr>
				<th>课程编号</th>
				<th>课程名</th>
				<th>上课老师</th>
				<th>上课地点</th>
				<th>上课时间</th>
			</tr>
            <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
				<td><?php echo ($v["c_num"]); ?></td>
				<td><?php echo ($v["c_name"]); ?></td>
				<td><?php echo ($v["c_teacher"]); ?></td>
				<td><?php echo ($v["c_didian"]); ?></td>
				<td><?php echo ($v["c_shijian"]); ?></td>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>
</body>
</html>