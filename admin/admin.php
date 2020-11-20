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
	

<!--Begin::Section-->
                              <div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Filmes
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>
														New record
													</span>
												</span>
											</a>
										</li>
										<li class="m-portlet__nav-item"></li>
									
									</ul>
								</div>
							</div>
							
							<div class="m-portlet__body">
<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												Title
											</th>
											<th>
												Category
											</th>
											<th>
												Subtitle
											</th>
											<th>
												URL Gdrive
											</th>
											<th>
												Created
											</th>
		
  		                                     <th>
												Actions
											</th>
										</tr>
									</thead>
										<tbody>
										<tr>
										
<?php 

$query = "SELECT * FROM filmes ORDER BY id DESC";
				    $select_all_filmes = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_filmes)){
					$id = $row['id'];
					$titulo = $row['titulo'];
					$legenda = $row['leg'];
					$cat = $row['cat'];
					$url = $row['url'];
					$created = $row['created'];
					$cover = $row['cover'];

 ?>
										
											<td>
												<?php echo $id; ?>
											</td>
											<td>
												<?php echo $titulo; ?>
											</td>
											<td>
												<?php echo $cat; ?>
											</td>
											<td>
												<?php echo $legenda; ?>
											</td>
											<td>
												<?php echo $url; ?>
											</td>
											<td>
												<?php echo $created; ?>
											</td>
													
                                            <td>				
                                            <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 5px, 0px);" x-out-of-boundaries="">
                                <a class="dropdown-item" href="editfilme.php?userid=<?php echo $id; ?>"><i class="la la-edit"></i> Editar</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Apagar</a>                      
                            </div>
                        </span>                            													
                                            </td>												
												
										</tr>
										
					<?php } ?>
					
										</tbody>


</table>
</div>
</div>
		
						<!--End::Section-->
						
						                             <div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Series
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>
														New record
													</span>
												</span>
											</a>
										</li>
										<li class="m-portlet__nav-item"></li>
									
									</ul>
								</div>
							</div>
							
							<div class="m-portlet__body">
<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												Name
											</th>
											<th>
												SXXEXX
											</th>
											<th>
												Subtitle
											</th>
											<th>
												URL Gdrive
											</th>
											<th>
												Created
											</th>
		
  		                                     <th>
												Actions
											</th>
										</tr>
									</thead>
										<tbody>
										<tr>
										
<?php 

$query = "SELECT * FROM series ORDER BY id DESC";
				    $select_all_filmes = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_filmes)){
					$id = $row['id'];
					$name = $row['name'];
					$legenda = $row['leg'];
					$titulo = $row['titulo'];
					$url = $row['url'];
					$created = $row['created'];
					$cover = $row['cover'];

 ?>
										
											<td>
												<?php echo $id; ?>
											</td>
											<td>
												<?php echo $name; ?>
											</td>
											<td>
												<?php echo $titulo; ?>
											</td>
											<td>
												<?php echo $legenda; ?>
											</td>
											<td>
												<?php echo $url; ?>
											</td>
											<td>
												<?php echo $created; ?>
											</td>
																	
											<td nowrap></td>
										</tr>
										
					<?php } ?>
					
										</tbody>


</table>
</div>
</div>
						
					
<!--Begin::Section-->

                            <div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Auto Ajuda
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>
														New record
													</span>
												</span>
											</a>
										</li>
										<li class="m-portlet__nav-item"></li>
									
									</ul>
								</div>
							</div>
							
							<div class="m-portlet__body">
<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												Title
											</th>
											<th>
												Category
											</th>
											
											<th>
												URL Gdrive
											</th>
											<th>
												Created
											</th>
		
  		                                     <th>
												Actions
											</th>
										</tr>
									</thead>
										<tbody>
										<tr>
										
<?php 

$query = "SELECT * FROM autoajuda ORDER BY id DESC";
				    $select_all_filmes = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_filmes)){
					$id = $row['id'];
					$titulo = $row['titulo'];
					$legenda = $row['leg'];
					$cat = $row['cat'];
					$url = $row['url'];
					$created = $row['created'];
					$cover = $row['cover'];

 ?>
										
											<td>
												<?php echo $id; ?>
											</td>
											<td>
												<?php echo $titulo; ?>
											</td>
											<td>
												<?php echo $cat; ?>
											</td>
											
											<td>
												<?php echo $url; ?>
											</td>
											<td>
												<?php echo $created; ?>
											</td>
																	
											<td nowrap></td>
										</tr>
										
					<?php } ?>
					
										</tbody>


</table>
</div>
</div>
						
						<!--End::Section-->
<!--Begin::Section-->
						
						<!--End::Section-->
<!--Begin::Section-->
						
						<!--End::Section-->
<!--Begin::Section-->
						
						<!--End::Section-->
 <!--Begin::Section-->
						
						<!--End::Section-->   
<!--Begin::Section-->
						
						<!--End::Section-->
					</div>
				</div>
			</div>
			<!-- end:: Body -->
<?php include "assets/footer.php" ?>
