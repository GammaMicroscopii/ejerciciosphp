<?php

$animales = [
"mamifero" => "perro",
"oviparo" => "pato",
"reptil" => "serpiente"
];

$datosencoded = json_encode($animales);









if(!isset($_COOKIE["datos"])) {
setcookie("datos", $datosencoded, time() + 7200*24, "/");
}
else {
        $datadecoded = $_COOKIE["datos"];

$data = json_decode($datadecoded,true);
echo "<br>El valor de cookie es " . $data["mamifero"];

}