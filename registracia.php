<?php include_once "header.php";

require "User.php";
require "DBStorage.php";

$storage = new DBStorage();


if (isset($_POST['email'],$_POST['heslo'],$_POST['adresa'],$_POST['mobil'])) {

$storage->SaveUser(new User($_POST['email'], password_hash($_POST['heslo'],PASSWORD_DEFAULT), $_POST['adresa'],$_POST['mobil'],$_GET['id']));

    echo '<script type="text/javascript">';
    echo 'window.location.href = "prihlasenie.php";';
    echo 'alert("Registrácia prebehla úspešne!");';
    echo '</script>';
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
                <input id="mobil" type="tel" placeholder="09YYXXXXXX" name="mobil" value="" pattern="09[0-9]{8}" required><br><br>



            <div class="but">

                <button type="submit" value="Submit" class="signupbtn">Registrovať</button>
            </div>

            </form>
        </div>
    </div>
