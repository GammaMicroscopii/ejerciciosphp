<?php

echo "<h2>Resultado encuestas </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
	if (isset($_POST["lprog"]) && !empty($_POST["lprog"])) {
		$lenguaje = $_POST["lprog"];
		echo "<h4> Tu lenguaje preferido es: $lenguaje</h4>";
	}

	echo "<br> Num eleme : " . count($_POST["ntrans"]);//da error si no se selecciona ninguno
	if (isset($_POST["ntrans"]) && !empty($_POST["ntrans"])) {
		$transporte = $_POST["ntrans"];
		foreach ($transporte as $transporte) {
			echo "<br>Transporte seleccionado: $transporte";
		}
	}

	//lista multiple de menu
	if (isset($_POST["smenu"]) && !empty($_POST["smenu"])) {
		$menus = $_POST["smenu"];
		foreach ($menus as $plato) {
			echo "<br>Plato seleccionado: $plato";
		}
	}
}