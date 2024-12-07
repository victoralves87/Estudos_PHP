<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $preco = $_GET['preco'] ?? "";
            $reaj = $_GET['reaj'] ?? "0";
        ?>

        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="1" step="0.01" 
            value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste?
                (<strong><span id="p"><?=$reaj?></span>%</strong>)
            </label>
            <input type="range" name="reaj" id="reaj" min="0" max="200"
             value="<?=$reaj?>" step="0.1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        $aumento = ($preco * $reaj) / 100;
        $novo = $preco + $aumento;
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=$preco?>, com <strong><?=$reaj?>%</strong> de aumento vai passar a custar <strong>R$ <?=$novo?></strong> a partir de agora.</p>
    </section>

    <script>
        function mudaValor() {
            // Captura o span que exibe o percentual
            const p = document.getElementById('p');
            // Captura o valor atual do input range
            const reaj = document.getElementById('reaj');
            // Atualiza o texto do span com o valor do input range
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>
