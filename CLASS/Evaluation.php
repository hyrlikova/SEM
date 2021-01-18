<?php


class Evaluation
{

    private $id;
    private $dodanie;
    private $jedlo;
    private $spokojnost;
    private $user_email;

    /**
     * Evaluation constructor.
     * @param $id
     * @param $dodanie
     * @param $jedlo
     * @param $spokojnost
     * @param $user_email
     */
    public function __construct($id, $dodanie, $jedlo, $spokojnost, $user_email)
    {
        $this->id = $id;
        $this->dodanie = $dodanie;
        $this->jedlo = $jedlo;
        $this->spokojnost = $spokojnost;
        $this->user_email = $user_email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDodanie()
    {
        return $this->dodanie;
    }

    /**
     * @param mixed $dodanie
     */
    public function setDodanie($dodanie)
    {
        $this->dodanie = $dodanie;
    }

    /**
     * @return mixed
     */
    public function getJedlo()
    {
        return $this->jedlo;
    }

    /**
     * @param mixed $jedlo
     */
    public function setJedlo($jedlo)
    {
        $this->jedlo = $jedlo;
    }

    /**
     * @return mixed
     */
    public function getSpokojnost()
    {
        return $this->spokojnost;
    }

    /**
     * @param mixed $spokojnost
     */
    public function setSpokojnost($spokojnost)
    {
        $this->spokojnost = $spokojnost;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }




}