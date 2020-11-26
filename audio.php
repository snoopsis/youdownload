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
		
		<div class="divider divider-center">
		</div>
		
		<div class="fancy-title title-dotted-border title-center">
						<h1>Copie e Cole URL/LINK do Youtube para Baixar o <span>Audio</span></h1>
					</div>
		
<!-- Formulario para Inserir Link do Youtube -->	
<div class="container">

<div class="row center">
	<div class="col-sm-12">
		<form action="" method="post">
		<label>LINK DO YOUTUBE PARA BAIXAR EM AUDIO MP3:</label> 
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
$value = "youtube-dl -citw -v --write-thumbnail --extract-audio --audio-format mp3 $url";

/* Executa o comando acima na linha de comandos */

$output = shell_exec($value);

/* Lista o diretorio e filtra arquivos mp3 */

$listmp3 = glob('*.{mp3}', GLOB_BRACE);
$listjpg = glob('*.{jpg}', GLOB_BRACE);

/* Cria um loop para contar as musicas */

$arrlength = count($listmp3);

for($x = 0; $x < $arrlength; $x++) {

?>
                <!-- Mostra as Musicas Baixadas no Conteudo -->
				
			<div class="product clearfix">
				<div class="table-responsive">
					<table class="table table-bordered nobottommargin">
						 <thead>
						  <tr>
						    <th style="max-width:200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $listmp3[$x]; ?></th>
						  </tr>
						 </thead>
							<tbody>
					        <tr>
							<td><img src="<?php echo "usuarios/".$usuario."/".$listjpg[$x]; ?>" style="min-height: 200px"> </td>
							</tr>
							<tr>
							<td>
							<a href="<?php echo "usuarios/".$usuario."/".$listmp3[$x]; ?>" class="button button-3d button-mini button-rounded button-red" download> Baixa</a>
							<a href="include/delete.php?mp3=<?php echo "usuarios/".$usuario."/".$listmp3[$x]; ?>&jpg=<?php echo "usuarios/".$usuario."/".$listjpg[$x]; ?>" class="button button-3d button-mini button-rounded button-aqua"> Apaga</a>
							<div class="g-savetodrive"
                            data-src="<?php echo "usuarios/".$usuario."/".$listmp3[$x]; ?>"
                            data-filename="<?php echo $listmp3[$x]; ?>"
                            data-sitename="Baixe do Youtube">
                            </div>
							</td>
							</tr>
							<tr>
							<td>
							<audio controls style="max-width:243px">
                            <source src="<?php echo "usuarios/".$usuario."/".$listmp3[$x]; ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                            </audio>
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
