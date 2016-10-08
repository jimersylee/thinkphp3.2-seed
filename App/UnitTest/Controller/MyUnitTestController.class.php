<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jimersy Lee
 * Date: 2016-9-25
 * Time: 下午 8:02
 * Description:用来测试方法的单元测试
 */


namespace UnitTest\Controller;

use Test\Controller\OtherController;//如果想测试其他使用了ajaxReturn请求的接口,那么在这里use,然后新建一个继承这个类的class

use Test\Controller\IndexController as Test;//如果想测试未使用ajaxReturn方法的模块,直接在这里use
//use Think\AjaxReturnEvent; //如果要测试调用AjaxReturn()的方法,必须加这句

class Other extends OtherController {

}




class MyUnitTestController extends BaseController  {


    private static $other;
    public function  __construct()
    {
        parent::__construct();
        self::$other=new Other();
    }

    /**
     * @test
     * @note 单元测试可用性检测
     */
    public function selfTest(){
        $test=new MyTestController();
        $result=$test->isOdd(1);//1是否是奇数
        $this->assertTrue($result);//断言为真,是奇数

        $result=$test->isOdd(2);//2是否是奇数
        $this->assertFalse($result);//断言为假,是偶数

    }

    /**
     * @test
     * @note 测试使用了ajaxReturn()方法的模块,
     */
    public function otherModuleTest(){



        $result=self::$other->ajaxTestV3();
        $this->assert('{"int":1}',$result);//对比两个值是否相同


    }

    /**
     * @test
     * @note redis缓存测试
     */
    public function redisTest(){
        $test=new MyTestController();
        $result=$test->redisTest();
        $this->assert('value',$result);

    }














}
