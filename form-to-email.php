<?php 
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}
//COLLECT: 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//VALIDATE FIRST: 
if(empty($name)||empty($visitor_email)||empty($message))
{
    echo "Nombre, email y mensaje son requeridos"
}

$email_from = sandragomezgalvezsw@gmail.com;//"laragz.estilistas@gmail.com";
$email_subject = "Nuevo mensaje desde la web Lara Gomez";
$email_body = "Nuevo mensaje desde la web. \n email: $visitor_email\n Mensaje:\n $message";
    
$to = sandragomezgalvezsw@gmail.com;//"laragz.estilistas@gmail.com";
$headers = "From: $email_from \r\n";

// SEND THE EMAIL:
mail($to,$email_subject,$email_body,$headers);
// DONE

?>