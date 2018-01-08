<?php
require_once ("../../smarty/libs/Smarty.class.php");
require_once ("../../configs/db_conn.php");
require_once ("../../inc/global_params.php");
require_once '../../libs/mysql.func.php';
//require_once '../../inc/check_login.php';

//实例化Smarty模版
$t = new Smarty();

$t->setTemplateDir("./template");
$t->setCompileDir("./template_c");
$t->setCacheDir("./smarty_cache");

$t->setLeftDelimiter("{{");
$t->setRightDelimiter("}}");

$t->assign("css_path","../");

/*
$adminName = trim($_POST['adminName']);
$password = sha1(md5(trim($_POST['password'])));
$phone = trim($_POST['phone']);*/

$insertArr = array(
    "user_name" => "adminName",
    "user_role" => "adminRole",
    "email" => "email",
    "user_password" => "password",
    "phone" => "phone",
    "sex" => "sex",
    "user_BZ" => "BZ",
    );
    

switch ($actionCode)
{ 
    default:
    case "add":
        //列出所有管理员类型
        $ops_adminType = add_option("type_id", "type_name", "admin_type", "1", "1", $value);
        $t->assign("ops_adminType", $ops_adminType);
        //var_dump($ops_adminType);
        
        $insert_field = "";
        $insert_value = "";
        
        foreach ($insertArr as $k=>$v)
        {
            if($v == "adminName")
            {
                $insert_field .= $k;
                $insert_value .= "'".trim($$v)."'";
            }
            elseif ($v == "password")
            {
                $insert_field .= ",".$k;
                $insert_value .= ",'".sha1(md5(trim($$v)))."'";
            }
            else
            {
                $insert_field .= ",".$k;
                $insert_value .= ",'".trim($$v)."'";
            }
        }
    
        if(isset($adminName) && isset($password))
        {
            $sql = "insert into admin_users (".$insert_field.",reg_time) values(".$insert_value.",'".time()."')";
            
            //     exit($sql);
            $result = $db->query($sql);
            
            if($db->affected_rows > 0)
            {
                echo '{"stat":"1","text":"保存成功"}';
                exit;
            }
            else
            {
                if($db->errno == "1062")
                {
                    echo '{"stat":"0","text":"用户名已存在"}';
                    exit;
                }
                else
                {
                    echo '{"stat":"0","text":"保存失败"}';
                    exit;
                }
            }  
        }
        
    break;
    case "editUser":
        $sql = "select * from admin_users where id = '$id' limit 0,1";
        $result = $db->query($sql); 
        $row = $result->fetch_assoc();
        
        foreach ($insertArr as $k=>$v)
        {
            $t->assign($v,$row["$k"]);
        }
        $t->assign("id","$id");
        $t->assign("actionCode","update");
       // $t->display("admin-edit.html");
        break;
    case "update":
        $sqlU = "update admin_users set ";
        
        foreach ($insertArr as $k=>$v)
        {
            if(!empty($$v))
            {
                $sqlU .= "$k = '".$$v."',";
            }
        }
        $sqlU = substr($sqlU, 0, -1);
        $sqlU .= " where id = '$id' limit 1";
        
        //echo $sqlU;
        
        $resultU = $db->query($sqlU);
        if($db->affected_rows <= 0)
        {
            echo '{"stat":"0","text":"用户信息更新失败"}';
            exit;
        }
        else 
        {
            echo '{"stat":"1","text":"用户信息更新成功!"}';
            exit;
        }
        
        
        break;
}
/*TODO 
 * 
 * 右上角菜单添加修改密码功能
 * 
 *   */

$t->display("admin-add.html");






















