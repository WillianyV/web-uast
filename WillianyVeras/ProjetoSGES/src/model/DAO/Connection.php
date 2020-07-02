<?php

    function getConnection(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nome_db = "sges_db";
        $connection = new mysqli($servidor, $usuario, $senha, $nome_db);

        if(mysqli_connect_errno()){
            die("Conexão Falhou" . mysqli_connect_error());
        }else{
            return $connection;
        }
}