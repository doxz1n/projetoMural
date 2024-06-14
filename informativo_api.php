<?php

include ("funcoes/conexao.php");
$conn = conexao();
$stmt = $conn->prepare("select * from tbinformativo");
$stmt->execute();
$data = array();
while ($row=$stmt->fetch()){
    $data[] = $row;
}
echo json_encode($data);

