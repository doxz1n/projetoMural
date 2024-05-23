<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fale Conosco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>
<body>
<?php
include("menu.php");
?>
<section class="container">
    <div class="child">
        <h1 class="display-5"> Fale Conosco </h1>
        <form action=contato.php method="post">
            <div class="form-group">
                <div class="mb-3">
                    <label> Nome Completo </label>
                    <input type="text" class="form-control" name="txNome" required>
                </div>
                <div class="mb-3">
                    <label> E-mail </label>
                    <input type="email" class="form-control" name="txEmail" required>
                </div>
                <div class="mb-3">
                    <label> Assunto </label>
                    <input type="text" class="form-control" name="txAssunto">
                </div>
                <div class="mb-3">
                    <label> Mensagem </label>
                    <textarea name="txMensagem" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</section>
<?php
include("footer.php");
?>
</body>
</html>
<?php
include("funcoes/funcoescontato.php");
if (isset($_POST['txNome']) && isset($_POST['txEmail']) && isset($_POST['txAssunto']) && isset($_POST['txMensagem'])) {
    salvarContato($_POST['txNome'], $_POST['txEmail'], $_POST['txAssunto'], $_POST['txMensagem']);
}