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
        <li class="active"><a href="./cha">查看课程</a></li>
        <li><a href="./add">新增课程</a></li>
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
            <th>操作</th>
        </tr>
        <form action="./update1" method="post">
            <tr>
                <td><input type="text" name="num" value="<?php echo ($info["c_num"]); ?>"/></td>
                <td><input type="text" name="name" value="<?php echo ($info["c_name"]); ?>"/></td>
                <td><input type="text" name="teacher" value="<?php echo ($info["c_teacher"]); ?>"/></td>
                <td><input type="text" name="didian" value="<?php echo ($info["c_didian"]); ?>"/></td>
                <td><input type="text" name="shijian" value="<?php echo ($info["c_shijian"]); ?>"/></td>
                <td><input type="submit" name="add" value="修改"></td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>