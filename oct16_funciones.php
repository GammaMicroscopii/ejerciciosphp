<?php

function resolver($a, $b, $c) {

$discr = $b*$b-4*$a*$c;
if ($discr < 0) {
    return false;
}
$neg = (-$b - sqrt($discr) )/ 2 / $a;
$pos = (-$b + sqrt($discr) )/ 2 / $a;
return [$neg, $pos];
}

$cad = "";

if (isset($_POST['secu']) && !empty($_POST['secu']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    
    $res = resolver($_POST['a'], $_POST['b'], $_POST['c']);
    
    if ($res == false) {
        $cad = "Soluciones imaginarias";
    } else {
        $cad = "Soluciones :" . $res[0] . " y " .  $res[1];
    }
} else {
    $cad = "Es la primera vez que la página se carga.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16 de octubre</title>
</head>
<body>
    <form action ="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <input type="number" name="a" id="a">
    <input type="number" name="b" id="b">
    <input type="number" name="c" id="c">
    <input type="submit" name="secu" value="Enviar">

    <p><?= $cad ?></p>
</form>
</body>
</html>

