<?php

// Include database file
require_once 'database.php';


        $cover = date('m-d-Y_H-i-s').$_FILES['cover']['name'];
        $tmp_name1 = $_FILES['cover']['tmp_name'];
		$path = "../images/covers/filmes/";
		
		move_uploaded_file($tmp_name1, $path.$cover);
		
		$legenda = date('m-d-Y_H-i-s').$_FILES['legenda']['name'];
        $tmp_name2 = $_FILES['legenda']['tmp_name'];
		$pathleg = "../legendas/";
		
		move_uploaded_file($tmp_name2, $pathleg.$legenda);
		

        $titulo = $_POST['titulo'];
		$cat = $_POST['cat'];
		$url = $_POST['url'];
		$created = date("d-m-Y h:i:sa");
		
		$query = "INSERT INTO filmes(titulo, leg, cat, url, created, cover) ";

		$query .= "VALUES('{$titulo}', '{$legenda}', '{$cat}', '{$url}', 
		'{$created}', '{$cover}') ";
					
	    $create_anuncio_query = mysqli_query($link, $query);

header("Refresh: 1; url=../filmes.php");
 
echo "O Filme: ".$titulo." foi adicionado com sucesso!"; 


?>
