<?php
session_start();


header('Content-type: application/json');

require "../CLASS/Evaluation.php";
require "../CLASS/DBStorage.php";

$storage = new DBStorage();

$response_array['status'] = 'success';


$id = $_POST['id'];
$dodanie =  $_POST['dodanie'];
$jedlo = $_POST['jedlo'];
$spokojnost = $_POST['spokojnost'];
$user_emal= $_SESSION['user_email'];


$storage->EvaluationSave(new Evaluation($id,$dodanie,$jedlo,$spokojnost,$user_emal));


http_response_code(200);
echo http_response_code();

echo json_encode($response_array);






