<?php
session_start();
$id_usuario=$_SESSION['id'] ;
$alias=$_SESSION['alias'];
echo json_encode($alias);
?>