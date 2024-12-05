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
        <?php 
            $numero = $_GET["numero"];
            $anteceder = $numero - 1;
            $suceder = $numero + 1; 
            echo "numero: $numero";
            echo "<br>o antecessor é: $anteceder";
            echo "<br>e seu sucessor é: $suceder";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>