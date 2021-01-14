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
require "../CLASS/User.php";
require "../CLASS/DBStorage.php";

$storage = new DBStorage();


if (isset($_POST['email'], $_POST['heslo'], $_POST['adresa'], $_POST['mobil'])) {


    if ($storage->EmailCheck($_POST['email']) == true) {

        echo '<script type="text/javascript">';
        echo 'window.location.href = "prihlasenie.php";';
        echo 'alert("Email už existuje!");';
        echo '</script>';

    } else {
        $storage->SaveUser(new User($_POST['email'], $_POST['heslo'], $_POST['adresa'], $_POST['mobil'], $_GET['id']));

        echo '<script type="text/javascript">';
        echo 'window.location.href = "prihlasenie.php";';
        echo 'alert("Registrácia prebehla úspešne!");';
        echo '</script>';
    }
}

?>

<div class="kontajnerRegister">
    <div class="register">

        <form method="post" class="formRegister">

            <label for="email"><b>Email</b> </label> <br>
            <input id="email" type="email" placeholder="Zadajte email" name="email" value="" required><br><br>


            <label for="heslo"><b>Heslo</b> </label><br>
            <input id="heslo" type="password" placeholder="Zadajte heslo" name="heslo" value="" required><br><br>


            <label for="adresa"><b>Adresa</b> </label><br>
            <input id="adresa" type="text" placeholder="Zadajte adresu" name="adresa" value="" required><br><br>


            <label for="mobil"><b>Telefónne číslo</b></label><br>
            <input id="mobil" type="tel" placeholder="09YYXXXXXX" name="mobil" value="" pattern="09[0-9]{8}"
                   required><br><br>


            <div class="but">

                <button type="submit" value="Submit" class="signupbtn">Registrovať</button>

            </div>

        </form>
        <button onclick="window.location='prihlasenie.php'" class="cancelbtn">Zrušiť</button>

    </div>
</div>
