<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form action="" method="post">
        <label for="name">Votre Nom :</label>
        <input type="text" name="name" >
        <br><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" >
        <br><br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" ></textarea>
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php

$contact = new Contact($_POST);

if(!empty($_POST)) {
  
  $name = trim($_POST['name']);

  $email   = trim($_POST['email']);

  $message = trim($_POST['message']);

  if (empty($name)){
    echo "Veuillez renseignez votre nom pleaze";

}

if (empty($email)){
  echo "<br>Veuillez renseignez votre email</br>";

}

if(empty($message)){
  echo "Veuillez renseignez votre message";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br>L'email n'est pas valide.</br>";
 
}

else{

  echo "Formulaire soumis avec succès !";

}


}
?>
