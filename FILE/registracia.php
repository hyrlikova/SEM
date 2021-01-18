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


if (isset($_POST['email'], $_POST['heslo'], $_POST['mesto'],$_POST['ulica'], $_POST['mobil'])) {


    if ($storage->EmailCheck($_POST['email']) == true) {

        echo '<script type="text/javascript"> window.location.href = "prihlasenie.php";alert("Email už existuje!");</script>';

    } else {

        $storage->SaveUser(new User($_POST['email'], myHash($_POST['email'],$_POST['heslo']), $_POST['mesto'],$_POST['ulica'], $_POST['mobil']));

        echo '<script type="text/javascript">window.location.href = "prihlasenie.php";alert("Registrácia prebehla úspešne!");</script>';
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


            <label for="mesto"><b>Mesto</b> </label><br>
            <input id="mesto" type="text" placeholder="Zadajte mesto" name="mesto" value="" maxlength="20" pattern="[^0-9]*" title="Nemôže obsahovať čísla" required><br><br>

            <label for="ulica"><b>Ulica</b> </label><br>
            <input id="ulica" type="text" placeholder="Zadajte ulicu a číslo domu" name="ulica" maxlength="50" value="" required><br><br>


            <label for="mobil"><b>Telefónne číslo</b></label><br>
            <input id="mobil" type="tel" placeholder="09XXXXXXXX" name="mobil" value="" pattern="09[0-9]{8}" title="Nemôže obsahovať písmená "
                   required><br><br>


            <div class="but">

                <button type="submit" value="Submit" class="signupbtn">Registrovať</button>

            </div>

        </form>
        <button onclick="window.location='prihlasenie.php'" class="cancelbtn">Zrušiť</button>

    </div>
</div>



