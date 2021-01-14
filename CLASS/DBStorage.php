<?php

class DBStorage
{

    private $pdo;


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=shoppingcart", "root", "dtb456");
    }

    public function LoadAll()
    {
        $result = [];


        $r = $this->pdo->query("SELECT * FROM products");

        foreach ($r as $item) {
            $result[] = new Product($item['name'], $item['price'], $item['id'], $item['note']);

        }

        return $result;


    }

    public function Save(Product $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (name , price) value (?,?)");
        $statement->execute([$param->getNazov(), $param->getCena()]);

        header("Location: http://localhost:63342/SEM/FILE/kosik.php");
    }

    public function SaveUser(User $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO users (email,heslo,adresa,mobil) value (?,?,?,?)");
        $statement->execute([$param->getEmail(), $param->getHeslo(), $param->getAdresa(), $param->getMobil()]);

        //header("Location: http://localhost:63342/SEM/prihlasenie.php");
    }


    public function Price()
    {
        $suma = $this->pdo->prepare("SELECT sum(price) AS cena  FROM products");
        $suma->execute();
        $row = $suma->fetch(PDO::FETCH_ASSOC);
        echo number_format($row['cena'], 2, '.', ''), "&#8364;";
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


    public function PrihlasenieCheck($email,$heslo)
    {
        $userEmail = $this->pdo->prepare("SELECT email,heslo FROM users WHERE email = :email AND heslo = :heslo");

        $userEmail->execute(array(':email' => $email,':heslo' => $heslo));


        $foundUserE = $userEmail->fetchAll();

        if (empty($foundUserE)) {
            return true;
        }

        return false;


    }




}