<!DOCTYPE html>
<html lang="en">





<?php
require "Product.php";
require "DBStorage.php";

$storage = new DBStorage();

if (isset($_POST['note']))
    $storage->Update($_POST['note']);

?>


<head>

    <link href="style.css" rel="stylesheet">
</head>

<body>

<form method="post">

    <div class="textNote">
        <input type="text" name="note" value="kkkk">
    </div>
<div class="obalovacNote">
    <button type="submit" value="Submit" class="tlacidlo"> Submit </button>
</div>

</form>


</body>