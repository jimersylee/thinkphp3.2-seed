<?php
/*
Author:Jimersy Lee
Time:2016-9-26 上午 10:28
Description:测试其他模块的控制器,如果其他模块的控制器使用了ajaxReturn()方法,则需要将此控制器文件复制到UnitTest目录下
Action:add
*/

namespace Test\Controller;//如果要测试此模块,因为使用了ajaxReturn()函数,所以要将此文件复制到UnitTest目录,且将namespace设置为UnitTest\Controller
use Think\AjaxReturnEvent;//如果要以try catch方式截获单元测试的结果,则use此类,同时在核心Controller中,将ajaxReturn()方法选择为支持try catch的
use Think\Controller;
class OtherController extends Controller
{


    /**
     * 以try catch方式来截获单元测试的结果,能实现效果,但是在正常环境中调用就麻烦
     */
    public function ajaxTestV2(){
        $data['int']=1;
        try{
            $this->ajaxReturn($data);
        }catch (AjaxReturnEvent $event){
            $result=$event->getMessage();
            echo $result;
        }

    }

    /**
     * 在Controller类中的ajaxReturn方法中,加入对子类名的判断,如果子类是单元测试类,则不使用exit结束,改为return
     */
    public function ajaxTestV3(){
        $data['int']=1;
        return $this->ajaxReturn($data);
    }















}