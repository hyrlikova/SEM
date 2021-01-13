<?php include_once "header.php"?>

<form action="menu.php" >

    <div class="avatar">
        <img class="burgerAvatar" src="./obrazky/burger.png" alt = "burger">
    </div>

    <div class="formular">

        <label><b>Meno</b></label>

        <label>
            <input class="meno" type="text" placeholder="Zadajte email" required>
        </label>

        <label><b>Heslo</b></label>

        <label>
            <input class="meno" type="password" placeholder="Zadajte heslo" required>
        </label>

        <button class="prihlasitButton" type="submit">Prihlásiť</button>

    </div>

</form>

<div class="formular" >
    <a href="registracia.php"> <button class="registerButton" type="submit">Registrovať</button> </a>
</div>



</body>
</html>