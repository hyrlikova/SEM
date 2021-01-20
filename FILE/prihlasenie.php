<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Natalia Hyrlikova">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFood</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../CSS/style.css" rel="stylesheet">
</head>

<body>


<?php

session_start();
require "../CLASS/User.php";
require "../CLASS/DBStorage.php";


$storage = new DBStorage();


if (isset($_POST['email'], $_POST['heslo'])) {


    if ($storage->SingInCheck($_POST['email'],$_POST['heslo']) == true ) {

        $_SESSION['user_email'] = $_POST['email'];

        header("Location: http://localhost:63342/SEM/FILE/menu.php");


    } else {
        echo '<script type="text/javascript"> window.location.href = "prihlasenie.php";alert("Nespravne meno alebo heslo!");</script>';
    }
}

?>


<form method="post">

    <div class="avatar">

        <img class="burgerAvatar" src="../IMG/burger.png" alt="burger"> <br>
        GOOD FOOD
    </div>

    <div class="formular">

        <label for="email"><b>Meno</b></label>
        <input id="email" class="meno" type="email" name="email" placeholder="Zadajte email" value="" required>


        <label for="heslo"><b>Heslo</b></label>
        <input  id="heslo" class="meno" type="password" placeholder="Zadajte heslo" name="heslo" value="" required>


        <button class="prihlasitButton" type="submit" value="Submit">Prihlásiť</button>

    </div>
</form>


<div class="formular">

    <button class="registerButton" onclick="window.location='registracia.php'" type="submit">Registrovať</button>

</div>







</body>
</html>