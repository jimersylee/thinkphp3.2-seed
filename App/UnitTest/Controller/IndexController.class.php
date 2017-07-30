<?php

/**
 * 简单一些函数测试例子,不涉及控制器
 */

namespace UnitTest\Controller;



use codespy\analyzer;

class IndexController extends BaseController {
  

    public function __construct()
    {
        parent::__construct();
        /*include "codespy.php";
        analyzer::$outputdir =APP_PATH."Runtime";
        analyzer::$outputformat = 'html';*/

    }


    /**
   *
   *@test
   *
   **/
    public function Test_index(){


        return true;
    }
   /**
   *
   *@test 
   *
   **/
    public function Test_2(){
		$array = array();
        $assert = $array;


        $this->assert($assert, $array);
    }
  /**
   *
   *@test 
   *
   **/
	public function Test_3(){
		$array = array();
        $assert = 0; 
        $this->assert($assert,count($array));
    }
   /**
   *
   *@test 
   *
   **/
    public function Test_4(){
		/*$array = array();
        $assert = $array; 
        $this->assert_is_array($array);
        return json_decode($assert, true);*/
    }	  
}
