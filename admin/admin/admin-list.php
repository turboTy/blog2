<?php
/*error_reporting(E_ALL);
ini_set("display_errors",1); */

require_once("../../smarty/libs/Smarty.class.php");
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

$actionCode = empty($actionCode)?"list":$actionCode;

switch ($actionCode)
{
    case "stopUser":
        /* TODO 增加停用权限判断,比较登录用户和被停用用户的权限 */
        $sql = "update admin_users set is_banned = '$is_banned' where id = '$id' limit 1";
        $result = $db->query($sql);
        
        if($db->affected_rows <= 0)
        {
            echo '{"stat":"0","text":"停用账户失败,请确认是否拥有此权限"}';
            exit;
        }
        else 
        {
            echo '{"stat":"1","text":"停用成功"}';
            exit;
        }
        break;
    case "startUser":
        $sql = "update admin_users set is_banned = '$is_banned' where id = '$id' limit 1";
        $result = $db->query($sql);
        
        if($db->affected_rows <= 0)
        {
            echo '{"stat":"0","text":"启用账户失败,请确认是否拥有此权限"}';
            exit;
        }
        else 
        {
            echo '{"stat":"1","text":"启用成功"}';
            exit;
        }
        break;
    case "deleteUser":
        $sql = "delete from admin_users where id = '$id' limit 1";
        $result = $db->query($sql);
        
        if($db->affected_rows <= 0)
        {
            echo '{"stat":"0","text":"删除失败,请确认是否拥有此权限"}';
            exit;
        }
        else
        {
            echo '{"stat":"1","text":"删除成功"}';
            exit;
        }
        break;
    case "deleteUsers":
        $sql = "delete from admin_users where id in ('$ids')";
        $result = $db->query($sql);
        
        if($db->affected_rows <= 0)
        {
            echo '{"stat":"0","text":"批量删除失败,请确认是否拥有此权限"}';
            exit;
        }
        else
        {
            echo '{"stat":"1","text":"批量删除成功"}';
            exit;
        }
        break;
    default:
    case "list":
        $sql = "select * from admin_users";
        $result = $db->query($sql);
        
        if(!result)
        {
            echo "ERROR:".$db->error;
            exit;
        }
        
        $num = $result->num_rows;
        $t->assign("totalNum", $num);
        
        while ($row = $result->fetch_assoc())
        {
            switch ($row['user_role'])
            {
                case "1":
                    $row['user_role'] = "一般管理";
                    break;
                case "5":
                    $row['user_role'] = "高级管理";
                    break;
                case "9":
                    $row['user_role'] = "超级管理员";
                    break;
            }
        
            $row['reg_time'] = !empty($row['reg_time'])?date("Y-m-d H:i:s",$row['reg_time']):"无";
        
            if(empty($row['phone']))
            {
                $row['phone'] = '无';
            }
        
            if(empty($row['email']))
            {
                $row['email'] = '无';
            }
        
            $adminArr[] = $row;
        }
        
        $t->assign("adminArr",$adminArr);
        
        break;
}

//var_dump($adminArr);





















$t->display("admin-list.html");

