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
            $result[] = new Product($item['name'], $item['price']);

        }

        return $result;


    }

    public function Save(Product $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (name , price) value (?,?)");
        $statement->execute([$param->getTitle(), $param->getText()]);
    }

    public function Remove ()
    {

    }

    public function Price()
    {

        $suma = $this->pdo->prepare("SELECT sum(price) AS cena  FROM products");
        $suma->execute();
        $row = $suma->fetch(PDO::FETCH_ASSOC);
        echo number_format($row['cena'], 2, '.', ''), "&#8364";

    }



}

