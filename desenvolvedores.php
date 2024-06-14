<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/form.css" rel="stylesheet">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <section>
        <div class="d-flex flex-row mb-3">
            <div class="p-2">
                <h4>Celso Augusto Machado Junior (barra)</h4>
                <a href="mailto:celso.machado@etec.sp.gov.br"> celso.machado@etec.sp.gov.br </a>
            </div>
            <img src="imgs/barra.jpg" alt="Celso" width="10%" class="pessoa" />
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p-2">
                <h4>Henrique Alcici Sanchez</h4>
                <a href="mailto:henrique.sanchez@etec.sp.gov.br"> henrique.sanchez@etec.sp.gov.br </a>
            </div>
            <img src="imgs/henrique.jpg" alt="Henrique" width="10%" class="pessoa /">
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="p-2">
                <h4>Guilherme Gonçalves Costa</h4>
                <a href="mailto:guilherme.costa298etec.sp.gov.br"> guilherme.costa298@etec.sp.gov.br </a>
            </div>
            <img src="imgs/guilherme.jpg" alt="Guilherme" width="10%" class="pessoa" />
        </div>
    </section>
    <?php
    include("footer.php");
    ?>
</body>

</html>