<?php


class User
{
    private $email;
    private $heslo;
    private $adresa;
    private $mobil;
    //private $id;

    /**
     * User constructor.
     * @param $email
     * @param $heslo
    // * @param $id
     * @param $adresa
     * @param $mobil
     */
    public function __construct($email, $heslo,$adresa, $mobil)
    {
        $this->email = $email;
        $this->heslo = $heslo;
        $this->adresa = $adresa;
        $this->mobil = $mobil;
        //$this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getHeslo()
    {
        return $this->heslo;
    }

    /**
     * @param mixed $heslo
     */
    public function setHeslo($heslo)
    {
        $this->heslo = $heslo;
    }


    /**
     * @return mixed
     */
    public function getAdresa()
    {
        return $this->adresa;
    }

    /**
     * @param mixed $adresa
     */
    public function setAdresa($adresa)
    {
        $this->adresa = $adresa;
    }

    /**
     * @return mixed
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * @param mixed $mobil
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;
    }




}
