<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    include("menu.php");
    include("funcoes/funcoesusuario.php");
    ?>
    <section class="container">
        <div class="child">
            <h1 class="display-5"> Login Administrador </h1>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
            <?php
            if (isset($_POST['usuario'])) {
                login($_POST['usuario'], $_POST['senha']);
            }
            ?>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>
</body>

</html>