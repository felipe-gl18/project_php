<?php 
include_once("../models/ModelUsuario.php");
session_start();

$usr = new User($_SESSION['login']);

$usr->setNota($_POST['nota']);

$usr->Inserir_Nota();

header("Location: ../views/serv1.php")

?>