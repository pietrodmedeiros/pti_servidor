<html>
<head>
    <title>CALCULO DE IMC <title>
</head>

    <?php

    $imc = 0;
    function seuImc($imc) {

        $nivelImc = [
            18.50 => "Magreza",
            24.9 => "Saudável",
            29.9 => "Sobrepeso",
            34.9 => "Obesidade Grau I",
            39.9 => "Obesidade Grau II",
            40.0 => "Obesidade Grau III"
        ]
        
        $message = "Atenção, seu IMC é $imc, e você está classificado com $value"

        foreach($nivelImc as $key => $value) {
            if($imc <= (float) $key) {
                echo = $message
                break
            }
        }   else {
            $message
        }
    }

    seuImc(22.55)
    ?>

    <body>
        <h1> Atenção, seu IMC é <?php echo $imc ?>, e você está classificado com <?php $value ?> </h1>
    </body>



</html>