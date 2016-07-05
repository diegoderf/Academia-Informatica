<?php     
    include 'clases/conexion.php';
    $consulta= "SELECT concepto_estudiantes, introduccion_estudiantes, descripcion_estudiantes FROM estudiantes";
    $resultado=mysqli_query($link,$consulta);  
    $i=0;
    while($fila = mysqli_fetch_row($resultado)){        
        $concepto[$i]=$fila[0];
        $introduccion[$i]=$fila[1];  
        $descripcion[$i]=$fila[2];        
        $i++;
    }
    include 'clases/desconexion.php';
?>



<!-- Sección Estudiante -->
        <section id="blog"> 
						<div class="container">
							<div class="row text-center clearfix">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="title-one">Estudiantes</h2>
									<p class="blog-heading">En esta sección encontrarás información que te será útil para tener una vida escolar upiicsiana éxitosa.</p>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/estudiantes/1.jpg" alt="" />
										<h2><?php echo $concepto[0]; ?></h2>
										
										<div class="blog-content">
											<p><?php echo $introduccion[0]; ?></p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Leer más</a>
									</div>
									<div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/estudiantes/1.jpg" alt="" />
													<h2><?php echo $concepto[0]; ?></h2>
													<p><?php echo $descripcion[0]; ?></p>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/estudiantes/2.jpg" alt="" />
										<h2><?php echo $concepto[1]; ?></h2>
										
										<div class="blog-content">
											<p><?php echo $introduccion[1]; ?></p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Leer más</a>
									</div>
									<div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/estudiantes/2.jpg" alt="" />
													<h2><?php echo $concepto[1]; ?></h2>
													<p><?php echo $descripcion[1]; ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/estudiantes/3.jpg" alt="" />
										<h2><?php echo $concepto[2]; ?></h2>
										
										<div class="blog-content">
											<p><?php echo $introduccion[2]; ?></p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Leer más</a>
									</div>
									<div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/estudiantes/3.jpg" alt="" />
													<h2><?php echo $concepto[2]; ?></h2>
													<p><?php echo $descripcion[2]; ?></p>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/estudiantes/4.jpg" alt="" />
										<h2><?php echo $concepto[3]; ?></h2>
										<div class="blog-content">
											<p><?php echo $introduccion[3]; ?></p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Leer más</a></div>
										<div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/estudiantes/4.jpg" alt="" />
														<h2><?php echo $concepto[3]; ?></h2>
														<p><?php echo $descripcion[3]; ?></p>
													</div> 
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-blog">
											<img src="images/estudiantes/5.jpg" alt="" />
											<h2><?php echo $concepto[4]; ?></h2>
											
											<div class="blog-content">
												<p><?php echo $introduccion[4]; ?></p>
											</div>
											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Leer más</a>
										</div>
										<div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/estudiantes/5.jpg" alt="" />
														<h2><?php echo $concepto[4]; ?></h2>
														<p><?php echo $descripcion[4]; ?></p>
													</div> 
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="single-blog">
											<img src="images/estudiantes/6.jpg" alt="" />
											<h2><?php echo $concepto[5]; ?></h2>
											<div class="blog-content">
												<p><?php echo $introduccion[5]; ?></p>
											</div>
											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Leer más</a>
										</div>
										<div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/estudiantes/6.jpg" alt="" />
														<h2><?php echo $concepto[5]; ?></h2>
														<p><?php echo $descripcion[5]; ?></p>
													</div> 
												</div>
											</div>
										</div>
									</div> 
								</div> 
							</div> 
						</section> <!--/#blog-->
    
        <!-- Fin de la sección Estudiante -->