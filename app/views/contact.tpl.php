<?php 
    include '../app/utils/fonctions.php';
?>

<h2>Formulaire de contact</h2>
<h2>gestion des erreurs</h2>

<?php
var_dump($_POST);

$errors = [];

if (!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == ''){
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    header('location index.tpl.php');
} else {
    $message = $_POST['message'];
    $headers = 'FROM : simonin_fanny@yahoo.fr';
    
    mail('dansmonbaluchon@gmail.com' , 'Formulaire de contact', $message, $headers);
}
