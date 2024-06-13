<?php

function conexao(){
    // $servidor = "doxz1n.mysql.database.azure.com";
    $servidor = "localhost";
    $banco = "projetoMural";
    //$usuario = "doxz1n";
    $usuario = "root";
    // $senha = "HenriqueBd*";
    $senha = "";
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    return $conn;
}


