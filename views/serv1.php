<?php

include_once('../models/ModelAuth.php');
include_once("../models/ModelUsuario.php");

$usr = new User($_SESSION['login']);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/servicon.css">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
</head>
<body>
    <header>

        <a href="home.php"><img class="logo" src="../imgs/logo (1).png" alt="logo"></a>

        <nav class="nav">

            <ul class="nav_links">

                <li><a href="servicos.html">Services</a></li>
                <li><a href="https://github.com/felipe-gl18">Projects</a></li>
                <li><a href="about.html">About</a></li>
        
            </ul>

        </nav>

        <a class="cta" href="index.html"><button id="btntop">Contect</button></a>

    </header>

    <div id="conteudo1">
        
        <form action="../controlls/Inserir_Nota.php" method="post">
        
            <div id="ellipse_P"></div>
        
            <textarea name="nota" maxlength="1000" placeholder="DEIXE ALGUMA ANOTAÇÃO"  id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Concluir" id="completar1">
        
        </form>
    
    </div>

    <div id="nota">
    <p  id="title">NOTAS</p>
    <p id="nota_cont"><?php echo $usr->getNota()?></p>

    </div>

</body>
</html>