<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="./index">首页</a></li>
        <li><a href="./cha">查看课题</a></li>
        <li><a href="./add">新增课题</a></li>
        <li><a href="./cha1">查看选题</a></li>
    </ul>

    <a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

    <table class="table table-bordered">
        <tr>
            <th>教师编号</th>
            <th>教师姓名</th>
            <th>身份</th>
        </tr>
        <tr>
            <td><?php echo ($info['t_num']); ?></td>
            <td><?php echo ($info['t_name']); ?></td>
            <td><?php echo ($info['t_quan']); ?></td>
        </tr>
    </table>
</div>
</body>
</html>