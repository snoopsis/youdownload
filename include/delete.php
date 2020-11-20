<?php
$musica = $_GET['mp3'];
$final = "rm /var/www/html/wink/".$musica;

$resultado1 = shell_exec($final);

$imagem = $_GET['jpg'];
$final = "rm /var/www/html/wink/".$imagem;

$resultado2 = shell_exec($final);
 
header("Refresh: 1; url=../audio.php");
 
echo "A musica: ".$musica." foi apagada com sucesso!"; 


?>
