<?php
require_once('config.php');
$id = $_GET['id'];


messageDAO::approveMessage($id);
header("location:backend.php");

?>
