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

/**
 * 为了测试OtherController这个类(包含ajaxReturn),新建这个空类来继承,主要是为了生成继承关系
 * Class Other
 * @package UnitTest\Controller
 */
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
    /*public function selfTest(){
        $test=new MyTestController();
        $result=$test->isOdd(1);//1是否是奇数
        $this->assertTrue($result);//断言为真,是奇数

        $result=$test->isOdd(2);//2是否是奇数
        $this->assertFalse($result);//断言为假,是偶数

    }*/

    /**
     * @test
     * @note 测试使用了ajaxReturn()方法的模块,
     */
    public function otherModuleTest(){

        $result=self::$other->ajaxTestV3();
        $this->assert('{"int":1}',$result);//对比两个值是否相同


        $result=self::$other->ajaxTestV3(2);
        $this->assert("2",$result);



        $result=self::$other->test(1);
        $this->assert("1",$result);

        $result=self::$other->test(2);
        $this->assert("2",$result);

        $result=self::$other->test(3);
        $this->assert("3",$result);



    }

    /**
     * @test
     * @note redis缓存测试
     */
    /*public function redisTest(){
        $test=new MyTestController();
        $result=$test->redisTest();
        $this->assert('value',$result);

    }*/














}
