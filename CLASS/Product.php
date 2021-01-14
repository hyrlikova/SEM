<?php


class Product
{
    private $name;
    private $price;
    private $id;
    private $note = "";
    private $userID;

    /**
     * Article constructor.
     * @param $name
     * @param $price
     * @param $id
     * @param $note
     * @param $userID
     */
    public function __construct($name, $price, $id, $note, $userID)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id = $id;
        $this->note = $note;
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getId(){
    return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setNazov($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setCena($price)
    {
        $this->price = $price;
    }
}
