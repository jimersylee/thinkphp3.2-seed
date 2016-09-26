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
}