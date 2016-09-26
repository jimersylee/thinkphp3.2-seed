## 简介

ThinkPHP 是一个免费开源的，快速、简单的面向对象的 轻量级PHP开发框架 ，创立于2006年初，遵循Apache2开源协议发布，是为了敏捷WEB应用开发和简化企业应用开发而诞生的。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。并且拥有众多的原创功能和特性，在社区团队的积极参与下，在易用性、扩展性和性能方面不断优化和改进，已经成长为国内最领先和最具影响力的WEB应用开发框架，众多的典型案例确保可以稳定用于商业以及门户级的开发。

## 全面的WEB开发特性支持

最新的ThinkPHP为WEB应用开发提供了强有力的支持，这些支持包括：

*  MVC支持-基于多层模型（M）、视图（V）、控制器（C）的设计模式
*  ORM支持-提供了全功能和高性能的ORM支持，支持大部分数据库
*  模板引擎支持-内置了高性能的基于标签库和XML标签的编译型模板引擎
*  RESTFul支持-通过REST控制器扩展提供了RESTFul支持，为你打造全新的URL设计和访问体验
*  云平台支持-提供了对新浪SAE平台和百度BAE平台的强力支持，具备“横跨性”和“平滑性”，支持本地化开发和调试以及部署切换，让你轻松过渡，打造全新的开发体验。
*  CLI支持-支持基于命令行的应用开发
*  RPC支持-提供包括PHPRpc、HProse、jsonRPC和Yar在内远程调用解决方案
*  MongoDb支持-提供NoSQL的支持
*  缓存支持-提供了包括文件、数据库、Memcache、Xcache、Redis等多种类型的缓存支持

## 大道至简的开发理念

ThinkPHP从诞生以来一直秉承大道至简的开发理念，无论从底层实现还是应用开发，我们都倡导用最少的代码完成相同的功能，正是由于对简单的执着和代码的修炼，让我们长期保持出色的性能和极速的开发体验。在主流PHP开发框架的评测数据中表现卓越，简单和快速开发是我们不变的宗旨。

## 安全性

框架在系统层面提供了众多的安全特性，确保你的网站和产品安全无忧。这些特性包括：

*  XSS安全防护
*  表单自动验证
*  强制数据类型转换
*  输入数据过滤
*  表单令牌验证
*  防SQL注入
*  图像上传检测

## 商业友好的开源协议

ThinkPHP遵循Apache2开源协议发布。Apache Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，同样允许代码修改，再作为开源或商业软件发布。




#修改说明
* 为了兼容测试框架,对核心库 ThinkPHP3.2.3Custom\ThinkPHP\Library\Think\Controller.class.php的ajaxReturn()方法进行重构
* 添加UnitTest模块,此模块为单元测试框架
## 单元测试框架使用说明
* 在UnitTest\Controller目录下添加MyUnitTestController.class.php
```
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
        $result=$test->isOdd(1);//1是否是奇数
        $this->assertTrue($result);//断言为真,是奇数

        $result=$test->isOdd(2);//2是否是奇数
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
````