<?php
error_reporting(E_ERROR);
ini_set("display_errors",1);
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

switch ($actionCode)
{
    default:
    case "list":
        $sqlL = "select * from admin_type";
        $resultL = $db->query($sqlL);
        
        if(!resultL)
        {
            echo '查询管理员类型失败!';
            return false;
        }
        
        while ($rowL = $resultL->fetch_assoc())
        {
            sql_select_getallvalue("admin_users", "user_name", "user_role = '".$rowL['type_id']."'", $arr_nameLists);

            //var_dump($arr_nameLists);
            $adminStr = "";
            foreach ($arr_nameLists as $k => $v){
                $adminStr .= $v.",";
            }
            
            $rowL['nameLists'] = $adminStr == ""?"无":substr($adminStr, 0, -1);
            $adminType_lists[] = $rowL;
        }
        $t->assign("adminType_lists", $adminType_lists);
        break;
}









$t->display("admin-role.html");

