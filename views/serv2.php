<?php

    include_once('../models/ModelAuth.php');
    include_once("../models/ModelUsuario.php");

    $usr = new User ($_SESSION['login']);
    
?>

<!DOCTYPE html>
<html lang="en">
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

    <div id="conteudo2">

        <form action="../controlls/Inserir_Money.php" method="post">

            <div class="quadrado1">

                <input type="text" name="salario" id="salario" placeholder="Quantia disponível" value="">
                <input type="text" name="custoM" id="customensal" placeholder="Custo mensais (estimativa)">
    
                <p>
                Valor gasto para necessidades basicas<br>
                EX:comidas,contas, higiene.
                </p>

            </div>

            <div class="quadrado2">

                <input type="text" name="custoD" id="custoD" placeholder="Custo diário">
                <p id="resto">R$<?php echo $usr->getMoney(); ?> <br>restantes</p>
                <input type="submit" onmouseenter="calcular()" value="concluir" id="completar2">

            </div>

            <div id="imgmoney"><img src="../imgs/humaaans-sitting-1.png"></div>

        </form>

    </div>
    
</body>
</html>


