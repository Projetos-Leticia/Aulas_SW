<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        p{
            color:red;
        }
    </style>
</head>
<body>

<?php 
$num1 = $_REQUEST{'num1'};
$num2 = $_REQUEST{'num2'};
$num3 = $_REQUEST{'num3'};
$soma = $num1 + $num2 + $num3;
echo "A soma de ".$num1." + ". $num2." + ". $num3." é igual a ".$soma ;
$divisao = $soma/3;
echo $divisao;

//echo " A soma é : ".$soma;

?>
    
</body>
</html>