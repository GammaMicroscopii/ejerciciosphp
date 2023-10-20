<?php

if (!isset($_POST["idioma"])) {

    echo "No tengo idioma!";
} else {
    setcookie("idioma",$_POST["idioma"],time()+7200, "/");
}
$chanchullo_español = "ey que onda wey?";

if (isset($_COOKIE["idioma"])) {
switch ($_COOKIE["idioma"]) {
    case 'Español':
        echo $chanchullo_español;
        break;

        case 'English':
            echo "Good afternoon!";
            break;
            case 'Français':
                echo "Bonsoir!";
                break;
                case 'Русский':
                    echo "Добрый день!";
                break;
    
    default:
        echo $chanchullo_español;
        break;
}
} else {
    echo $chanchullo_español;
}