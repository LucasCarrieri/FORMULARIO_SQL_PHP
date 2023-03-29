<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassowrd = '';
    $dbName = 'teste';

    $conexao = new mysqli($dbHost, $dbUsername,$dbPassowrd, $dbName );

   // if($conexao-> connect_errno){
     //   echo "erro";
   // }
   // else
    //{
      //  echo "Conexão efetuada com sucesso";
    //}

?>