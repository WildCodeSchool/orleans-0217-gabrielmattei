<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 13:53
 */

namespace wcs;


class Link
{
    private $id;
    private $link;
    private $linkType;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Link
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return Link
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * @param mixed $linkType
     * @return Link
     */
    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
        return $this;
    }


}