<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="exercicio.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400">
    <title>Curso PHP</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2> indice dos exercicios</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatacao</a>
        <a href="index.php" class="vermelho"> Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            include(__DIR__ . "{$_GET['dir']}/{$_GET['file']}.php");
            
            ?>
        </div>
    </main>
    <footer class="rodape">
        codeer & alunos <?= date('Y') ?>
    </footer>
</body>

</html>