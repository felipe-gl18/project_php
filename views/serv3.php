<?php

    include_once('../models/ModelAuth.php');
    include_once("../models/ModelUsuario.php");

    $usr = new User ($_SESSION['login']);
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/servicon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

    <title>Document</title>

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

    <div id="conteudo3">

        <form action="../controlls/Inserir_Meta.php" method="post">

            <div class="quadrado3">

                <input type="text" name="caloriasT" id="caloriasT" placeholder="Q. de Calorias necessárias" value="<?php  echo $usr->getCalorias();  ?>">
                <input type="text" name="caloriasR" id="calorias" placeholder="Quantidade por refeição">
  
                <p>

                Os dados de cor vermelha vão permanecer com <br>valores iniciais
                , mas caso queira mudar tbm é possivel,<br> basta clicar no 
                botão azul

                </p>   
  

            </div>

            <div class="quadrado4">
                <input type="text" name="metadepeso" id="metaP" placeholder="Meta de peso" onclick="alertPeso()" value="<?php echo $usr->getPeso(); ?>"> 
                <input type="text" name="peso" id="pesoatual" placeholder="Peso atual">
                <input type="submit" value="Concluir" id="completar3">
            </div>

            <div id="imgpeso"><img src="../imgs/humaaans-sitting-2.png"></div>

        </form>

    </div>
    <p id ="resto_peso"><?php echo $usr->getResto_Peso()."kg restantes";?></p>   

</body>
</html>