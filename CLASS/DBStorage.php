<?php

require "../FILE/utils.php";

class DBStorage
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=shoppingcart", "root", "dtb456");
    }


    public function LoadAllProductsInCart($param)
    {
        $result = [];

        $r = $this->pdo->query("SELECT * FROM products WHERE userID = '$param'");

        foreach ($r as $item) {
            $result[] = new Product($item['name'], $item['price'], $item['id'], $item['note'], $item['userID']);
        }
        return $result;
    }

    public function InsertProductIntoCart(Product $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (name , price, userID) value (?,?,?)");
        $statement->execute([$param->getNazov(), $param->getCena(), $param->getUserID()]);
    }

    public function RemoveProdactFromCart($param)
    {
        $produkt = $this->pdo->prepare("DELETE  FROM products where id = $param");
        $produkt->execute();
    }

    public function CountCartPrice($param)
    {
        $price = $this->pdo->prepare("SELECT sum(price) AS cena  FROM products WHERE userID = :param");
        $price->execute(array(
            ':param' => $param
        ));
        $row = $price->fetch(PDO::FETCH_ASSOC);

        return number_format($row['cena'], 2, '.', ''). "&#8364;";
    }


    public function UpdateNoteInCart($text, $id)
    {

        $this->pdo->query("UPDATE products SET note='$text' WHERE id=$id");

        header("Location: http://localhost:63342/SEM/FILE/kosik.php");
    }


    public function ExistEmailCheckRegistrationForm($param)
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


    public function RegisterUser(User $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO users (email,heslo,mesto,ulica,mobil) value (?,?,?,?,?)");
        $statement->execute([$param->getEmail(), $param->getHeslo(), $param->getMesto(), $param->getUlica(), $param->getMobil()]);
    }


    public function SingInCheck($email, $heslo)
    {

        $userEmail = $this->pdo->prepare("SELECT count(heslo) AS cnt FROM users WHERE heslo = :hash");

        $userEmail->execute(array(':hash'=>myHash($email,$heslo)));

        $foundUserE = $userEmail->fetch(PDO::FETCH_ASSOC);

        if ( $foundUserE['cnt'] == 1) {
            return true;
        }

        return false;
    }


    public function EvaluationSave(Evaluation $param){

        $statement = $this->pdo->prepare("INSERT INTO evaluation (dodanie, jedlo, spokojnost, user_email) value (?,?,?,?)");
        $statement->execute([$param->getDodanie(), $param->getJedlo(), $param->getSpokojnost(), $param->getUserEmail()]);
    }


}