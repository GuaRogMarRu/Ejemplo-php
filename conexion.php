<?php

  $mysqli = new mysqli('localhost', 'root', '', 'prueba_ini');
  $mysqli->set_charset("utf8");
  
  if (mysqli_connect_errno()) {
    printf("Fallo la conexón");
  }else{
    printf("Estas conectado");
  }
?>