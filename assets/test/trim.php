<?php
$post = "hello wor'ld      jum'ah";
echo $post."<br/>";
$str = $post;
$arr = explode(' ', trim($str));
$str2 = trim(preg_replace('/\s+/', '', $str));
$array = array_filter($arr);

print_r(array_values($array));
echo trim($str);
?>