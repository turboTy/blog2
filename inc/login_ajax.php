<?php
session_start();
require_once ("../configs/db_conn.php");
require_once ("../inc/global_params.php");

function admin_login()
{
    global $db;  
    global $username,$password,$check_code;
    
    $username = trim($username);
    $password = sha1(md5(trim($password)));
    $check_code = trim(strtolower($check_code));
    
    $loginTime = time();
    $login_ip = $_SERVER['REMOTE_ADDR'];
    
    /*验证码验证*/
    if($check_code == strtolower($_SESSION['vcode']))
    {
        /*用户名密码验证*/
        $sql = "select * from admin_users where admin_username = '$username' and user_password = '$password' limit 1"; 
        $result = $db->query($sql);
        if($result->num_rows <= 0)
        {
            echo '{"stat":"0","text":"登录失败,请检查用户名/密码"}'; 
            exit;
        }
        else
        {
            echo '{"stat":"1","text":"登录成功"}';   
        }
    }
    else
    {
        echo '{"stat":"-1","text":"验证码错误"}';
        exit;
    }
    
    unset($_SESSION['admin_username']);
    unset($_SESSION['user_role']);
    
    sql_select_getonevalue("admin_users", "user_role", "admin_username = '$username'", $user_role);
    
    $_SESSION['admin_username'] = $username;
    $_SESSION['user_role'] = $user_role;
    
    /*更新最后一次登录时间*/
    sql_select_getonevalue("admin_logs", "login_times", " admin_username = '$username'", $login_times); 
    sql_select_getonevalue("admin_logs", "admin_id", " admin_username = '$username'", $admin_id); 
    
    if (!empty($login_times))
    {
        $login_times += 1;
        $sqlL = "update admin_logs set last_logintime = '$loginTime', login_ip = '$login_ip', login_times = '$login_times' where admin_username = '$username' limit 1";
        $resultL = $db->query($sqlL);
    }
    else
    {
        $sqlL = "insert into admin_logs(admin_username, last_logintime, login_ip, login_times, admin_id) values('$username', '$loginTime', '$login_ip', '1', '$admin_id')";
        $result = $db->query($sqlL);
    }
    
    
}

if (!empty($username) && !empty($password) && !empty($check_code))
{
    admin_login();
}

















?>
