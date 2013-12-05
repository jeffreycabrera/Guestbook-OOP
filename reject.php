<?php
require_once('config.php');
$id = $_GET['id'];


messageDAO::rejectMessage($id);
header("location:backend.php");

?>
