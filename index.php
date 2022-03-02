<?php 
require("utilisateur.php");
$user =  new utilisateur("p17@gmail.com","wesh","younous");
$admin =  new utilisateur("p18@gmail.com","wesh","idris");


if($user->getEmail()!= $_POST["email"] AND $user->getMdp()!= $_POST["password"] OR $admin->getEmail()!= $_POST["email"] AND $admin->getMdp()!= $_POST["password"] ) {
    echo "email correct ou mot de passe incorrecte";
}
if($admin->getEmail()== $_POST["email"] AND $admin->getMdp()== $_POST["password"]){
    header("Location: admin.php"); 
}
if($user->getEmail()== $_POST["email"] AND $user->getMdp()== $_POST["password"]){
    header("Location: user.php"); 
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="content">
        <form action="index.php" method="POST">
            <input type="email" name="email" placeholder="email@mail.fr">
            <input type="password" name="password" placeholder="password">
            <button type="submit">Envoyer</button>
        </form>
        <h1><?php echo $user->getEmail(); ?></h1>
        </div>
    </body>
</html> 