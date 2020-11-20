<?php

// Include database file
require_once 'database.php';


        $cover = date('m-d-Y_H-i-s').$_FILES['cover']['name'];
        $tmp_name1 = $_FILES['cover']['tmp_name'];
		$path = "../images/covers/series/";
		
		move_uploaded_file($tmp_name1, $path.$cover);
		
		$legenda = date('m-d-Y_H-i-s').$_FILES['legenda']['name'];
        $tmp_name2 = $_FILES['legenda']['tmp_name'];
		$pathleg = "../legendas/";
		
		move_uploaded_file($tmp_name2, $pathleg.$legenda);
		

        $titulo = $_POST['titulo'];
		$name = $_POST['name'];
		$url = $_POST['url'];
		$created = date("d-m-Y h:i:sa");
		
		$query = "INSERT INTO series(titulo, name, url, created, cover) ";

		$query .= "VALUES('{$titulo}', '{$name}', '{$url}', 
		'{$created}', '{$cover}') ";
					
	    $create_anuncio_query = mysqli_query($link, $query);

header("Refresh: 1; url=../series.php");
 
echo "O Episodio: ".$titulo." da Serie: ".$name." Foi Adicionado com Sucesso!"; 


?>