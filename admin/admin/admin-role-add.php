<?php
require_once ("../../smarty/libs/Smarty.class.php");
require_once ("../../configs/db_conn.php");
require_once ("../../inc/global_params.php");
require_once '../../libs/mysql.func.php';

//实例化Smarty模版
$t = new Smarty();

$t->setTemplateDir("./template");
$t->setCompileDir("./template_c");
$t->setCacheDir("./smarty_cache");

$t->setLeftDelimiter("{{");
$t->setRightDelimiter("}}");

$t->assign("css_path","../");














$t->display("admin-role-add.html");
