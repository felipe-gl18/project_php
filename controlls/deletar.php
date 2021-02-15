<?php
 session_start();
 include_once("../models/ModelUsuario.php");

 $usr = new User($_SESSION['login']);

 $usr->Delete();
 session_destroy();
 header("Location: ../views/index.html")


?>