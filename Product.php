<?php


class Product
{
    private $name;
    private $price;
    private $id;
    private $note = "";

    /**
     * Article constructor.
     * @param $name
     * @param $price
     * @param $id
     * @param $note
     */
    public function __construct($name, $price, $id, $note)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id = $id;
        $this->note = $note;
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
