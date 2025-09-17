<?php
require_once('bd.php');
session_start();
session_destroy();
$_SESSION["nome_professor"] = "";
$SESSION["professor_id"] = null;
$SESSION["conectado"] = false;

header("Location: login.php");
?>