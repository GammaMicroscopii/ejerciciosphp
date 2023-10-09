<?php

echo "<h1><b> - &block; 8a &block; -</b></h1>";

$jug = ["no", "se", "nada", "de", "basket"];

foreach($jug as $elem) {
    echo $elem , "</br>";
}

echo "<h1><b> - &block; 8b &block; -</b></h1>";

$jug = ["no", "se", "nada", "de", "basket"];

foreach($jug as $i => $elem) {
    echo "$i =&gt; $elem </br>";
}

echo "<h1><b> - &block; 9 &block; -</b></h1>";

$jug = [];

$jug[] = "no";
$jug[] = "se";
$jug[] = "nada";
$jug[] = "de";
$jug[] = "basket";

foreach($jug as $i => $elem) {
    echo "$i =&gt; $elem </br>";
}

echo "<h1><b> - &block; 10 &block; -</b></h1>";

$jug = [
    "base" => "no",
    "escolta" => "se",
    "alero" => "nada",
    "alapivot" => "de",
    "pivot" => "basket"
];

foreach($jug as $i => $elem) {
    echo "$i =&gt; $elem </br>";
}

echo "<h1><b> - &block; 11 &block; -</b></h1>";

$paises = [
    "India" => ["moneda" => "rupias","poblacion" =>  1380000000],
    "Rusia" => ["moneda" => "rublos","poblacion" =>  145000000],
    "Australia" => ["moneda" => "dólares australianos","poblacion" =>  20000000],
    "Argentina" => ["moneda" => "pesos","poblacion" =>  50000000]
];

foreach ($paises as $k => $v){
    echo "En $k viven ", $v["poblacion"], " personas y pagan con ", $v["moneda"], ".</br>";
}