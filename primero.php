<?php

$var = 0;

echo "<html>
<head>
    <meta name=\"author\" value=\"Néstor\"/>
    <meta name=\"description\" value = \"Mi primera página PHP\">
    <title>Mi primer php</title>
</head>
    <body>
        var vale: ",$var, "<br>";
        
        for ($i = 0; $i < 10; $i++) {
            echo "<h",$i,">i vale: ",$i, "</h",$i,"><br>";
        }
        
        echo "
    </body>
</html>";