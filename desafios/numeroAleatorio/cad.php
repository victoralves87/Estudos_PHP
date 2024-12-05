<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Formulario</h1>
    </header>
    <main>
        <p><strong>Gerando um numero aleatório entre 0 e 100</strong></p>
        <?php 
            $min = 0;
            $max = 100;
            $gerar = mt_rand($min, $max);
            echo"gerando um numero entre $min e $max --> <strong> $gerar</strong>"
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>