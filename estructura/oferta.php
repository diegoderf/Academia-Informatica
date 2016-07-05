<?php
    include 'clases/conexion.php';
        $consulta= "SELECT titulo_oferta, texto_oferta, url_oferta FROM oferta";
        $resultado=mysqli_query($link,$consulta);
        $i=0;
        while($fila = mysqli_fetch_row($resultado)){        
            $tituloOferta[$i]=$fila[0];
            $textoOferta[$i]=$fila[1];  
            $url[$i]=$fila[2];
            $i++;
        }    
    include 'clases/desconexion.php';

?>



<!-- Sección Oferta -->
	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one"><?php echo $tituloOferta[0]; ?></h2>
					<p><?php echo $textoOferta[0]; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="single-service">
									<i class="fa fa-desktop"></i>
									<h2><?php echo $tituloOferta[1]; ?></h2>
									<p><?php echo $textoOferta[1]; ?></p>
                                     <a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[1];?>" target="_blank" >Plan de estudios</a> 
								</div>
							</div>
							<div class="col-sm-5">
								<div class="single-service">
									<i class="fa fa-cog"></i>
									<h2><?php echo $tituloOferta[2]; ?></h2>
									<p> <?php echo $textoOferta[2]; ?></p>
                                    <a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[2];?>" target="_blank">Plan de estudios</a> 
                                    
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Fin de la sección oferta-->