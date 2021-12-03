<?php
    try{
        $conexao = new PDO('mysql:host=localhost;dbname=aula-test','root','');
         $conexao -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);     
    } catch (PDOException $erro){
        echo 'ERRO'  . $erro ->getMessage();
        }
?>