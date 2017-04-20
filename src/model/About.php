<?php


namespace wcs\model;


class About
{
    private $id;
    private $bio;
    private $subbio;
    private $contact1;
    private $mail1;
    private $tel1;
    private $contact2;
    private $mail2;
    private $tel2;
    private $image;
    private $cvanglais;
    private $cvfrancais;
    private $cvchinois;

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
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getSubbio()
    {
        return $this->subbio;
    }

    /**
     * @param mixed $subbio
     */
    public function setSubbio($subbio)
    {
        $this->subbio = $subbio;
    }

    /**
     * @return mixed
     */
    public function getContact1()
    {
        return $this->contact1;
    }

    /**
     * @param mixed $contact1
     */
    public function setContact1($contact1)
    {
        $this->contact1 = $contact1;
    }

    /**
     * @return mixed
     */
    public function getMail1()
    {
        return $this->mail1;
    }

    /**
     * @param mixed $mail1
     */
    public function setMail1($mail1)
    {
        $this->mail1 = $mail1;
    }

    /**
     * @return mixed
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * @param mixed $tel1
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;
    }

    /**
     * @return mixed
     */
    public function getContact2()
    {
        return $this->contact2;
    }

    /**
     * @param mixed $contact2
     */
    public function setContact2($contact2)
    {
        $this->contact2 = $contact2;
    }

    /**
     * @return mixed
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * @param mixed $mail2
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;
    }

    /**
     * @return mixed
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * @param mixed $tel2
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCvanglais()
    {
        return $this->cvanglais;
    }

    /**
     * @param mixed $cvanglais
     */
    public function setCvanglais($cvanglais)
    {
        $this->cvanglais = $cvanglais;
    }

    /**
     * @return mixed
     */
    public function getCvfrancais()
    {
        return $this->cvfrancais;
    }

    /**
     * @param mixed $cvfrancais
     */
    public function setCvfrancais($cvfrancais)
    {
        $this->cvfrancais = $cvfrancais;
    }

    /**
     * @return mixed
     */
    public function getCvchinois()
    {
        return $this->cvchinois;
    }

    /**
     * @param mixed $cvchinois
     */
    public function setCvchinois($cvchinois)
    {
        $this->cvchinois = $cvchinois;
    }

}