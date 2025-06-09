<?php
session_start();

if (isset($_GET["send"])) {
    $username = $_GET["username"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if (
        !empty($username) &&
        !empty($email) &&
        !empty($age)
    ) {
        $_SESSION["username"] = $username;
        echo "El nombre del usuario es " . $username . ","  . " su email " . $email . " y su edad es " . $age . "<br>";

        echo "Usuario guardado " . $_SESSION["username"];
    } else {
        echo "Por favor rellene todos los campos";
    }
} else {
    echo "ERROR! Rellene el formulario";
}
