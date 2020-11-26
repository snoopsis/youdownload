<?php 

// Include header
include "include/header.php";

$usuario = session_id();

chdir("/var/www/html/wink/usuarios/");
shell_exec("mkdir $usuario");


?>

			<!-- Content
		============================================= -->	
		<section id="content">
		

		
		<div class="fancy-title title-dotted-border title-center mt-3">
		<h1>Copie e Cole URL/LINK do Youtube para Baixar o <span>Video</span></h1>
					</div>
		
<!-- Formulario para Inserir Link do Youtube -->	
	<div class="container">

		<div class="row center">
			<div class="col-sm-12">
				<form action="" method="post">
				<label>LINK DO YOUTUBE PARA BAIXAR EM VIDEO MP4:</label> 
			</div>
			<div class="col-sm-12">
				<input type="text" name="url" class="form-control">
			</div>
			<div class="col-sm-12 mt-3">
				<button type="submit" class="button button-3d">Download</button>
			</div>
		</div>
	    	</form>
				
		</div>
	</div>

<!-- END #### Formulario para Inserir Link do Youtube -->
		
	<div class="content-wrap" style="min-height:400px">	

				<div class="container clearfix">

					<!-- Shop
					============================================= -->
					<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
		
<?php					
/* Muda para o Diretorio de Usuario de Interesse */

chdir("/var/www/html/wink/usuarios/$usuario/");


/* Pega o link da musica do formulario e o comando para executar */

$url = $_POST["url"];
$baixa = shell_exec("youtube-dl -citw -v -f mp4 $url");

/* Lista o diretorio e filtra arquivos mp3 */

$list = glob('*.{mp4}', GLOB_BRACE);

/* Cria um loop para contar as musicas */

$arrlength = count($list);

for($x = 0; $x < $arrlength; $x++) {

?>
                <!-- Mostra as Musicas Baixadas no Conteudo -->
			<div class="product clearfix">
				<div class="table-responsive">
					<table class="table table-bordered nobottommargin">
						 <thead>
						  <tr>
						    <th style="max-width:200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $list[$x]; ?></th>
						  </tr>
						 </thead>
							<tbody>
					        <tr>
							<td>
							<video width="240" height="200" controls>
                            <source src="<?php echo "usuarios/".$usuario."/".$list[$x]; ?>" type="video/mp4">
                            Your browser does not support the audio element.
                            </video>
							</td>
							</tr>
							<tr>
							<td>
							<a href="<?php echo "usuarios/".$usuario."/".$list[$x]; ?>" class="button button-3d button-mini button-rounded button-red" download> Baixa</a>
							<a href="include/delvideo.php?mp4=<?php echo "usuarios/".$usuario."/".$list[$x]; ?>" class="button button-3d button-mini button-rounded button-aqua"> Apaga</a>
							<div class="g-savetodrive"
                            data-src="<?php echo "usuarios/".$usuario."/".$list[$x]; ?>"
                            data-filename="<?php echo $list[$x]; ?>"
                            data-sitename="Baixe do Youtube">
                            </div>
							</td>
							</tr>
						</tbody>
					</table>
									
			     </div>		
			 </div>
						
						<!-- END ###### Mostra as Musicas Baixadas no Conteudo -->
						
		
<?php } header("location: index.php"); ?>

					</div><!-- #shop end -->

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->


<!-- Footer -->
<?php include "include/footer.php"; ?>
