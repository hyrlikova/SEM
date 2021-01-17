<?php

require "../FILE/utils.php";

class DBStorage
{

    private $pdo;


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=shoppingcart", "root", "dtb456");
    }

    public function LoadAll($param)
    {
        $result = [];


        $r = $this->pdo->query("SELECT * FROM products WHERE userID = '$param'");

        foreach ($r as $item) {
            $result[] = new Product($item['name'], $item['price'], $item['id'], $item['note'], $item['userID']);

        }

        return $result;


    }

    public function Save(Product $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (name , price, userID) value (?,?,?)");
        $statement->execute([$param->getNazov(), $param->getCena(), $param->getUserID()]);

    header("Location: http://localhost:63342/SEM/FILE/kosik.php");
    }

    public function SaveUser(User $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO users (email,heslo,adresa,mobil) value (?,?,?,?)");
        $statement->execute([$param->getEmail(), $param->getHeslo(), $param->getAdresa(), $param->getMobil()]);

        //header("Location: http://localhost:63342/SEM/prihlasenie.php");
    }


    public function Price($param)
    {
        $suma = $this->pdo->prepare("SELECT sum(price) AS cena  FROM products WHERE userID = :param");
        $suma->execute(array(
            ':param' => $param
        ));
        $row = $suma->fetch(PDO::FETCH_ASSOC);
//        echo number_format($row['cena'], 2, '.', ''), "&#8364;";

        return number_format($row['cena'], 2, '.', ''). "&#8364;";
    }

    public function redirect()
    {
        header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php");
    }


    public function Remove($param)
    {
        $produkt = $this->pdo->prepare("DELETE  FROM products where id = $param");
        $produkt->execute();
    }

    public function Update($text, $id)
    {

        $this->pdo->query("UPDATE products SET note='$text' WHERE id=$id");

        header("Location: http://localhost:63342/SEM/FILE/kosik.php");
    }


    public function EmailCheck($param)
    {
        $user = $this->pdo->prepare("SELECT email FROM users WHERE email = :param");
        $user->execute(array(
            ':param' => $param
        ));

        $foundUser = $user->fetchAll();

        if (empty($foundUser)) {
            return false;
        }

        return true;

    }


    public function PrihlasenieCheck($email, $heslo)
    {


        $userEmail = $this->pdo->prepare("SELECT count(heslo) AS cnt FROM users WHERE heslo = :hash");

        $userEmail->execute(array(':hash'=>myHash($email,$heslo)));


        $foundUserE = $userEmail->fetch(PDO::FETCH_ASSOC);


        if ( $foundUserE['cnt'] == 1) {
            return true;
        }

        return false;


    }


}