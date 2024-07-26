<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_POST["nome"];
            $s = $_POST["sobrenome"];
            echo "É um prazer te conhecer, <strong>$n $s</strong>! Este é o meu site.";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>