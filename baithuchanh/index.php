<?php
//function check($str){
//    $regexp = '/^[A-Z]/';
//    if (preg_match($regexp,$str)){
//        echo"String's first character is uppercase"."<br>";
//    } else {
//        echo"String's first character is not uppercase";
//    }
//}
//$str1 = 'Minh';
//$str2 = 'minh';
//check($str1);
//check($str2);
$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}