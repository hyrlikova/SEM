<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="author" content="Natalia Hyrlikova">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoodFood</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href ="style.css" rel = "stylesheet">
    </head>

    <body>
        <ul class="nav">
            <li class="linav"><a href="menu.php" ><i class="fa fa-home"></i></a></li>
            <li class="linav"><a href="ponuka.php">Ponuka</a></li>
            <li class="linav"><a href="kosik.php">Nakupný košík</a></li>
            <li class="linav"><a href="kontakt.php">Kontakt</a></li>
            <li class="linav"><a href="prihlasenie.php">Prihlásenie</a></li>
        </ul>


        <div class="mobile-container">
            <div class="topnav">
                <a class="active"></a>
                <div id="myLinks">
                    <a href="menu.php">Úvod</a>
                    <a href="ponuka.php">Ponuka</a>
                    <a href="kosik.php">Nakupný košík</a>
                    <a href="kontakt.php">Kontakt</a>
                    <a href="prihlasenie.php">Prihlásenie</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>
            </div>

        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
