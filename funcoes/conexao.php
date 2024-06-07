'<?php
function conexao(){
    $servidor = "doxz1n.mysql.database.azure.com";
    $banco = "projetoMural";
    $usuario = "doxz1n";
    $senha = "HenriqueBd*";
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    return $conn;
}


