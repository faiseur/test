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
        <li><a href="./cha">查看课题</a></li>
        <li><a href="./add">新增课题</a></li>
        <li class="active"><a href="./cha1">查看选题</a></li>
    </ul>

    <a href="/biye/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>

    <table class="table table-bordered">
        <tr>
            <th>学生学号</th>
            <th>学生姓名</th>
            <th>学生班级</th>
            <th>学生选题</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
                <td><?php echo ($v["s_num"]); ?></td>
                <td><?php echo ($v["s_name"]); ?></td>
                <td><?php echo ($v["s_class"]); ?></td>
                <td><?php echo ($v["s_xuan"]); ?></td>
                <td class="operate">
                    <a href="./delete?s_num=<?php echo ($v["s_num"]); ?>">踢除</a>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</div>
</body>
</html>