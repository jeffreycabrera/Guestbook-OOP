<?php
require_once('config.php');
$id = $_GET['id'];


messageDAO::deleteMessage($id);
header("location:backend.php");

?>
