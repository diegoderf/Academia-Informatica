<?

$name=$_POST['name'];
$Email=$_POST['email'];
$website="Academias-Informatica.com";
$message=$_POST['message'];

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    $body .= "Name: " . $name . "\n"; 
    $body .= "Email: " . $Email . "\n"; 
    $body .= "Website: " . $website . "\n"; 
    $body .= "Message: " . $message . "\n"; 

    
    mail("derf_rvd@hotmail.com","Mensaje Academias de Informática",$body,$headers); 
      
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert('Enviado')</script>

<meta HTTP-EQUIV="REFRESH" content="0; url=../index.php"> 

</head>