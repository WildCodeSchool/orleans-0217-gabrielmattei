<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 13:46
 */

namespace wcs\model;


class Content
{
    private $id;
    private $title;
    private $subtitle;
    private $year;
    private $description;
    private $new;
    private $best;
    private $category;
    private $credits;

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param mixed $credits
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }/**
 * @param mixed $id
 * @return Content
 */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }/**
 * @return mixed
 */
    public function getTitle()
    {
        return $this->title;
    }/**
 * @param mixed $title
 * @return Content
 */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }/**
 * @return mixed
 */
    public function getSubtitle()
    {
        return $this->subtitle;
    }/**
 * @param mixed $subtitle
 * @return Content
 */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }/**
 * @return mixed
 */
    public function getYear()
    {
        return $this->year;
    }/**
 * @param mixed $year
 * @return Content
 */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }/**
 * @return mixed
 */
    public function getDescription()
    {
        return $this->description;
    }/**
 * @param mixed $description
 * @return Content
 */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }/**
 * @return mixed
 */
    public function getNew()
    {
        return $this->new;
    }/**
 * @param mixed $new
 * @return Content
 */
    public function setNew($new)
    {
        $this->new = $new;
        return $this;
    }/**
 * @return mixed
 */
    public function getBest()
    {
        return $this->best;
    }/**
 * @param mixed $best
 * @return Content
 */
    public function setBest($best)
    {
        $this->best = $best;
        return $this;
    }/**
 * @return mixed
 */
    public function getCategory()
    {
        return $this->category;
    }/**
 * @param mixed $category
 * @return Content
 */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

}