<?php include_once "header.php" ?>

<?php
require "../CLASS/Product.php";
require "../CLASS/DBStorage.php";

session_start();


if (isset($_SESSION['user_email'])) {

$storage = new DBStorage();

if (isset($_POST['name'])) {
    $storage->Save(new Product($_POST['name'], $_POST['price'], $_GET['id'], $_POST['note'],$_SESSION['user_email']));
}

?>


<div class="ponuka">

    <div class="stlpec">
        <form method="post" class="rizoto">
            <input type="hidden" name="name" value="Rizoto">
            <input type="hidden" name="price" value="5.50">

            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">
                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">RIZOTO 5,50&#8364;
            </button>
            </h2>

            <img class="obrJedlo" src="../IMG/grecke-rizoto.jpg" alt="rizoto">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="penne">
            <input type="hidden" name="name" value="Penne">
            <input type="hidden" name="price" value="5.50">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">PENNE 5,50&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/cestoviny.png" alt="cestoviny">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="caesar">
            <input type="hidden" name="name" value="Caesar">
            <input type="hidden" name="price" value="5.70">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">CAESAR 5,70&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/ceasar.jpg" alt="caesar salat">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="gyros">
            <input type="hidden" name="name" value="Gyros">
            <input type="hidden" name="price" value="5.90">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">GYROS 5,90&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/gyros.png" alt="gyros">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="suflaky">
            <input type="hidden" name="name" value="Suflaky">
            <input type="hidden" name="price" value="5.90">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">SUFLAKY 5,90&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/kuracie.jpg" alt="suflaky">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="rodeo">
            <input type="hidden" name="name" value="Rodeo">
            <input type="hidden" name="price" value="6.90">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">RODEO 6,90&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/rodeo.jpg" alt="hamburger">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="haloumi">
            <input type="hidden" name="name" value="Haloumi">
            <input type="hidden" name="price" value="5.50">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">HALLOUMI 5,50&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/haloumi.png" alt="kozi syr">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="smazak">
            <input type="hidden" name="name" value="Smažák">
            <input type="hidden" name="price" value="4.50">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">SMAŽÁK 4,50&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/syr.jpg" alt="vyprazany syr">
        </form>
    </div>

    <div class="stlpec">
        <form method="post" class="polievka">
            <input type="hidden" name="name" value="Polievka">
            <input type="hidden" name="price" value="1.80">
            <h2 class="produkt">
            <button type="submit" value="Submit" class="tlacidlo">

                    <img class="kosik"
                         src="https://www.freeiconspng.com/uploads/shopping-cart-icon-2.png"
                         alt="kosik">POLIEVKA 1,80&#8364;

            </button>
            </h2>
            <img class="obrJedlo" src="../IMG/soup.png" alt="polievka">
        </form>
    </div>

</div>


</body>
</html>

<?php } else
    header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php");?>