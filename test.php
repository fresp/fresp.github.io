<?php
$string = "Hy all follow akun kita ya @hahahha.abcd hehe";
$caption = str_replace('  ',' @'.$igname.' ', preg_replace('/(@[a-zA-Z_0-9._]+)/', '', $string));

$caption = str_replace('  ',' @frezanugraha ', preg_replace('/(@[a-zA-Z_0-9._]+)/', '', $string));
echo $caption;
?>