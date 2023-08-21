<?php
session_start();
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //if (isset($_FILES['img_ch'])) {
    $_SESSION["show_img"] = addslashes(file_get_contents($_FILES["img_ch"]["tmp_name"]));
    //}

    //$_SESSION["show_img"] = $_POST["img_ch"];
    $_SESSION["show_nombre"] = $_POST["nombre_ch"];
    $_SESSION["show_bio"] = $_POST["bio_ch"];
    $_SESSION["show_phone"] = $_POST["phone_ch"];
    $_SESSION["show_email"] = $_POST["email_ch"];

    $_SESSION["show_password"] = $_POST["password_ch"];


    $id = $_SESSION["datos"]["id"];

    $ch_img = $_SESSION["show_img"];
    $ch_nombre = $_SESSION["show_nombre"];
    $ch_bio = $_SESSION["show_bio"];
    $ch_phone = $_SESSION["show_phone"];
    $ch_email = $_SESSION["show_email"];
    $ch_pass = password_hash($_SESSION["show_password"], PASSWORD_DEFAULT);


    $queryUP = "UPDATE usuarios SET nombre='$ch_nombre', bio='$ch_bio', phone='$ch_phone', email='$ch_email', pass='$ch_pass', img='$ch_img' WHERE id = '$id';";

    $update = $mysqli->query($queryUP);

    require("connection.php");

    $queryC = "SELECT * FROM usuarios WHERE id = '$id' ;";

    $confirm = $mysqli->query($queryC);

    $numFilasC = $confirm->num_rows;



    if ($numFilasC === 1) {

        $datos2 = $confirm->fetch_assoc();
        $_SESSION["datos2"] = $datos2;

        $_SESSION["show_id"] = $_SESSION["datos2"]["id"];
        $_SESSION["show_nombre"] = $_SESSION["datos2"]["nombre"];
        $_SESSION["show_bio"] = $_SESSION["datos2"]["bio"];
        $_SESSION["show_phone"] = $_SESSION["datos2"]["phone"];
        $_SESSION["show_email"] = $_SESSION["datos2"]["email"];
        $_SESSION["show_pass"] = $_SESSION["datos2"]["pass"];
        $_SESSION["show_img"] = $_SESSION["datos2"]["img"];
        header("Location: personal.php");
    } else {
        echo "error al cargar";
    }
}