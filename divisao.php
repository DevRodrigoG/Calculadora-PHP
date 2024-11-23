<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloGeral.css">
    <link rel="shortcut icon" href="./Imagens/favicon.ico" type="image/x-icon">
    <title>Calculadora</title>
</head>
<body>
<?php 
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
?>

    <div class="container">
        <div class="titulo">
            <h1>Resultado</h1>
            <p>O resultado do Calculadora é:</p>
        </div>

        <div class="divisao">
            <?php 

                if ($n1 != ""){
                    if ($n2 != ""){
                        $resultado = $n1 / $n2;
                        echo "<p class='resul'>{$resultado}</p>";
                    }
                    else{
                        echo "<p>Erro nos dados informados, preencha corretamente os campos</p>";
                    }
                }
                else{
                    echo "<p>Erro nos dados informados, preencha corretamente os campos</p>";
                }

            ?>
            <a href="./Index.html">Voltar para o inico</a>
        </div>

    </div>

</body>
</html>

