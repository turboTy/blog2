<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录页面</title>   
        <!-- Bootstrap -->
        <link href="styles/theme1/css/bootstrap.min.css" rel="stylesheet">
        
        <!--你自己的样式文件 -->
        <link href="styles/theme1/css/reset.css" rel="stylesheet">
        <link href="styles/theme1/css/style1.css" rel="stylesheet">   
         
        <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
    require_once("./configs/db_conn.php");
    require_once("./smarty/libs/Smarty.class.php");
    
    
    //require_once("header.php");
    ?>
    
    <div class="log-main">
         <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 login-window">
                    <table cellpadding="0" cellpadding="0" width="70%" border="0"> 
                        <tr>
                            <td colspan="2" align="center"><span>用户登录<span></td>
                        </tr>
                        <tr>
                            <td width="30%" align="right">用户名：</td>
                            <td width="70%"><input type="text" name="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right">密　码：</td>
                            <td><input type="text" name="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right">验证码：</td>
                            <td>
                                <input type="text" name="username" class="form-control check_code fl">
                                <img src="#" alt="验证码" class="check_code_img fl">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="login-items">
                                <label><input type="radio" name="auto_pwd">记住密码</label>&nbsp;
                                <label><input type="radio" name="auto_login">自动登录</label>
                                <a href="#" class="fr">忘记密码?</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="button" name="submit" value="登 录" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" name="reset" value="重 置"  class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">&nbsp;</div>
            </div>
        </div>
    </div>
    
    
    
    
    
    <?php 
    //require_once("footer.php");
    
    ?>  
        
        
        <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
        <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    </body>
</html>
















