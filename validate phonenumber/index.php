<?php
function check($str){
    $pattern = '/^\([0-9]{2}\)-\([0][0-9]{9}\)$/';
    if (preg_match($pattern,$str)){
        echo "Right!";
    }else{
        echo "Wrong";
    }
}
$str1 = "(84)-(0978489648)";

$str2 = "(a4)-(0978489648)";
$str3 = "(84)-(0978r89648)";
check($str1);
check($str2);
check($str3);