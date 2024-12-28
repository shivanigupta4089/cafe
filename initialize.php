<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');

// Define base URLs and app path
if(!defined('base_url')) define('base_url','http://localhost/cscs/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );

// Define database connection constants for PostgreSQL
if(!defined('DB_SERVER')) define('DB_SERVER',"dpg-cto423rqf0us73alpilg-a"); // Render PostgreSQL host
if(!defined('DB_USERNAME')) define('DB_USERNAME',"dev_shivani"); // Render PostgreSQL username
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"oXzMsQtfvwjnYVt5khDqjH2z2ql2dpfH"); // Render PostgreSQL password
if(!defined('DB_NAME')) define('DB_NAME',"cscs_db"); // Render PostgreSQL database name
?>
