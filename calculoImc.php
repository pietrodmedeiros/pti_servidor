<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DE IMC</title>
</head>
<body>

    <?php

    $nivelImc = [
        "18.50" => "Magreza",
        "24.9" => "Saudável",
        "29.9" => "Sobrepeso",
        "34.9" => "Obesidade Grau I",
        "39.9" => "Obesidade Grau II",
        "40.0" => "Obesidade Grau III"
    ];
    function seuImc($imc, $array) {

        foreach($array as $key => $value) {
            $message = "Atenção, seu IMC é " .$imc. " e você está classificado com " .$value;
            if ((float) $key < 40.0) {
                if($imc <= (float) $key) {
                echo $message;
                break;
                }
            }
            else {
                echo $message;
            }
        }
    }
    seuImc(22, $nivelImc);
    ?>

</body>
</html>