<?php
/**
 * Created by PhpStorm.
 * User: 董朋辉
 * Date: 2017/5/21
 * Time: 14:03
 */
namespace Home\Controller;
use Think\Controller;
class TeaController extends Controller{
    public function index(){
        if(cookie('t_num')){
            $teacher=M('teacher');
            $map['t_num']=cookie('t_num');
            $info=$teacher->where($map)->find();
            $info['t_quan']='指导老师';
            $this->assign('info',$info);
            $this->display();
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }
    }
    public function add(){            //新增课程
        if(cookie('t_num')){
            if(I('post.name')){
                $teacher=M('teacher');
                $map['t_num']=cookie('t_num');
                $t_name=$teacher->where($map)->getField('t_name');
                $course=M('course');
                $date['c_name']=I('post.name');
                $date['c_teacher']=$t_name;
                $date['c_content']=I('post.content');
                if($course->add($date)){
                    $this->success('新增成功！');
                }else{
                    $this->error('新增失败！');
                }
            }else{
                $this->display();
            }
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }

    }
    public function cha(){              //查看课程
        if(cookie('t_num')){
            $course=M('course');
            $info = $course->select();
            foreach($info as $k=>$v){
                if($info[$k]['c_quan']==0){
                    $info[$k]['c_quan']='未审核';
                }else{
                    $info[$k]['c_quan']='已审核';
                }
            }
            $this->assign('info',$info);
            $this->display();
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }
    }


    public function cha1(){
        if(cookie('t_num')){
            $course=M('course');
            $teacher=M('teacher');
            $map['t_num']=cookie('t_num');
            $t_name=$teacher->where($map)->getField('t_name');
            $map1['c_teacher']=$t_name;
            $info=$course->where($map1)->select();
            foreach($info as $v){
                $a[]=$v['c_num'];
            }
            $student=M('student');
            $map2['s_xuan']=array('in',$a);
            $info1=$student->where($map2)->select();
            foreach($info1 as $k=>$v){
                $info1[$k]['s_xuan'] =  $course->where('c_num='.$v['s_xuan'])->getField('c_name');
            }
            $this->assign('info',$info1);
            $this->display();
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }
    }
    public function update(){              //修改课程信息
        if(cookie('t_num')){
            if(I('get.c_num')){
                $course=M('course');
                $map['c_num']=I('get.c_num');
                $info=$course->where($map)->find();
                $this->assign('info',$info);
                $this->display();

            }
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }
    }


    public function update1()                   //提交修改信息
    {
        if (cookie('t_num')) {
            if (I('post.num')) {
                $course = M('course');
                $date['c_num'] = I('post.num');
                $date['c_name'] = I('post.name');
                $date['c_teacher'] = I('post.teacher');
                $date['c_didian'] = I('post.didian');
                $date['c_shijian'] = I('post.shijian');
                if ($course->save($date)) {
                    $this->success('修改成功！');
                } else {
                    $this->error('您没有进行任何修改！');
                }
            }
        }else{
            $this->error('您还没有登录！！请先登录！','../User/login');
        }
    }


    public function delete(){                      //删除课程
        if (cookie('t_num')) {
            if(I('get.s_num')) {
                $student = M('student');
                $map['s_num']=I('get.s_num');
                $map['s_xuan']='';
                if($student->save($map)){
                    $this->success('剔除成功！');
                }else{
                    $this->error('剔除失败！');
                }
            }
        }else {
            $this->error('您还没有登录！！请先登录！', '../User/login');
        }
    }


}
?>
