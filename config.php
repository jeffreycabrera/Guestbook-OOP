<?php
require_once('Message.php');
require_once('MessageDAO.php');
$config = array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'webprog'
);

mysql_connect($config['host'], $config['username'], $config['password']);
mysql_select_db($config['database']);
?>
