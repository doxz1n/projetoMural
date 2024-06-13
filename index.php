<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/Index.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column min-vh-100">
    <?php include("menu.php"); include ("funcoes/conexao.php")?>
    <main class="flex-grow-1">
        <h1 class="text-center my-4">Painel Informativo</h1>
        <section class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $conn = conexao();
                $stmt = $conn->prepare("SELECT * FROM tbinformativo order by datacriacao desc limit 10");
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    echo "<div class='col'>";
                    echo "<div class='card h-100'>";
                    echo "<img src='uploads/{$row['caminhoimg']}' class='card-img-top' alt='Image'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>{$row['titulo']}</h5>";
                    echo "<p class='card-text'>{$row['texto']}</p>";
                    echo "<p class='card-text'>Até o dia {$row['periodo']}</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                    echo "<small class='text-body-secondary'>Publicado em {$row['datacriacao']} por {$row['usuario']}</small>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>
    </main>
    <?php include("footer.php"); ?>
</div>
</body>
</html>
