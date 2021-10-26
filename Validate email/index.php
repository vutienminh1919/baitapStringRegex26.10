<?php
function check($str){
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
   if (preg_match($pattern,$str,$matches)){
       echo "right!";
   } else{
       echo "wrong";
   }
}
$str1 = "min-%h@gmail.com";
$str2 = "minh@gmail.com";
$str3 = "minh1212@gmail.com";
check($str1);
check($str2);
check($str3);

