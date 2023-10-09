<?php

echo "<h2>Información del fichero subido</h2>";
echo "<p>Nombre fichero</p>" . $_FILES["myfile"]["name"];
echo "<p>Tipo/extensión fichero</p>" . $_FILES["myfile"]["type"];
echo "<p>Tamaño del fichero</p>" . $_FILES["myfile"]["size"];
echo "<p>Nombre fichero TEMPORAL</p>" . $_FILES["myfile"]["tmp_name"];

$res = move_uploaded_file($_FILES["myfile"]["tmp_name"], "uploads/" .$_FILES['myfile']['name']);
if($res) {
	echo "<h4>Fichero subido correctamente</h4>";
} else {
	echo "Error al subir al servidor";
}