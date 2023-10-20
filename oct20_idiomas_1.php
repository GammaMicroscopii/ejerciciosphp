
<?php
if (isset($_POST["idioma"])) {
    $idioma = $_POST["idioma"];
} else {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>

    <form action="oct20_idiomas_2.php" method="post">

        <select name="idioma">
            <option value="Español">Español</option>
            <option value="English">English</option>
            <option value="Français">Français</option>
            <option value="Русский">Русский</option>
        </select>
        <input type="submit" value="Enviar" name="envio">
    </form>
</body>
</html>