<?php
session_start();

/**
 * @param int $length   验证码字符长度,默认长度为4
 * @param int $verify_type   验证码类型,默认类型1为纯数字,类型2为数字加大小写字母
 * @param int $pixel    干扰点数量,默认为50
 * @param int $line     干扰线数量,默认为4
 */

function get_verify($length='4',$verify_type='1',$pixel='50',$line='4'){
    /*创建画布和随机颜色 */
    $image = imagecreatetruecolor(80, 26);
    $color = imagecolorallocate($image, mt_rand(120, 255), mt_rand(0,200), mt_rand(0,255));
    $white = imagecolorallocate($image, 255, 255, 255);
    
    /*为画布填充白色*/
    imagefill($image, 0, 0, $white);
    
    /* $length = '4';
     $verify_type = '1';
     $pixel = '50';
    $line = '4'; */
    
    /*根据$verify_type 生成验证码字符串*/
    switch ($verify_type)
    {
        case 1:
            $strarr = range(0, 9); //设定验证码字符范围
            shuffle($strarr);  //打乱$str
            $str = substr(implode("", $strarr),0,$length);   //将数组转化为字符串,以""隔开
            break;
        case 2:
            $strarr = array_merge(range(0,9),range('a','z'),range('A','Z'));
            shuffle($strarr);
            $str = substr(implode("", $strarr),0,$length);
            break;
        default:
        case 1;
    }
    
    /*生成干扰点*/
    for($i=0; $i< $pixel; $i++){
        imagesetpixel($image, mt_rand(0,80), mt_rand(0,26), $color);
    }
    
    /*生成干扰线*/
    for ($j=0; $j < $line; $j++){
        imageline($image, mt_rand(0,60), mt_rand(0,26), mt_rand(20,80), mt_rand(0,26), $color);
    }
    
    $_SESSION['vcode'] = $str;
    //imagettftext($image, 18, 0 , 80/$length-8, 22, $color, "../styles/theme1/fonts/youyuan.TTF", $str);
    imagettftext($image, 18, 0 , 80/$length-8, 22, $color, "../styles/theme1/fonts/msyh.ttf", $str);
    
    /*生成验证码*/
    ob_clean();
    header("content-type:image/png");
    imagepng($image);
    imagedestroy($image);
    
}

get_verify(4,2,50,4);














