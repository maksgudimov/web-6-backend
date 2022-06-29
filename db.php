<?php
$user = 'u41732';
$pass = '9367477';
$db = new PDO('mysql:host=localhost;dbname=u41732', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>