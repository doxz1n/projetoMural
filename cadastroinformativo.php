<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
}
include "funcoes/funcoespainel.php";
$user = $_SESSION['user'];
date_default_timezone_set('America/Sao_Paulo');
$criacao = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro Painel Informativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>

<body>
    <a href="logoff.php" class="btn btn-danger btn-lg botoes">Sair do sistema</a>
<section class="container">
    <div class="child">
        <h1 class="display-5"> Cadastro Informativo </h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="mb-3">
                    <label> Título </label>
                    <input type="text" class="form-control" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label>Usuário</label>
                    <?php echo "<input class='form-control' type='text' placeholder='$user' disabled>" ?>
                </div>
                <div class="mb-3">
                    <label> Texto </label>
                    <textarea name="texto" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagem</label>
                    <input class="form-control" type="file" name="img" required accept="image/jpeg, image/png">
                </div>
                <div class="mb-3">
                    <label class="form-label">Período</label>
                    <input class="form-control" type="date" name="periodo" required>
                </div>
                <div class="mb-3">
                    <label>Data de Criação</label>
                    <?php echo "<input class='form-control' type='text' placeholder='$criacao' disabled>" ?>
                </div>
                <input type="submit" class="btn btn-primary">
        </form>
    </div>
</section>
<?php
include("footer.php");
?>
<?php
if(isset($_POST["titulo"])){
    $criacao = date("Y-m-d", strtotime($criacao));
    $perido = date('Y-m-d', strtotime($_POST["periodo"]));
    $arqINome = $_FILES["img"]["name"];
    $arqINomeTemp = $_FILES["img"]["tmp_name"];
    if (is_uploaded_file($arqINomeTemp)) {
        if (move_uploaded_file($arqINomeTemp, "uploads/" ."$criacao". "_" . $arqINome)) {
            $caminhoimg = "$criacao". "_" . $arqINome;
            salvarInformativo($_POST["titulo"],$user,$_POST["texto"],$caminhoimg,$perido, $criacao);
        } else {
            $erro = "Falha ao mover imagem do marcador";
            echo "$erro";
        }
    } else {
        $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
        echo "$erro";
    }
}
?>
</body>
</html>