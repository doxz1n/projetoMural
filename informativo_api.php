<?php

include ("funcoes/conexao.php");
$conn = conexao();
$stmt = $conn->prepare("select * from tbinformativo");
$stmt->execute();
$data = array();
while ($row=$stmt->fetch()){
    $data[] = $row;
}
for($i = 0; $i < count($data); $i++){
    echo json_encode($data[$i]);
    echo "<br><br>";
}
