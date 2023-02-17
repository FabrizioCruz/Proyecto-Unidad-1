<?php
if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuarioIn = $_POST['usuario'];
    $contraseña = $_POST['password'];
    if ($usuarioIn == "cliente" && $contraseña == "123") {
        session_start();
        $_SESSION["cliente"] = $usuarioIn;
        header("Location: cliente.php");
    } elseif ($usuarioIn == "administrador" && $contraseña == "asd") {
        session_start();
        $_SESSION["administrador"] = $usuarioIn;
        header("Location: admin.php");
    } else {
        header("Location: error.php");
    }
} else {
    header("Location: error.php");
}
