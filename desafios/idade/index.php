<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date('Y');
        $nasc = $_GET['nasc'] ?? '';
        $ano = $_GET['ano'] ?? '';
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">

            <label for="ano">Quer saber sua idade em que ano?
                (atualmente estamos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>" >

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
            if ($nasc && $ano) { 
                if ($ano < $nasc) {
                    echo "<h2>Resultado</h2>";
                    echo "<p>Em $ano você ainda não havia nascido!</p>";
                } else {
                    $futuro = $ano - $nasc;
                    echo "<h2>Resultado</h2>";
                    echo "<p>Quem nasceu em $nasc vai ter <strong>$futuro anos</strong> em $ano!</p>";
                }
            }
        ?>
    </section>
</body>
</html>
