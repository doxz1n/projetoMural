<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">

</head>

<body>
    <?php
    include "menu.php";
    ?>
    <section class="container">
        <div class="child">
            <h1 class="display-5"> Cadastro Administrador </h1>
            <form action=cadastrousr.php method="post">
                <div class="form-group">
                    <div>
                        <label> Usuário </label>
                        <input type="text" class="form-control" name="txUser" required>
                    </div>
                    <div>
                        <label> Senha </label>
                        <input type="password" class="form-control" name="txPass" required>
                    </div>
                    <div>
                        <label> Confirme a senha </label>
                        <input type="password" class="form-control" name="txConfirmPass">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
    <?php
    include "funcoes/funcoesusuario.php";
    if (isset($_POST['txUser']) && isset($_POST['txPass']) && isset($_POST['txConfirmPass'])) {
        if ($_POST['txPass'] != $_POST['txConfirmPass']) {
            echo "As senhas não são iguais";
        } else {
            if (Verificauser($_POST['txUser']) === false) {
                echo "Usuário já existente";
            } else {
                Salvauser($_POST['txUser'], $_POST['txPass']);
            }
        }
    } else {
        echo "Digite todos os campos";
    }
    ?>
    <?php
    include "footer.php";
    ?>
</body>

</html>