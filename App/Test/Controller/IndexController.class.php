<?php
namespace Test\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    }


    public function testUnitTest($param){
        return $param==__FUNCTION__?true:false;

    }
}