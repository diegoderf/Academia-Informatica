<?php
    $link = mysqli_connect('localhost', 'root', '');    
    mysqli_select_db($link, "principal");
    $tildes = $link->query("SET NAMES 'utf8'"); 
?>