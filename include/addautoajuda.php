<?php

// Include database file
require_once 'database.php';


        $cover = date('m-d-Y_H-i-s').$_FILES['cover']['name'];
        $tmp_name1 = $_FILES['cover']['tmp_name'];
		$path = "../images/covers/autoajuda/";
		
		move_uploaded_file($tmp_name1, $path.$cover);
		

        $titulo = $_POST['titulo'];
		$cat = $_POST['cat'];
		$url = $_POST['url'];
		$created = date("d-m-Y h:i:sa");
		
		$query = "INSERT INTO autoajuda(titulo, cat, url, created, cover) ";

		$query .= "VALUES('{$titulo}', '{$cat}', '{$url}', 
		'{$created}', '{$cover}') ";
					
	    $create_anuncio_query = mysqli_query($link, $query);

header("Refresh: 1; url=../autoajuda.php");
 
echo "O Video: ".$titulo." foi adicionado com sucesso!"; 


?>
