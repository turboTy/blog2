<?php
//面向对象测试

/* 
 * 1.子类的同名方法会覆盖父类方法
 * 2.子类会自动调用父类的__construct()方法,当子类有自己的__construct()方法是,调用自己的
 * 3.final关键字
 * 
 *  */

error_reporting(E_ERROR);
ini_set("display_errors",1);
class Dad
{
    public function test1()
    {
        echo "this is test1";    
    }
    
    protected function test2()
    {
        echo "this is test2";
    }
    
    private function test3()
    {
        echo "this is test3";
    }
    
}

class Son extends Dad
{
    
}

$a = new Son();
//$a -> test1();
$a -> test2();
//$a -> test3();
























