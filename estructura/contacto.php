<?php     
    include 'clases/conexion.php';
    $consulta= "SELECT telefono_contacto,extension_contacto,academia FROM contacto";
    $resultado=mysqli_query($link,$consulta);  
    $i=0;
    while($fila = mysqli_fetch_row($resultado)){        
        $tel[$i]=$fila[0];
        $ext[$i]=$fila[1];  
        $aca[$i]=$fila[2];        
        $i++;
    }
    include 'clases/desconexion.php';
?>

<!-- Sección contacto -->
						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contacto</h2>
											<p>Si deseas contactarte con nosotros puede hacerlo llenando el formulario o hazlo directamente con la siguiente información</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>Academia</span><?php echo $aca[0];?></p><strong>Dirección Upiicsa<br>
Av. Té #950 esquina Resina, Col. Granjas México, C.P. 08400,<br> Del. Iztacalco, Ciudad de México, México. </strong><br><small> Teléfono:<?php echo $tel[0];?> EXT. <?php echo $ext[0];?></small></address>
												<div class="social-icons">
													<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
												
												</div>
											</div>
										</div>
										<div class="col-sm-6"> 
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="clases/send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Nombre"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Enviar</button>
														</div>
													</form> 
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--Fin de la sección Contacto--> 