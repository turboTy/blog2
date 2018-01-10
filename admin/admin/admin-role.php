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
        
        $totalNum = $resultL->num_rows;
        $t->assign("totalNum", $totalNum);
        
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
        
    case "delete":
        $sqlD = "delete from admin_type where id = '$id' limit 1";
        $resultD = $db->query($sqlD); 
        
        if($db->affected_rows < 1)
        {
            echo '{"delStat":"0","delText":"删除失败"}';
            exit;
        }
        else 
        {
            echo '{"delStat":"1","delText":"删除成功"}';
            exit;
        }
        break;
        
    case "deleteMore":
        $sqlM = "delete from admin_type where id in (".$ids.")";
        //echo $sqlM;
        $resultM = $db->query($sqlM);
        
        if($db->affected_rows < 1)
        {
            echo '{"delMStat":"0","delMText":"删除失败"}';
            exit;
        }
        else 
        {
            $affected_rows = count(explode(",", $ids));
            sql_select_getonevalue("admin_type", "count(*)", " 1", $count);
            echo '{"delMStat":"1","delMText":"删除了'.$affected_rows.'条数据","delMCount":"'.$count.'"}';
            //echo '{"delMStat":"1","delMText":"批量删除成功"}';
            exit;
        }
        break;
}









$t->display("admin-role.html");

