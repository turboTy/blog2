<?php
require_once ("../configs/db_conn.php");
requrie_once ("../inc/global_params.php");

function admin_login()
{
    global $db;  
    global $username,$password,$checkCode;
    
    $username = trim($username);
    $password = sha1(md5(trim($password)));
    $checkCode = trim($checkCode);
    
    $loginTime = time();
    $loginIp = $_SERVER['REMOTE_ADDR'];
    
    /*验证码验证*/
    if($checkCode == $_SESSION['checkCode'])
    {
        /*用户名密码验证*/
        $sql = "select * from admin_users where admin_username = '$username' and user_password = '$password' limit 1"; 
        $result = $db->query($sql);
        if($result->num_rows <= 0)
        {
            echo '{"stat":"0","text":"登录失败,请检查用户名/密码"}'; 
        }
        else
        {
            echo '{"stat":"1","text":"登录成功"}';   
            exit;
        }
    }
    else
    {
        echo '{"stat":"-1","text":"验证码错误"}';
        exit;
    }
    
    /*更新最后一次登录时间*/
    sql_select_getonevalue("admin_users", "last_logintime", " admin_username = '$username'", $last_logintime);  
    sql_select_getonevalue("admin_users", "login_ip", " admin_username = '$username'", $login_ip);
    
    if (!empty($last_logintime) && !empty($login_ip))
    {
        $sqlL = "update admin_users set last_logintime = '$loginTime', login_ip = '$login_ip' where admin_username = '$username' limit 1";
        $resultL = $db->query($sqlL);
        
        if($db->affected_rows <= 0)
        {
            echo '{"update":"0","text":}'
        }
    }
}

















?>
