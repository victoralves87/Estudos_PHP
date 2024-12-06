<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_412.00;
        $salario = $_GET['sal'];
        
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário: (R$);</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.001">
            <p>Considerando o salário mínimo de <strong> R$ <?=number_format($minimo,2, ",", ".")?></strong> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php 
            $tot = (int)($salario/$minimo);
            $dif = fmod($salario , $minimo);

            echo "você ganha $tot salários minimos e R\$ ".number_format($dif, 2, ",", ".");
        ?>
      
    </section>
    
</body>
</html>