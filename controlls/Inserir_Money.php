<?php
    include_once("../models/ModelUsuario.php");
    session_start();

    $usr = new User($_SESSION['login']);
    $usr->setMoney(($_POST['salario']) - ($_POST['custoM']) - ($_POST['custoD']));
    $usr->Update_Money();
    header("Location: ../views/serv2.php");

?>