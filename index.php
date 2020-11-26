<?php

$str1 = "Кири лл ирик";
$str2 = "Sum sumamus mus";
$str3 = "acdscaca";


echo check($str1)."<br>";
echo check($str2)."<br>";
echo check($str3);


function check($str) {

        $str = preg_split('//u', $str);
        $str = array_reverse($str);
        $str = join($str);
        return $str;
}

?>