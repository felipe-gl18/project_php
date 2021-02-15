<?php
include_once("../models/ModelUsuario.php");
session_start();

$usr = new User($_SESSION['login']);

$usr->setLogin($_POST['login']);
if(md5($_POST['senha']) != $usr->getSenha()){
    $usr->setSenha(md5($_POST['senha']));
}

$usr->Update();
header("Location: ../views/home.php");
?>