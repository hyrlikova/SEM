<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="author" content="Natalia Hyrlikova">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFood</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../CSS/style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/ajax.js"></script>
    <script src="../JS/ajaxSuccess.js"></script>
    <script src="../JS/utils.js"></script>


</head>
<body>
<ul class="nav">
    <li class="linav"><a href="menu.php"><i class="fa fa-home"></i></a></li>
    <li class="linav"><a href="ponuka.php">Ponuka</a></li>
    <li class="linav"><a href="kosik.php">Nakupný košík</a></li>
    <li class="linav"><a href="kontakt.php">Kontakt</a></li>
    <li class="linav"><a href="odhlasenie.php">Odhlásiť!</a></li>
    <li id="cas" class=" linav cas" onload="showTime()"></li>
</ul>


<div class="mobile-container">
    <div class="topnav">
        <a class="active"></a>
        <div id="myLinks">
            <a href="menu.php">Úvod</a>
            <a href="ponuka.php">Ponuka</a>
            <a href="kosik.php">Nakupný košík</a>
            <a href="kontakt.php">Kontakt</a>
            <a href="odhlasenie.php">Odhlásiť!</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="burgerMenuBar()"> <i class="fa fa-bars"></i></a>
    </div>

</div>

<script>


    showTime();
</script>

