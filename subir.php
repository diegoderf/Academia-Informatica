<!-- Programadores: Servicio Social Academias de informática UPIICSA 2016 -->
<!DOCTYPE html>
<html lang="es">

<?php include 'estructura/head.php'; ?>

<body>
    <?php include 'estructura/preloader.php'; ?>
    <?php include 'estructura/menu.php'; ?>
    <?php include 'estructura/slider.php'; ?>
    
  <form  action="clases/subir.php" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Enviar"  class="trig">
    </form>
    <?php include 'estructura/footer.php'; ?>
    <?php include 'estructura/scripts.php'; ?>  	
</body>
</html>