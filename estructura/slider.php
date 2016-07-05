<?php     
    include 'clases/conexion.php';
    $consulta= "SELECT titulo_slider, descripcion_slider, boton_slider FROM slider";
    $resultado=mysqli_query($link,$consulta);  
    $i=0;
    while($fila = mysqli_fetch_row($resultado)){        
        $titulo[$i]=$fila[0];
        $descripcion[$i]=$fila[1];
        $boton[$i]=$fila[2];  
        $i++;
    }
    include 'clases/desconexion.php';
?>

<!-- SLIDER -->
	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slide3.jpg)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown"><?php echo $titulo[0]; ?></h2> 
							<p class="animated bounceInUp"><?php echo $descripcion[0]; ?></p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#horarios"><?php echo $boton[0]; ?></a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(images/slider/slide2.jpg)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown sombra"><?php echo $titulo[1]; ?></h2> 
						<p class="animated bounceInUp"><?php echo $descripcion[1]; ?></p> 
                        <a class="btn btn-default slider-btn animated fadeIn" href="#"><?php echo $boton[1]; ?></a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slide1.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight"><?php echo $titulo[2]; ?></h2> 
						<p class="animated bounceInLeft"><?php echo $descripcion[2]; ?></p> 
						<a class="btn btn-default slider-btn animated bounceInUp" href="#"><?php echo $boton[2]; ?></a> 
					</div> 
				</div> 
			</div>
		</div>

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--Fin de la sección del slider -->
