<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pagina do Calculo</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $v1 = isset($_POST["v1"])? $_POST["v1"]:10;
    $v2 = isset($_POST["v2"])? $_POST["v2"]:10;
    $opt = $_POST["opt"];
    switch($opt){
        case 1:
            $r = $v1 + $v2;
            echo $r;
            break;
        case 2:
            $r = $v1 - $v2;
            echo $r;
            break;
        case 3:
            $r = $v1 * $v2;
            echo $r;
            break;
        case 4:
            $r = $v1 / $v2;
            echo $r;
            break;
        default:
            echo "Erro no calculo";
    }
    
?>
</body>
</html>