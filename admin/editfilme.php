<?php include "assets/header.php"; ?>
<?php include "../include/database.php"; ?>
<?php include "assets/navigation.php"; ?>	
	
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-4">
								<!--begin:: Widgets/Top Products-->
							
								<!--end:: Widgets/Top Products-->
							</div>
							<div class="col-xl-4">
								<!--begin:: Widgets/Activity-->
								
								<!--end:: Widgets/Activity-->
							</div>
							<div class="col-xl-4">
								<!--begin:: Widgets/Blog-->
							
								<!--end:: Widgets/Blog-->
							</div>
						</div>
	<!--End::Section-->
	
	<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Edit Filme
												</h3>
											</div>
										</div>
									</div>
									
<?php
if(isset($_GET['userid'])){
$userid = $_GET['userid'];
}
// Busca o filme especifico ao ID para fazer update

$query = "SELECT * FROM filmes WHERE id = '{$userid}'";
				    $select_all_filmes = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_filmes)){ 
					$titulo = $row['titulo'];
					$legenda = $row['leg'];
					$cat = $row['cat'];
					$url = $row['url'];
					$created = $row['created'];
					$cover = $row['cover'];         
					
				if(isset($_POST['update'])){
					$titulo = $_POST['titulo'];
					$legenda = $_FILES['leg']['name'];
					$legenda_temp = $_FILES['leg']['tmp_name'];
					$cover = $_FILES['cover']['name'];
					$cover_temp = $_FILES['cover']['tmp_name'];
					$cat = $_POST['cat'];
					$url = $_POST['url'];
                    
					move_uploaded_file($legenda_temp, "../legendas/$legenda");
					if(empty($legenda)){
						$query = "SELECT * FROM filmes WHERE id = $userid ";
						$select_legenda = mysqli_query($link, $query);
						
						while($row = mysqli_fetch_array($select_legenda)){
							$legenda = $row['leg'];
						}
					}
					
					move_uploaded_file($cover_temp, "../images/covers/filmes/$cover");
					if(empty($cover)){
						$query = "SELECT * FROM filmes WHERE id = $userid ";
						$select_cover = mysqli_query($link, $query);
						
						while($row = mysqli_fetch_array($select_cover)){
							$cover = $row['cover'];
						}
					} 
					
					$query = "UPDATE filmes SET ";
					$query .="titulo = '{$titulo}', ";
					$query .="leg = '{$legenda}', ";
					$query .="cat = '{$cat}', ";
					$query .="url = '{$url}', ";
					$query .="cover = '{$cover}', ";
					$query .="WHERE id = {$userid} ";
					
					$update_filme = mysqli_query($link, $query);
					
					
				}

?>
									<!--begin::Form-->
									<form action="" method="post" class="m-form" enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">
														Title:
													</label>
													<input type="text" name="titulo" class="form-control m-input" value="<?php echo $titulo; ?>">
													
												</div>
												<div class="form-group m-form__group">
													<label>
														Category:
													</label>
													<input type="text" name="cat" class="form-control m-input" value="<?php echo $cat; ?>">
													
												</div>	
												<div class="form-group m-form__group">
													<label>
														Cover:
													</label>
													<img width="100" src="<?php echo "../images/covers/filmes/".$cover ?>" alt="">
													<input type="file" name="cover" multiple/>
													
												</div>	
                                                   <div class="form-group m-form__group">
													<label>
														Subtitle:
													</label>
													<input type="tex" value="<?php echo $legenda; ?>">
													<input type="file" name="legenda" class="form-control m-input" multiple/>													
												</div>		                                                   
													<div class="form-group m-form__group">
													<label>
														URL Gdrive
													</label>
													<input type="text" name="url" class="form-control m-input" value="<?php echo $url; ?>">
													
												</div>														
												
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<button type="submit" class="btn btn-primary" name="update">
													Update
												</button>
											
											</div>
										</div>
									</form>
					<?php } ?>
									<!--end::Form-->
								</div>
								
								<!--end::Portlet-->
<?php include "assets/footer.php" ?>