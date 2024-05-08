<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula09</title>
</head>
<body>
<?php
if(isset($_COOKIE['contador_visitas'])) {
    $contador = $_COOKIE['contador_visitas'] + 1;
} else {
    $contador = 1;
}

setcookie("contador_visitas", $contador, time() + 10);

echo "Você acessou esta página " . $contador . " vezes.";
?>

</body>
</html>