<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UnitTest\Controller;



class IndexController extends BaseController {
  
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
