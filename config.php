<?php
$config;

$config['root'] = dirname(__FILE__); //$_SERVER['DOCUMENT_ROOT'];
$config['engine_dir'] = "engine";
$config['engine_root'] = $config['root']."/".$config['engine_dir'];

$config['domain'] = $_SERVER['HTTP_HOST'];

//

$config['mysql_host'] = "localhost"; //Палево
$config['mysql_user'] = "****"; //Палево
$config['mysql_password'] = "****"; //Палево
$config['mysql_name'] = "****"; //Палево

$config['salt'] = "****"; //Палево
$config['sig_salt'] = "****"; //Палево
$config['admin_salt'] = "****"; //Палево

$config['admin_email'] = "****"; // Email администратора (ОБЯЗАТЕЛЬНО ИЗМЕНИТЬ НА СВОЙ)

?>