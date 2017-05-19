<?php
require_once("./smarty/libs/Smarty.class.php");

$t = new Smarty;

$t->setTemplateDir("./templates");
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

$t->display("test.html");

echo md5(sha1("845383047"));





=======
<?php
require_once("./smarty/libs/Smarty.class.php");

$t = new Smarty;

$t->setTemplateDir("./templates");
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

$t->display("test.html");

echo md5(sha1("845383047"));





>>>>>>> origin/master
