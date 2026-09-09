<?php
$configDB = array();
$configDB["host"] 		= "mysql";
$configDB["database"]	= "shop";
$configDB["username"] 	= "root";
$configDB["password"] 	= "12345";
define("HOST", "mysql");
define("DB_NAME", "shop");
define("DB_USER", "root");
define("DB_PASS", "12345");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>