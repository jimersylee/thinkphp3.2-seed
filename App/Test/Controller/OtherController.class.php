<?php
/*
Author:Jimersy Lee
Time:2016-9-26 上午 10:28
Description:测试其他模块的控制器,如果其他模块的控制器使用了ajaxReturn()方法,则需要将此控制器文件复制到UnitTest目录下
Action:add
*/

namespace Test\Controller;//如果要测试此模块,因为使用了ajaxReturn()函数,所以要将此文件复制到UnitTest目录,且将namespace设置为UnitTest\Controller
//use Think\AjaxReturnEvent;//如果要以try catch方式截获单元测试的结果,则use此类,同时在核心Controller中,将ajaxReturn()方法选择为支持try catch的
use Think\Controller;
class OtherController extends Controller
{




    /**被测试方法示例,原来使用 直接使用 $this->ajaxReturn()  现在必须写成 return $this->ajaxReturn()
     * 在Controller类中的ajaxReturn方法中,加入对子类名的判断,如果子类是单元测试类,则不使用exit结束,改为return
     */
    public function ajaxTestV3(){
        $data['int']=1;
        return $this->ajaxReturn($data);
    }















}