<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>成绩录入</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="./index">首页</a></li>
			<li><a href="./cha">查看课程</a></li>
			<li><a href="./add">新增课程</a></li>
			<li class="active"><a href="./inquire">成绩查询</a></li>
		</ul>
		<a href="/student/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>
        <form action="./inquire" method="post">
        课程编号 ：<input type="text" name="c_num" />
            <input type="submit" name="submit" value="查询"/>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>学号</th>
                <th>课程编号</th>
                <th>成绩</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
                    <td><?php echo ($v["s_num"]); ?></td>
                    <td><?php echo ($v["c_num"]); ?></td>
                    <td><?php echo ($v["grade"]); ?></td>
                    <td class="operate">
                        <a href="./xiugai?id=<?php echo ($v["id"]); ?>">修改成绩</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
	</div>
</body>
</html>