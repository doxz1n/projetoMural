<?php
include "conexao.php";

function login($user, $pass)
{
    $conn = conexao();
    $stmt = $conn->prepare("select senha from tbUsuario where usuario = '$user' ");
    $stmt->execute();
    $pass = sha1($pass);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            if (strcmp($pass, $row['senha']) == 0) {
                $_SESSION['logado'] = true;
                $_SESSION['user'] = $user;
                header("location:paineladm.php");
                break;
            } else {
                echo("Senha inválida");
            }

        }
    } else {
        echo "Usuário inválido";
    }
}

function Verificauser($user)
{
    $conn = conexao();
    $stmt = $conn->prepare("select usuario from tbusuario where usuario = '$user' ");
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return false;
    } else {
        return true;
    }
}

function Salvauser($user, $pass)
{
    $hash = sha1($pass);
    $conn = conexao();
    $stmt = $conn->prepare("insert into tbUsuario values(null,'$user','$hash')");
    $stmt->execute();
    echo "<script>";
    echo "alert('Usuario Salvo');";
    echo "</script>";
}

