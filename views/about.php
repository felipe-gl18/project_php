<?php
    include_once('../models/ModelAuth.php');
    $usr = new User ($_SESSION['login']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style4.css">

</head>
<body>
    <header>
      <a href="home.php"><img class="logo" src="../imgs/logo (1).png" alt="logo"></a>
          <nav class="nav">
            <ul class="nav_links">
              <li><a href="servicos.php">Services</a></li>
              <li><a href="https://github.com/felipe-gl18">Projects</a></li>
              <li><a href="about.php">About</a></li>
            </ul>
          </nav>
          <a class="cta" href="index.html"><button id="btntop">Contect</button></a>   
    </header>
    <img src="../imgs/Grupo 3.png" class="img1">
    <img src="../imgs/Grupo 2.png" class="img2">
    <img src="../imgs/Grupo 4.png" class="img3">
    <a href="https://www.facebook.com/felipe.lino.7902/">
      <img src="../imgs/Retângulo 6.png" class="img4">
    </a>
    <a href="https://www.instagram.com/lipe_g.l/">
      <img src="../imgs/Retângulo 7.png" class="img5">
    </a>
    <img src="../imgs/Grupo 5.png" class="img6">
    <div class="who">
      <H2>Who am I ?</H2>
      <p>
        Meu nome é Felipe, com 13 anos eu conheci a programção,<br>
        acabei que apaixonado pela função e aqui estou hoje, tentando desenvolver meu 1° web site.<br>
        No memento eu admito que estou em um nível baixo de conhecimento, pretendo ir aos poucos<br>
        e claro pretendo evoluir cada vez mais.
        <br>
        <br>
        <a href="https://github.com/felipe-gl18">Outros projetos</a>
      </p>
    </div>

    <!--Ícones feitos por <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>-->
        
</body>
</html>