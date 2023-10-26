<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Calcular</title>
</head>
<body>
<div id="cal">
    <?php
    if($_REQUEST['radio1'] == 'suma'){
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La Suma es:" . $suma;
    }
    elseif($_REQUEST['radio1'] == "resta"){
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La Resta es:" . $resta;
    }
    elseif($_REQUEST['radio1'] == 'multi'){
        $multi = $_REQUEST['valor1'] * $_REQUEST['valor2'];
        echo "La Multiplicacion es:" . $multi;
    }
    elseif($_REQUEST['radio1'] == 'dividir'){
        $divicion = $_REQUEST['valor1'] / $_REQUEST['valor2'];
        echo "La Divicion es:" . $divicion;
    }
    ?>
    <br><br>
    
    <a herf="index.html">Inicio</a>
    </div>

</body>
</html>