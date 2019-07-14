<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        if(empty($_POST)){
            $this->display();
        }else{
            if($_POST['shenfen']=="学生"){
                $user=M('student');
                $map['s_num']=I('post.num');
                $info=$user->where($map)->find();
                if($info['s_pwd']==I('post.pwd')){
                    cookie('s_num',$info['s_num'],3600);
                    $this->success('登录成功！','../Stu/index');
                }else{
                    $this->error('用户名或密码错误！！');
                }
            }else{
                $user=M('teacher');
                $map['t_num']=I('post.num');
                $info=$user->where($map)->find();
                if($info['t_pwd']==I('post.pwd')){
                    cookie('t_num',$info['t_num'],3600);
                    if($info['t_quan']==0){
                        $this->success('登录成功！','../Tea/index');
                    }else{
                        $this->success('登录成功！','../Zhuren/index');
                    }
                }else{
                    $this->error('用户名或密码错误！！');
                }
            }
         }
    }
    public function logout(){
        cookie('s_name',null);
        cookie('t_name',null);
        $this->success('注销成功！','../User/login');
    }
}