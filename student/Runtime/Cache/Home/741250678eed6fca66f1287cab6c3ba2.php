<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="./index">首页</a></li>
			<li class="active"><a href="./cha">查看课题</a></li>
			<li><a href="./add">新增课题</a></li>
            <li><a href="./cha1">查看选题</a></li>
		</ul>

		<a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

		<table class="table table-bordered">
			<tr>
				<th>课题编号</th>
				<th>课题名</th>
				<th>指导老师</th>
                <th>审核状态</th>
			</tr>
            <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
				<td><?php echo ($v["c_num"]); ?></td>
				<td><?php echo ($v["c_name"]); ?></td>
				<td><?php echo ($v["c_teacher"]); ?></td>
                <td><?php echo ($v["c_quan"]); ?></td>
			</tr><?php endforeach; endif; ?>
		</table>

        <div style="width: 50px;margin:0 auto;"><?php echo ($page); ?></div>
	</div>
</body>
</html>