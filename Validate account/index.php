<?php
function check($str){
    $a = '/^[_a-z0-9]{6,}$/';
    if (preg_match($a,$str)){
        echo " right!";
    }else{
        echo "wrong";
    }
}
$str1 = "minh12";
$str2 = "minh1234";
$str3 = "min-5645";
check($str1);
check($str2);
check($str3);