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
        <li><a href="./xuanke">选择课题</a></li>
        <li><a href="./result">选题结果</a></li>
    </ul>

    <a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

    <table class="table table-bordered">
        <tr>
            <th>姓名</th>
            <th>学号</th>
            <th>班级</th>
        </tr>
        <tr>
            <td><?php echo ($info['s_num']); ?></td>
            <td><?php echo ($info['s_name']); ?></td>
            <td><?php echo ($info['s_class']); ?></td>
        </tr>
    </table>
</div>
</body>
</html>