<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jimersy Lee
 * Date: 2016-9-25
 * Time: 下午 8:02
 * Description:用来测试方法的单元测试
 */


namespace UnitTest\Controller;

use UnitTest\Controller\OtherController as Other;//如果想测试使用了ajaxReturn方法的模块,将要测试的文件复制到UnitTest目录,将namespace设置为namespace UnitTest\Controller
use Test\Controller\IndexController as Test;//如果想测试未使用ajaxReturn方法的模块,直接在这里use
//use Think\AjaxReturnEvent; //如果要测试调用AjaxReturn()的方法,必须加这句

class MyUnitTestController extends BaseController  {


    /**
     * @test
     * @note 单元测试可用性检测
     */
    public function selfTest(){
        $test=new MyTestController();
        $result=$test->isOdd(2);//1是否是奇数
        $this->assertTrue($result);//断言为真,是奇数

        $result=$test->isOdd(1);//2是否是奇数
        $this->assertFalse($result);//断言为假,是偶数

    }

    /**
     * @test
     * @note 测试使用了ajaxReturn()方法的模块,
     */
    public function OtherModuleTest(){

        $other=new Other();


        /*try{
            //这里写上动作，该动作里面会调用ajaxReturn方法
            $h5->ajaxTest();
        }catch(AjaxReturnEvent $event){
            //这里写上断言，结果为：$event->getMessage()
            //比如：$this->assertEquals('123',$event->getMessage(),'test');
            $this->assert('{"int":1}',$event->getMessage());
        }*/

        $result=$other->ajaxTestV3();
        $this->assert('{"int":1}',$result);//对比两个值是否相同


    }

    /**
     * @test
     * @note 测试其他未使用ajaxReturn方法的模块
     */
    public function testTest(){

        $test=new Test();
        $result=$test->testUnitTest('testUnitTest');
        $this->assertTrue($result);


    }












}
