<?php


class Product
{
    private $name;
    private $price;
    private $id;

    /**
     * Article constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price, $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id = $id;
    }

    public function getId(){
    return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setTitle($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setText($price)
    {
        $this->price = $price;
    }
}
