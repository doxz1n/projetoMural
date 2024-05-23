<?php
include "conexao.php";
function salvarContato($nome, $email, $assunto, $mensagem)
{
    $conn = conexao();
    $stmt = $conn->prepare("insert into tbcontato values(
                          null,
                          '$nome',
                          '$email',
                          '$assunto',
                             '$mensagem'
                          )
                      ");
    $stmt->execute();
    echo "<script>";
    echo "alert('Mensagem enviada com sucesso');";
    echo "</script>";
}





