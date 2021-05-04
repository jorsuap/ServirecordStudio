<?php

//Llamamos los inputs

    $fname = $_POST['name'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $object = $_POST['object'];
    $message =$_POST['message'];

    //Datos para el correo

    $destinatario = "servirecord.studios@gmail.com";
    $asunto = "Contacto desde Servirecord";

    $correo = "De: $fname $lname \n";
    $correo .= "Correo: $email \n";
    $correo .="Telefono: $phone \n";
    $correo .="Asunto: $object \n";
    $correo .="Mensaje:  $message \n";

//Enviar Correo

mail($destinatario, $asunto, $correo);

header('location: ..envioexitoso.html' );

?>