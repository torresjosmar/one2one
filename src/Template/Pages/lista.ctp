
<!--Start Page Content -->
			<div class="page-content" style="    margin-top: 18px;">
				<!--Start Page Header -->
				<div class="page-header-v1 bg-4 overlay-bg  text-center">
					<div class="page-header-inner">
						<p class="page-category">Tus clases particulares, ahora online</p>
						<h2 class="page-title">Listado de tus profesores en linea</h2>
						<div class="breadcrumbs">
							
						</div>
					</div>
				</div>
				<!--End Page Header -->
				<!-- Start Small image blog Post area -->
				<div class="shop-area shop-page bg-white-2">
					<div class="container">
						<div class="row">
							<!--Start Left Side -->
							<div class="col-md-8 left-side-wrap-v1 list-profesores">
								<!--Start shop wrap area -->
								<div class="shop-content-area">
									
									<!-- End Product toolbar -->
									<!--Start Product List  -->
									<div class="row">
										<div class="tab-content">
											
											<div role="tabpanel" class="tab-pane fade in active" id="list">
												<?php foreach ($profesores as $item) {?>

				<a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>">	
												<!-- Start List View Mode -->
												<div class="product-list-view-area clear">
													<!-- Start Single product -->
													<div class="col-md-12" style="margin-bottom: 20px;">
														<div class="single-product text-left fix">
															<div class="pro-thumb profesor-list" >
																<?php 
																	if (!is_null($item['foto_perfil'])) 
																	{
																		echo $this->Html->image(
																		"perfiles/".$item['foto_perfil'], 
																		["alt" => "imagen de usuario", "class" => "photo-box"]
																		);
																	}
																	else
																	{
																		echo $this->Html->image(
																		"user.png", 
																		["alt" => "imagen de usuario", "class" => "photo-box"]
																		);
																	}
																?>
															</div>
															<div class="pro-info profesor-list">

																<p class="pro-category"><?php echo $item['especialidad'];  ?></p>
																<h3 class="pro-title"><a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>"><?php echo $item['nombres'] ;  ?></a></h3>
																<div class="pro-rating star">
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star-half-o"></i></span>
																</div>
																<div class="pro-rating star">
																	<span>
																		<?php 
																			
																			echo $this->Html->image(
																			"bandera/".$item['pais'].".png",
																			["alt" => "imagen de usuario",
																			"style" => "margin-top: -3px;     width: 25px; height: 25px;",
																
																			]
																			);
																	

																		 ?>
																	</span>
																	<span>
																		<i class="fa fa-crown" style="font-size: 20px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Titulado"></i>
																	</span>
																	<span>
																		<i class="fas fa-award" style="font-size: 22px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Certificado"></i>
																	</span>
																</div>
																<p class="pro-content"><?php echo substr($item['descripcion'], 0, 160)."...";  ?></p>
																<!--<div class="pro-available-color">
																	<ul class="color-list">
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																	</ul>
																</div> -->
															</div>
														</div>
													</div>
													<!-- End Single product -->
																									
													
												</div>
												<!-- End List View Mode -->
												<?php } ?>
											</div>
										</div>
									<!--End Product List  -->
									</div>
									<!--Start Pagination  area
									<div class="row">
										<div class="pagination-area-v1">
											<div class="col-md-12 text-left">
												<ul class="page-numbers">
													<li class="page-number current">1</li>
													<li><a class="page-number" href="#">2</a></li>
													<li><a class="page-number" href="#">3</a></li>
													<li><a class="page-number" href="#">4</a></li>
												</ul>
											</div>
										</div>
									</div>
									--> <!--End Pagination  area-->
									<!-- End Product Filter Tab Wrap -->
								</div>
								<!--End shop wrap area -->
							</div>
							<!--End Left Side -->
							<?php echo $this->element('sidebar'); ?>
						</div>
					</div>
				</div>
				<!-- End Small image blog Post area -->
			</div>
		</div>
		<!-- End wrapper --> 

				<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>