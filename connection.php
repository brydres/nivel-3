<?php
try {
    $mysql = new mysqli("localhost", "root", "", "usuarios");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}
?>