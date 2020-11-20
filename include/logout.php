<?php
// Initialize the session
session_start();
$usuario = $_SESSION["username"];
chdir("/var/www/html/wink/usuarios/");
$apaga = shell_exec("rm -rf $usuario/");
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../index.php");
exit;
?>
