<?php
/*
Author:Jimersy Lee
Time:2016-9-26 上午 10:26
Description:测试基类
Action:add
*/

namespace UnitTest\Controller;


use codespy\analyzer;
class BaseController extends ThinkUnitController{

    /**此方法为预留方法,使用者可以在这里自定义载入一些东西,或者配置一些东西
     * BaseController constructor.
     */
    public function __construct() {
        parent::__construct();


    }
}