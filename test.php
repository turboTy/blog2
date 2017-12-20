<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once("./smarty/libs/Smarty.class.php");

$t = new Smarty;

$t->setTemplateDir("./template");
$t->setCompileDir("./template_c");
$t->setCacheDir("./smarty_cache");

$a = array(
    0=>array('id'=>'1','title'=>'aaa'),
    1=>array('id'=>'2','title'=>'bbb'),
    2=>array('id'=>'3','title'=>'ccc')
);

$str = "hello world";


$t->assign("arr",$a);
$t->assign("str",$str);

$t->display("test-smarty.html");

echo md5(sha1("admin123"));

