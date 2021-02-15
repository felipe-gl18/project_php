<?php 

    include_once("../models/ModelUsuario.php");
    session_start();

    $usr = new User ($_SESSION['login']);
    $usr->setCalorias(($_POST['caloriasT']) - ($_POST['caloriasR']));
    $usr->setPeso($_POST['metadepeso']);
    $usr->setResto_Peso(($_POST['metadepeso']) - ($_POST['peso']));
    
    $usr->Update_Meta();

    header("Location: ../views/serv3.php");
?>