<?php
$str1 = "Аргентина манит негра";
$str2 = "Sum sumamus mus";
$str3 = "acdscaca";
check($str3);
function check($str){
    $string = mb_strtolower(str_replace(' ', '', $str));
    $stri1 = "";
    $stri = "";
    $stri2 = "";
    $stri3 = "";
    for($i = 0, $j = strlen($string) - 1; $i < $j; $i++, $j--){
        if(!(is_int(strlen($string) / 2))){
            $stri3 = $string[$i+1];
        }
        if($string[$i] == $string[$j] ){
            $stri1 .= $string[$i];
            $stri .= $string[$j];
            $stri2 = strrev($stri);
        }
    }
    if ($stri1 != $stri2){ echo $stri1 ."". $stri3 ."". $stri2; }else{ echo $string[0]; }
}
?>