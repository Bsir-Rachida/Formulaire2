<?php
$errors= [];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (empty($_POST['user_lastname'])){
      $errors[] ='Merci de renseigner votre nom';
      } 

      if (empty($_POST['user_firstname'])){
      $errors[] = 'Merci de renseigner votre prénom';
      }  

      if (empty($_POST['user_mail'])){
      $error = 'Merci de renseigner votre e-mail';
     } elseif (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
          $errors[] = 'Format invalide';
      }

     if (empty($_POST['user_phone'])){
      $errors[] = 'Merci de renseigner votre numéro de téléphone';
    } 
  
    if (empty($_POST['user_message'])){
       $errors[] = 'Merci de renseigner votre message';
    } 

    if (empty($errors)){
    echo'Merci'.' '.$_POST['user_firstname'].' '.$_POST['user_lastname'].' '.'de nous avoir contacté à propos de '.' " '.$_POST['user_list'].' ";'."<br>";


    echo'Un de nos conseiller vous contactera soit à l’adresse '.' '.$_POST['user_mail'].' '.'ou par téléphone au'.' '.$_POST['user_phone'].' '.'dans les plus brefs délais pour traiter votre demande :'."<br>";
    
    echo $_POST['user_message'];
    } 
    else{
      foreach($errors as $error){
          echo $error . '<br>';
                                }
       }

};
