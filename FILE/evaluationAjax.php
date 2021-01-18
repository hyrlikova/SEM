<?php
session_start();


header('Content-type: application/json');

require "../CLASS/Evaluation.php";
require "../CLASS/DBStorage.php";

$storage = new DBStorage();

$id = $_POST['id'];
$dodanie = $_POST['dodanie'];
$jedlo = $_POST['jedlo'];
$spokojnost = $_POST['spokojnost'];
$user_emal = $_SESSION['user_email'];


if ($dodanie == "undefined" || $jedlo== "undefined" || $spokojnost == "undefined") {

    echo 400;


} else {

    $storage->EvaluationSave(new Evaluation($id, $dodanie, $jedlo, $spokojnost, $user_emal));
    echo 200;
}






