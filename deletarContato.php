<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("Location: login.php");
}
include "funcoes/conexao.php";
$id = $_GET['id'];
$conn = conexao();
$stmt = $conn->prepare("delete from tbContato where idContato = '$id'");
$stmt->execute();
echo "<script>";
echo "alert('Contato excluído com sucesso!');";
echo "window.location.href = 'paineladm.php';";
echo "</script>";;