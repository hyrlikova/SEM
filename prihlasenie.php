<?php include_once "header.php"?>

<link href ="prihlasenie.css" rel = "stylesheet">


<form action="menu.php" >

    <div class="avatar">
        <img class="burger" src="./obrazky/burger.png" alt = "burger">
    </div>

    <div class="formular">

        <label><b>Meno</b></label>

        <label>
            <input type="text" placeholder="Zadajte email" required>
        </label>

        <label><b>Heslo</b></label>

        <label>
            <input type="password" placeholder="Zadajte heslo" required>
        </label>

        <button type="submit">Prihlásiť</button>

        <label>
            <input type="checkbox"> Zapamätať prihlásenie
        </label>
    </div>

</form>
