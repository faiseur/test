<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成绩修改</title>
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_PATH); ?>css/index.css">
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li><a href="./index">首页</a></li>
        <li><a href="./cha">查看课程</a></li>
        <li><a href="./add">新增课程</a></li>
        <li class="active"><a href="./inquire">修改成绩</a></li>
    </ul>
    <a href="/student/index.php/Home/User/logout" class="btn btn-sm btn-primary exit">退出</a>
    <form action="./inquire" method="post">
        学号 ：<input type="text" name="s_num" />
        <input type="submit" name="submit" value="查询"/>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>学号</th>
            <th>课程编号</th>
            <th>成绩</th>
            <th>操作</th>
        </tr>
         <tr>
             <td><?php echo ($info["s_num"]); ?></td>
             <td><?php echo ($info["c_num"]); ?></td>
             <form method="post" action="./xiugai1">
                 <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
                 <td>
                     <input type="text" name="grade" value="<?php echo ($info["grade"]); ?>"/>
                 </td>
                <td class="operate">
                    <input type="submit" name="submit" value="修改成绩" />
                </td>
             </form>
         </tr>
    </table>
</div>
</body>
</html>