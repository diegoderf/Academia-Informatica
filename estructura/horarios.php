<?php     
    include 'clases/conexion.php';
    $consulta= "SELECT tipo_horario, periodo_horario, descripcion_horario, url_horario FROM horarios";
    $resultado=mysqli_query($link,$consulta);  
    $i=0;
    while($fila = mysqli_fetch_row($resultado)){        
        $tipoHorario[$i]=$fila[0];
        $periodo[$i]=$fila[1];
        $descripcion[$i]=$fila[2];  
        $url[$i]=$fila[3];
        $i++;
    }
    include 'clases/desconexion.php';
?>

<!--Sección Horarios -->
		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Horarios</h2>
						<p>En esta sección podrás encontrar el calendario escolar así como diversos horarios que te ayudarán a tener un mejor control de tus actividades escolares-</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					
					<div class="carousel-inner team-members">
						<div class="row item active">
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/horarios/member1.jpg" alt="team member" />
									<h4><?php echo $tipoHorario[0]; ?></h4>
									<h5><?php echo $periodo[0]; ?></h5>
                                    <p><?php echo $descripcion[0] ;?></p>
									<a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[0]; ?>" target="_blank">Clic aquí!</a> 
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/horarios/member2.jpg" alt="team member" />
									<h4><?php echo $tipoHorario[1]; ?></h4>
									<h5><?php echo $periodo[1]; ?></h5>
									<p><?php echo $descripcion[1] ;?></p>
      						        <a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[1]; ?>" target="_blank">Clic aquí!</a> 
                                    <p></p>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/horarios/member3.jpg" alt="team member" />
									<h4><?php echo $tipoHorario[2]; ?></h4>
									<h5><?php echo $periodo[2]; ?></h5>	
                                    <p><?php echo $descripcion[2] ;?></p>
                                    <a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[2]; ?>" target="_blank">Clic aquí!</a> 
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/horarios/member4.jpg" alt="team member" />
									<h4><?php echo $tipoHorario[3]; ?></h4>
									<h5><?php echo $periodo[3]; ?></h5>	
                                    <p><?php echo $descripcion[3] ;?></p>
                                    <a class="btn btn-default slider-btn animated fadeIn" href="<?php echo $url[3]; ?>" target="_blank">Clic aquí!</a> 
									
								</div>
							</div>
						</div>
						
						</div>
					</div>
				</div>
			</div>
		</section><!-- Fin de la sección Horarios -->