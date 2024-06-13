<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
}
include "funcoes/funcoespainel.php";
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina de Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>
<body>
<a href="logoff.php" class="btn btn-danger btn-lg botoes">Sair do sistema</a>
<?php
echo "<div class='center'> <h1> Bem vindo $user </h1> </div>";
mostrarContato();
?>
<a href="cadastroinformativo.php" class="btn btn-primary botoes"> Cadastro para o Painel Informativo </a>
<?php mostrarInformativo(); ?>
<?php
include "footer.php";
?>
</body>
</html>