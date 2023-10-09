<?php
$err = null;
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    if(isset($_POST["iusuario"]) && !empty($_POST["iusuario"])) {
        $usuario = $_POST["iusuario"];
    } 

    if(isset($_POST["ipassword"]) && !empty($_POST["ipassword"])) {
        $password = $_POST["ipassword"];
    }
    if (!empty($usuario) && !empty($password)) {
        $logeado = true;
        if ($usuario === "admin" && $password === "456") {            
           header('Location: autoriza2.php?logeado='.$logeado);
        }
        else{
            $logeado = false;
            header('Location: autoriza2.php?logeado='.$logeado);
        }
     
    }
    $err = true;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Pagina de login</h2>
    <?php
    
    if ($err) {
        $msg = "<p style=\"color : red\">Error al introducir las credenciales</p>";
        echo $msg;
    }

    ?>
    <form name="flogin" action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <div>
            <label for="usuario">Introduce el usuario</label>
            <input type="text" name="iusuario" id="usuario">
            <br>
            <br>
            <br>
            <label for="password">Introduce la contraseña</label>
            <input type="text" name="ipassword" id="password">
            <br>
            <br>
        </div>
        <input type="submit" name="ienviar" value="Enviar">
    </form>

</body>

</html>