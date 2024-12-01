<?php

include ("../../config.php");

$email = $_POST["email"];
$password_user = $_POST["password_user"];

$contador = 0;
$sql = "SELECT * from tbl_users WHERE email = '$email' AND password_user = '$password_user';";
$query = $pdo -> prepare($sql);
$query -> execute();

$usuarios = $query->fetchAll(   pdo::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tbl = $usuario["email"];
    $nombres = $usuario["nombre"];
}

if($contador == 0){
    session_start();
    $_SESSION["mensaje"] = "Error datos incorrectos";
    header("location:".$URL."/login/index.php");

}else{
    echo "datos correctos";
    session_start();
    $_SESSION["session_email"] = $email;
    header("Location:".$URL."/index.php");

}