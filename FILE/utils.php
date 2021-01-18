<?php

function myHash ($email,$heslo){

    $salted = "cervena paprika je zdrava".$heslo .  $email;
    $myHash = hash("sha256",$salted);

    return $myHash;
}



