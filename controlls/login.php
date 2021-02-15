<?php
include_once("../models/ModelUsuario.php");
session_start();
$usr = new User(addslashes($_POST['login']));

if($_POST['login'] == $usr->getLogin()){
   if(password_verify($_POST['senha'], $usr->getSenha())){
        $_SESSION['login'] = $usr->getLogin();
        $_SESSION['senha'] = $usr->getSenha();
        $_SESSION['logado'] = true;
        header('Location: ../views/home.php');        
    }
    else{
        echo("
        <script>
            alert('Senha incorreta');
            window.location='../views/index.html';
        </script>
        ");
    }
}
else{
    echo("
    <script>
        alert('Este usuário não existe');
        window.location='../views/index.html' 
    </script>
    ");
}


?>