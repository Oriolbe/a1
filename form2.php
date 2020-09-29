<?php
session_start();
//fecha de formulario
if ((isset($_POST['dateSelected']) && !empty($_POST['dateSelected']))
    && (isset($_POST['edad']) && !empty($_POST['edad']))
) {
    $edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
    $dateSelected = filter_input(INPUT_POST, '$dateSelected', FILTER_SANITIZE_STRING);

    echo $dateSelected;
    echo $edad;
}
$username = $_SESSION['username'];
echo $username;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>

<body>
    <form action="" method="post">
        <p>Fecha: <input type="date" name="dateSelected"></p>
        <p>Edad: <input type="number" name="edad"></p>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <a href="logout.php">Cerrar Sesión</a>
</body>

</html>