<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "operadores Aritméticos da Linguagem PHP<br><br>";

            $iNumero_1 = 3;
            $iNumero_2 = 2;
            $resultado = 0;

            $resultado = $iNumero_1 + $iNumero_2;
            echo " A soma entre $iNumero_1 e $iNumero_2 é igual a $resultado<br>";

            $resultado = $iNumero_1 - $iNumero_2;
            echo " A subtração entre $iNumero_1 e $iNumero_2 é igual a $resultado<br>";

            $resultado = $iNumero_1 * $iNumero_2;
            echo " A multiplicação entre $iNumero_1 e $iNumero_2 é igual a $resultado<br>";
            
            $resultado = $iNumero_1 / $iNumero_2;
            echo " A divisão entre $iNumero_1 e $iNumero_2 é igual a $resultado<br>";

            $resultado = $iNumero_1 % $iNumero_2;
            echo "O módolo entre $iNumero_1 e $iNumero_2 é igual a $resultado<br>";
        ?>
        </div>
    </body>
</html>