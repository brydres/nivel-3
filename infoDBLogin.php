<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email_login"] = $_POST["email_lg"];
    $_SESSION["pass_login"] = $_POST["pass_lg"];

    $email = $_SESSION["email_login"];
    $pass = $_SESSION["pass_login"];

    var_dump($email);
    var_dump($pass);

    require("connection.php");
    $query = "SELECT * FROM usuarios WHERE email = '$email';";

    $resultado = $mysqli->query($query);
    var_dump($resultado);

    $numFilas = $resultado->num_rows;

    if ($numFilas === 1) {
        $datos = $resultado->fetch_assoc();

        if (password_verify($pass, $datos["pass"])) {

            $_SESSION["datos"] = $datos;

            $_SESSION["show_nombre"] = $_SESSION["datos"]["nombre"];
            $_SESSION["show_bio"] = $_SESSION["datos"]["bio"];
            $_SESSION["show_phone"] = $_SESSION["datos"]["phone"];
            $_SESSION["show_email"] = $_SESSION["datos"]["email"];
            $_SESSION["show_pass"] = $_SESSION["datos"]["pass"];
            $_SESSION["show_img"] = $_SESSION["datos"]["img"];

            header("Location: personal.php");
        }
    } else {

        $_SESSION["error_lg"] = "La cuenta no existe o los datos son errados.";
        header("Location: login.php");
        die();
    }
}