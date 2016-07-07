<?php
    include 'clases/conexion.php';
        $consulta= "SELECT titulo_conocenos, texto_conocenos, url FROM conocenos";
        $resultado=mysqli_query($link,$consulta);
        $i=0;
        while($fila = mysqli_fetch_row($resultado)){        
            $tituloConocenos[$i]=$fila[0];
            $textoConocenos[$i]=$fila[1];  
            $url[$i]=$fila[2];
            $i++;
        }    
    include 'clases/desconexion.php';
?>

<!-- Seccion Conocenos -->
<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one"><?php echo $tituloConocenos[0]; ?></h2>
				<p><?php echo $textoConocenos[0]; ?></p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
              
				<div class="col-sm-10 col-sm-offset-1">
					<h3>Acerca de</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> <?php echo $tituloConocenos[1]; ?></a></li>
						<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i>
                            <?php echo $tituloConocenos[2]; ?></a></li>
                        <li><a href="#presidencias" data-toggle="tab"><i class="fa fa-book"></i> <?php echo $tituloConocenos[3]; ?></a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<img class="pull-left media-object" width="150px;" src="images/conocenos/mision.png" alt="Misión"> 
								<div class="media-body">
									<p><?php echo $textoConocenos[1]."<br>"; 
                                        if ($url[1]!=NULL){
                                            echo " <a class='btn btn-default animated fadeIn'>VER MÁS</a>";
                                        }      
                                        ?>                                  
                                    
                                    </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" width="150px"  src="images/conocenos/vision.png" alt="Visión"> 
								<div class="media-body">
									<p><?php echo $textoConocenos[2]."<br>"; 
                                        
                                        if ($url[2]!=NULL){
                                            echo " <a class='btn btn-default animated fadeIn'>VER MÁS</a>";
                                        }
                                        ?>
                                    
                                   
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="presidencias">
							<div class="media">
								<img class="pull-left media-object" width="150px"  src="images/conocenos/presidencias.png" alt="Comunidad"> 
								<div class="media-body">
									<p><?php echo $textoConocenos[3]."<br>"; 
                                            if ($url[3]!=NULL){
                                                echo " <a class='btn btn-default animated fadeIn' href='$url[3]' target=_BLANK>VER MÁS</a>";
                                            }
                                        
                                        ?>
                                       
								</div>
							</div>
						</div>
                        
					</div>
				</div>
            </div>
			</div>
		</div>
	</section><!--Fin de la sección conocenos -->