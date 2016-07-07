<!-- SLIDER -->
	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
                
                <?php
                     include 'clases/conexion.php';
                    $consulta= "SELECT * FROM slider";
                    $resultado=mysqli_query($link,$consulta);  
                    $i=0;
                    while($fila = mysqli_fetch_row($resultado)){ 
                    
                        if($i==0){
                            echo"<li data-target='#main-carousel' data-slide-to='0' class='active'></li>";
                        }
                        else{
                             echo"<li data-target='#main-carousel' data-slide-to='$i'></li>";
                            
                        }
                        $i++;
                    }
                     include 'clases/desconexion.php';
                ?>
                
               
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
                <?php     
                    include 'clases/conexion.php';
                    $consulta= "SELECT * FROM slider";
                    $resultado=mysqli_query($link,$consulta);  
                    $i=0;
                    while($fila = mysqli_fetch_row($resultado)){        
                        $titulo[$i]=$fila[1];
                        $descripcion[$i]=$fila[2];
                        $boton[$i]=$fila[3];  
                        $url[$i]=$fila[4];
                        $imagen[$i]=$fila[5];
                        
                        if($i==0){
                        echo "
                            <div class='item active' style='background-image: url($imagen[$i])'> 
                                <div class='carousel-caption'> 
                                    <div> 
                                        <h2 class='heading animated bounceInDown'>$titulo[$i]</h2> 
                                        <p class='animated bounceInUp'>$descripcion[$i]</p> 
                                        <a class='btn btn-default slider-btn animated fadeIn' href='$url[$i]' target='_blank'> $boton[$i]</a> 
                                    </div> 
                                </div> 
                             </div>
                        ";  }
                        else{
                           echo "
                            <div class='item' style='background-image: url($imagen[$i])'> 
                                <div class='carousel-caption'> 
                                    <div> 
                                        <h2 class='heading animated bounceInDown'>$titulo[$i]</h2> 
                                        <p class='animated bounceInUp'>$descripcion[$i]</p> 
                                        <a class='btn btn-default slider-btn animated fadeIn' href='$url[$i]' target='_blank'> $boton[$i]</a> 
                                    </div> 
                                </div> 
                             </div>
                        "; 
                            
                        }
                        $i++;
                    }
                include 'clases/desconexion.php';
                ?>
                
            </div>

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--Fin de la sección del slider -->
