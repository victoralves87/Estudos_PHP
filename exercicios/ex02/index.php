<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>exemplos com PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia: " . date(" d/M/Y");
        echo " e a hora é: " .date("G:i:s");

    ?>
    
</body>
</html>