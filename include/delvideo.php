<?php
$video = $_GET['mp4'];
$final = "rm /var/www/html/wink/".$video;

$resultado = shell_exec($final);
 
header("Refresh: 1; url=../video.php");
 
echo "O video: ".$video." foi apagada com sucesso!"; 


?>
