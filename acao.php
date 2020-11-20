<?php 

// Include config file
require_once 'include/database.php';
session_start();

// Include header
include "include/header.php";

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
	$data = $_SESSION['data'];
?>

			<!-- Content
		============================================= -->	
		<section id="content">
		
		<div class="divider divider-center">
		</div>
		
		<div class="fancy-title title-dotted-border title-center">
						<h1>Filmes de <span>Acao</span></h1>
					</div>
		
<!-- Se for administrador mostra formulario para inserir Filmes -->
		
<?php 

$logado = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '{$logado}' AND type = 'admin'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>

<div class="divider divider-center">
		</div>
		
		
<!-- Formulario para Inserir os Filmes -->	


<center>
<form action="include/addfilme.php" method="post" enctype="multipart/form-data">
<div class="col_full">
<label>Titulo:</label>
<input type="text" name="titulo">
<label for="cover">Cover:*</label>
<input type="file" name="cover"  required multiple/>
<label for="legenda">Legenda:</label>
<input type="file" name="legenda"  multiple/>
<label>Categoria:</label> 
<select name="cat">
<option value="acao">Acao</option>
<option value="ficcao">Ficcao</option>
<option value="comedia">Comedia</option>
<option value="drama">Drama</option>
</select>
<label>Url:</label> 
<input type="text" name="url"> 

<input type="submit" class="button button-3d" name="addfilme" value="Inserir Filme">
</div>
</form>
</center>

<!-- END #### Formulario para Inserir os Filmes -->
 
<?php

    }
}

?>

<!-- END ### Se for administrador mostra formulario para inserir Filmes -->

		
	<div class="content-wrap" style="min-height:400px">	

				<div class="container clearfix">

					<!-- Shop
					============================================= -->
					<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
				
<?php

// Busca todos os Filmes que estao no Banco de Dados

$query = "SELECT * FROM filmes WHERE cat = 'acao' ORDER BY id DESC";
				    $select_all_filmes = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_filmes)){
					$titulo = $row['titulo'];
					$legenda = $row['leg'];
					$cat = $row['cat'];
					$url = $row['url'];
					$created = $row['created'];
					$cover = $row['cover'];

?>
			
<!-- Mostra Filmes que estao no banco de dados -->
			
			<div class="product clearfix">
				<div class="table-responsive">
					<table class="table table-bordered nobottommargin">
						 <thead>
						  <tr>
						  <th class="text-center" style="max-width:200px; max-height:300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $titulo; ?></th>
						  </tr>
						 </thead>
							<tbody>
					        <tr>
							<td align="center">
							<img width="200" height="300" src="<?php echo "images/covers/filmes/".$cover; ?>">
							</td>
							</tr>
							<tr>
							<td align="center">
							<a href="<?php echo "https://drive.google.com/uc?export=download&id=".$url; ?>" class="button button-3d button-mini button-rounded button-red" target="_blank"> Baixar</a>
							<a href="<?php echo "https://drive.google.com/file/d/".$url."/preview"; ?>" class="button button-3d button-mini button-rounded button-green" target="_blank"> Assitir</a>
							<a href="<?php echo "../legendas/".$legenda; ?>" class="button button-3d button-mini button-rounded button-blue" target="_blank" download> Leg</a>
							</td>
							</tr>
						</tbody>
					</table>
									
			     </div>		
			 </div>
						
						<!-- END ###### Termina de mostrar os Filmes -->
			<?php } ?>					
		
<?php } header("location: index.php"); ?>

					</div><!-- #shop end -->

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>

<!-- Footer -->
<?php include "include/footer.php"; ?>

</html>
