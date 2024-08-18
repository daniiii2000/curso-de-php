<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2> indice dos exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>modulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercicio A</a></li>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        codeer & alunos <?= date('Y') ?>
    </footer>
</body>

</html>