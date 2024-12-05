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
        <h1>Resposta do Formulario</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo "olá . <strong>$nome $sobrenome </strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior!</a></p>
    </main>
</body>
</html>