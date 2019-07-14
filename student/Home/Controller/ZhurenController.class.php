<?php
/**
 * Created by PhpStorm.
 * User: 董朋辉
 * Date: 2017/6/12
 * Time: 15:37
 */
namespace Home\Controller;
use Think\Controller;
class ZhurenController extends Controller
{
    public function index()
    {
        if (cookie('t_num')) {
            $teacher = M('teacher');
            $map['t_num'] = cookie('t_num');
            $info = $teacher->where($map)->find();
            $info['t_quan']='教研室主任';
            $this->assign('info', $info);
            $this->display();
        } else {
            $this->error('您还没有登录！！请先登录！', '../User/login');
        }
    }

    public function cha()
    {              //查看课程
        if (cookie('t_num')) {
            $course = M('course');
            $info = $course->select();
            foreach ($info as $k => $v) {
                if ($info[$k]['c_quan'] == 0) {
                    $info[$k]['c_quan'] = '未审核';
                } else {
                    $info[$k]['c_quan'] = '已审核';
                }
            }
            $this->assign('info', $info);
            $this->display();
        } else {
            $this->error('您还没有登录！！请先登录！', '../User/login');
        }
    }

    public function shen(){
        if (cookie('t_num')) {
            if (I('get.c_num')) {
                $course = M('course');
                $map['c_num'] = I('get.c_num');
                $map['c_quan'] = 1;
                if ($course->save($map)) {
                    $this->success('审核成功！');
                } else {
                    $this->error('该科目已经审核！');
                }
            }
        }else {
            $this->error('您还没有登录！！请先登录！', '../User/login');
        }
    }
    public function count(){
        if(cookie('t_num')){
            $student=M('student');
            $course=M('course');
            $map['c_quan']=1;
            $info=$course->where($map)->select();
            foreach($info as $k=>$v){
                $info[$k]['count']=$student->field('s_xuan,count(s_num)')->where('s_xuan='.$v['c_num'])->getField('count(s_num)');
            }
            $this->assign('info',$info);
            $this->display();
        }else {
            $this->error('您还没有登录！！请先登录！', '../User/login');
        }
    }
}
?>
