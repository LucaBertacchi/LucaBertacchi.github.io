<?php
// controlli
$error = false;
if(!isset($_POST['name']) || empty($_POST['name'])){
    $error = true;
}
if(!isset($_POST['surname']) || empty($_POST['surname'])){
    $error = true;
}
if(!isset($_POST['email']) || empty($_POST['email'])){
    $error = true;
}
if(!isset($_POST['object']) || empty($_POST['object'])){
    $error = true;
}
if(!isset($_POST['message']) || empty($_POST['message'])){
    $error = true;
}

if($error){
    echo "alcuni campi obbligatori non sono stati compilati";
    exit();
}
$result = mail ("lucamattiabertacchi@gmail.com", $_POST['object'], $_POST['message'],  "FROM: $_POST[email]");

if($result)
    echo "Email inviata con successo";
else
    echo "Problemi nell'invio dell'email";