<?php
/**
 * Created by PhpStorm.
 * User: 董朋辉
 * Date: 2017/5/19
 * Time: 14:24
 */
namespace Home\Controller;
use Think\Controller;
class StuController extends Controller{
    public function index(){
        if(cookie('s_num')){
            $user=M('student');
            $map['s_num']=cookie('s_num');
            $info=$user->where($map)->find();
            $this->assign('info',$info);
            $this->display();
        }else{
            $this->error('您还未登录！！请先登录！','../User/login');
        }
    }

    public function result(){
        if(cookie('s_num')){
//            $user=M('student');
//            $course=M('course');
//            $map['s_num']=cookie('s_num');
//            $xuan=$user->where($map)->find();
//            $map1['c_num']=array('in',$xuan['s_xuan']);
//            $info=$course->where($map1)->select();
//            $this->assign('info',$info);
//            $this->display();
            $student=M('student');
            $course=M('course');
            $map['s_num']=cookie('s_num');
            $info1=$student->where($map)->find();
            if(!empty($info1['s_xuan'])){
                $map1['c_num']=$info1['s_xuan'];
                $info=$course->where($map1)->find();
                $this->assign('info',$info);
            }
            $this->display();
        }else{
            $this->error('您还未登录！！请先登录！','../User/login');
        }
    }
    public function xuanke(){
        if(cookie('s_num')){
            $course=M('course');
            $map['c_quan']=1;
            $info=$course->where($map)->select();
            foreach($info as $k=>$v){
                $info[$k]['c_quan']='已审核';
            }
            $this->assign('info',$info);
            if(!isset($_GET['c_num'])){
                $this->display();
            }else{
//                $user=M('student');
//                $map['s_num']=cookie('s_num');
//                $info=$user->where($map)->find();
//                if(strpos($info['s_xuan'],$_GET['c_num']) !== false){
//                    $this->error('您已经选过该节课，无需选择！');
//                }else{
//                    $map1['s_xuan']=$info['s_xuan'].$_GET['c_num'].",";
//                    if($user->where($map)->save($map1)){
//                        $this->success('选课成功！');
//                    }else{
//                        $this->error('选课失败！');
//                    }
//                }
                $student=M('student');
                $date['s_num']=cookie('s_num');
                $date1['s_num']=cookie('s_num');
                $date1['s_xuan']=I('get.c_num');
                $info=$student->where($date)->find();
                if(!empty($info['s_xuan'])){
                    $this->error('每个学生只能选一门毕业设计！');
                }else{
                    if($student->save($date1)){
                        $this->success('选课成功！');
                    }else{
                        $this->error('选课失败！');
                    }
                }
            }

        }else{
            $this->error('您还未登录！！请先登录！','../User/login');
        }
    }

}
?>
