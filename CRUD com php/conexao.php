<?php
   $hostname = "localhost";
   $bancodedados = "sistemaestoquedb";
   $usuario = "root";
   $senha = "";

   $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
   
   if ($mysqli->connect_errno){
    echo "Falha ao conectar:(" . $mysqli->connect_errno .") " . $mysqli->connect_error;
   }else{
    echo "";
   }


?>