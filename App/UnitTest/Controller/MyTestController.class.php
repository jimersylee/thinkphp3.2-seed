<?php
/*
Author:Jimersy Lee
Time:2016-9-25 下午 7:59
Description:用来被测试的方法
Action:add
*/


namespace UnitTest\Controller;
use Think\Controller;


class MyTestController extends Controller
{
    public function isOdd($number){

        return $number%2==0?false:true;

    }

    //被测试方法示例,原来使用 直接使用 $this->ajaxReturn()  现在必须写成 return $this->ajaxReturn()

    public function ajaxTest(){
        $data['int']=1;
        return $this->ajaxReturn($data);
    }
}