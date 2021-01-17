<?php


class User
{
    private $email;
    private $heslo;
    private $mesto;
    private $mobil;
    private $ulica;


    /**
     * User constructor.
     * @param $email
     * @param $heslo
     * @param $mesto
     * @param $ulica
     * @param $mobil
     */
    public function __construct($email, $heslo, $mesto, $ulica, $mobil)
    {
        $this->email = $email;
        $this->heslo = $heslo;
        $this->mesto = $mesto;
        $this->mobil = $mobil;
        $this->ulica = $ulica;

    }


    /**
     * @return mixed
     */
    public function getMesto()
    {
        return $this->mesto;
    }

    /**
     * @param mixed $mesto
     */
    public function setMesto($mesto)
    {
        $this->mesto = $mesto;
    }

    /**
     * @return mixed
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * @param mixed $ulica
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
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
