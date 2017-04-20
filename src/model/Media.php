<?php


namespace wcs\model;

class Media
{
    private $id;
    private $link;
    private $linktype;
    private $idcontent;

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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLinktype()
    {
        return $this->linktype;
    }

    /**
     * @param mixed $linktype
     */
    public function setLinktype($linktype)
    {
        $this->linktype = $linktype;
    }

    /**
     * @return mixed
     */
    public function getIdcontent()
    {
        return $this->idcontent;
    }

    /**
     * @param mixed $idcontent
     */
    public function setIdcontent($idcontent)
    {
        $this->idcontent = $idcontent;
    }

}