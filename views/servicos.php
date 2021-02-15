<?php
    include_once('../models/ModelAuth.php');
    $usr = new User ($_SESSION['login']);    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/servicos.css">
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

  <div class="retangulo" id="all">
    
    <div class="retangulo2">

      <div class="ellipse"></div>

      <a href="../views/serv1.php"><button id="btn1">Ir</button></a>

    </div>

    <div class="retangulo3">

      <div class="ellipse2"></div>

      <a href="../views/serv2.php"><button id="btn2">Ir</button></a>

    </div>
        
    <div class="retangulo4">

      <div class="ellipse3"></div>

      <a href="../views/serv3.php"><button id="btn3">Ir</button></a>

    </div>

  </div>

<script src="../JS/clock.js"></script>

</body> 
</html>

