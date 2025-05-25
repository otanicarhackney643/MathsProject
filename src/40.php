<?php
// PHP code to generate a random password
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$password = rand(8, 16);
$password .= substr(str_shuffle($characters), -$password % strlen($characters));
echo $password;
?>
