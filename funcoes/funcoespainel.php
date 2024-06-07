<?php
include "conexao.php";

function mostrarContato(){
    echo "<section><h1 class='display-5'>Contatos</h1><table class='table table-striped'>
            <thead>
            <tr class=table-danger>
        <th scope='col'>ID</th>
        <th scope='col'>Nome</th>
        <th scope='col'>E-mail</th>
        <th scope='col'>Assunto</th>
        <th scope='col'>Mensagem</th>
        <th scope='col'>Excluir</th>
</tr>
</thead>";
    $conn = conexao();
    $stmt = $conn->prepare("select * from tbContato");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo("<tr class=table-danger>");
        echo("<th scope = row> $row[idContato]  </th>");
        echo("<td>  $row[nome]  </td>");
        echo("<td>  $row[email]  </td>");
        echo("<td>  $row[assunto] </td>");
        echo("<td>  $row[mensagem] </td>");
        echo("<td> <a href='deletarContato.php?id=$row[idContato]' class='btn btn-danger'> Excluir </a>");
        echo "</tr>";
    }
    echo "</table></section><br>";
}


function salvarInformativo($titulo, $usuario, $texto, $caminhoimg, $periodo, $datacriacao)
{
    $conn = conexao();
    $stmt = $conn->prepare("insert into tbinformativo values(null,'$titulo','$usuario','$texto','$caminhoimg','$periodo','$datacriacao')");
    $stmt->execute();
    echo "<script>";
    echo "alert('Aviso salvo com sucesso'); window.location.href = 'paineladm.php';";
    echo "</script>";
}

function mostrarInformativo()
{
    echo "<br><section><h1 class='display-5'>Painel Informativo</h1><table class='table table-striped'>
            <thead>
            <tr class=table-warning>
        <th scope='col'>ID</th>
        <th scope='col'>Aviso</th>
        <th scope='col'>Autor</th>
        <th scope='col'>Mensagem</th>
        <th scope='col'>Excluir</th>
</tr>
</thead>";
    $conn = conexao();
    $stmt = $conn->prepare("select * from tbInformativo");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo("<tr class=table-warning>");
        echo("<th scope = row> $row[idInformativo]  </th>");
        echo("<td>  $row[aviso]  </td>");
        echo("<td>  $row[usuario]  </td>");
        echo("<td>  $row[mensagem] </td>");
        echo("<td> <a href='deletarInformativo.php?id=$row[idInformativo]' class='btn btn-danger'> Excluir </a>");
        echo "</tr>";
    }
    echo "</table></section>";
}

