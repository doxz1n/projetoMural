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
    <title>Cadastro Painel Informativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>

<body>
    <header>
        <a href="logoff.php"><img src="imgs/logout.png" width="10%" /></a>
    </header>
    <section class="container">
        <div class="child">
        <h1 class="display-5"> Cadastro Informativo </h1>
            <form method="post">
                <div class="form-group">
                    <div class="mb-3">
                        <label> Aviso </label>
                        <input type="text" class="form-control" name="aviso" required>
                    </div>
                    <div class="mb-3">
                        <label>Usuário</label>
                        <?php echo "<input class='form-control' type='text' placeholder='$user' disabled>" ?>
                    </div>
                    <div class="mb-3">
                        <label> Mensagem </label>
                        <textarea name="mensagem" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
    <?php
    include ("footer.php");
    ?>
    <?php
    if (isset($_POST['aviso'])) {
        salvarInformativo($_POST['aviso'], $user, $_POST['mensagem']);
    }
    ?>
</body>

</html>