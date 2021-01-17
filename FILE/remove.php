<?php
session_start();

header('Content-type: application/json');

require "../CLASS/Product.php";
require "../CLASS/DBStorage.php";

$storage = new DBStorage();

$response_array['status'] = 'success';


try {
    $storage->Remove($_POST['id']);
}catch (Exception $exception){
    $response_array['status'] = 'error';
}


$response_array['price'] = $storage->Price($_SESSION['user_email']);

echo json_encode($response_array);