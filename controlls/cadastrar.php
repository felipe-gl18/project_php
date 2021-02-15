<?php

include_once("../models/ModelUsuario.php");
session_start();

$usr = new User;


foreach($_POST as $indice => $value){

    $_POST[$indice] = addslashes($_POST[$indice]);

}

if(!$_POST['login'] or !$_POST['senha']) {
    
    echo("
        <script>
            alert('Preencha os campos');
            window.location='../views/Cadastro.html';
        </script>
    ");

}else{

    $link = mysqli_connect('localhost','root','','cadastro');
    $login = $_POST['login'];
    $sql = "SELECT login from clients where login like '$login'";
    $exe = mysqli_query($link,$sql)or die ("Opa");

    if(mysqli_num_rows($exe)!=0){
    
        echo("
            <script>
                alert('Esse usuário já existe');
                window.location='../views/Cadastro.html';
            </script>
        ");
    }else{

        $usr->setLogin($_POST['login']);
        $usr->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));

        $usr->Inserir();
        header('Location:../views/home.php');
    
    }

}

?>