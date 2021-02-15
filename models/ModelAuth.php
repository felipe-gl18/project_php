<?php 
include_once('ModelUsuario.php');
session_start();

if(!$_SESSION['logado']){
    echo("
    <script>
        alert('Você não está logado');
    </script>
    ");
}

?>