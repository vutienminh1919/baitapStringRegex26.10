<?php
function check($str){
    $pattern = '/^[CAP]*\d{4}[GHIKLM]*$/';
    if (preg_match($pattern,$str)){
        echo "Right!";
    }else{
        echo "Wrong";
    }
}
$str1 = "C0318G";
$str2 = "M0318G";
$str3 = "P0323A";
check($str1);
check($str2);
check($str3);

