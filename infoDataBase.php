<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email_user"] = $_POST["email"];
    $_SESSION["pass_user"] = $_POST["pass"];

    $email_usuario = $_SESSION["email_user"];
    $password_usuario = password_hash($_SESSION["pass_user"], PASSWORD_DEFAULT);

    require("connection.php");

    $queryshow = "SELECT * FROM usuarios WHERE email = '$email_usuario' ;";

    $resultado = $mysqli->query($queryshow);

    $numFilas = $resultado->num_rows;

    if ($numFilas >= 1) {
        $_SESSION["error_register"] = "Actualmente existe una cuenta con este correo.";
        header("Location: index.php");
        die();
    } else {

        $query = "INSERT INTO usuarios( email,pass) VALUES ('$email_usuario','$password_usuario');";

        $insertar = $mysqli->query($query);

        $query2 = "SELECT * FROM usuarios WHERE email = '$email_usuario' AND pass ='$password_usuario';";


        $resultado2 = $mysqli->query($query2);

        $datos = $resultado2->fetch_assoc();
        $_SESSION["datos"] = $datos;

        $_SESSION["show_id"] = $_SESSION["datos"]["id"];
        $_SESSION["show_nombre"] = $_SESSION["datos"]["nombre"];
        $_SESSION["show_bio"] = $_SESSION["datos"]["bio"];
        $_SESSION["show_phone"] = $_SESSION["datos"]["phone"];
        $_SESSION["show_email"] = $_SESSION["datos"]["email"];
        $_SESSION["show_pass"] = $_SESSION["datos"]["pass"];
        $_SESSION["show_img"] = $_SESSION["datos"]["img"];

        header("Location: personal.php");
    }
}