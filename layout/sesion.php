<?php
session_start();
if (isset($_SESSION["session_email"])) {
    // echo "si existe sesion de " . $_SESSION["session_email"];

    $email_session = $_SESSION["session_email"];
    $sql = "SELECT * FROM tbl_users WHERE email = '$email_session'";

    $query = $pdo->prepare($sql);
    $query->execute();

    $usuarios = $query->fetchAll(pdo::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $nombre_session = $usuario["nombre"];
    }
} else {
    echo "no existe la session";
    header("Location:" . $URL . "/login/index.php");
}