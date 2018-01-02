<?php
/* 此页面未启用
 *  */
header("content-type: text/html;charset=utf8");
//error_reporting(E_ALL^ E_NOTICE);

session_start();
require_once ("configs/db_conn.php");

$username = addslashes(trim($_POST['username']));
$password = sha1(md5(trim($_POST['password'])));
$verifycode = strtolower(trim($_POST['user_vcode']));
$vcode = strtolower($_SESSION['vcode']);    //session['vcode']

$auto_login = $_POST['auto_login']; //自动登录
$auto_pwd = $_POST['auto_pwd']; //记住密码

if(isset($vcode) && $vcode != "")
{
    if($vcode == $verifycode)
    {
        $sql = "select id from blog_users where user_name = '$username' and user_password = '$password'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        
        if($row)
        {
            echo '{"u_success":"true","u_msg":"登录成功"}';
        }
        else
        {
            echo '{"u_success":"false","u_msg":"用户名或密码错误"}';
        }
        
    }
    else
    {
       echo '{"v_success":"false","v_msg":"验证码错误"}';
       // echo "{'v_success':'false','v_msg':'验证码错误'}";
    }
}






















