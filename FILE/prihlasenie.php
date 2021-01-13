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

<form action="menu.php">

    <div class="avatar">

        <img class="burgerAvatar" src="../IMG/burger.png" alt="burger"> <br>
        GOOD FOOD
    </div>

    <div class="formular">



            <label for="email"><b>Meno</b></label>
                <input id="email" class="meno" type="email" placeholder="Zadajte email" required>


            <label><b>Heslo</b></label>

            <label>
                <input class="meno" type="password" placeholder="Zadajte heslo" required>
            </label>

                <button class="prihlasitButton" onclick="window.location='menu.php'" type="submit">Prihlásiť</button>



    </div>
</form>


<div class="formular">

        <button class="registerButton" onclick="window.location='registracia.php'" type="submit">Registrovať</button>

</div>


</body>
</html>