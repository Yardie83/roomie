<?php
/**
 * Created by PhpStorm.
 * User: LorisGrether
 * Date: 07.01.2018
 * Time: 10:48
 */

namespace domain;


class Listing
{
    protected $id;
    protected $userID;
    protected $street;
    protected $plz;
    protected $city;
    protected $canton;
    protected $numberofrooms;
    protected $price;
    protected $squaremeters;
    protected $publishedDate;
    protected $moveindate;
    protected $moveOutDate;
    protected $description;
    protected $image1;
    protected $image2;
    protected $image3;

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
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param int $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param mixed $plz
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * @param mixed $canton
     */
    public function setCanton($canton)
    {
        $this->canton = $canton;
    }

    /**
     * @return mixed
     */
    public function getNumberofrooms()
    {
        return $this->numberofrooms;
    }

    /**
     * @param mixed $numberofrooms
     */
    public function setNumberofrooms($numberofrooms)
    {
        $this->numberofrooms = $numberofrooms;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSquaremeters()
    {
        return $this->squaremeters;
    }

    /**
     * @param mixed $squaremeters
     */
    public function setSquaremeters($squaremeters)
    {
        $this->squaremeters = $squaremeters;
    }

    /**
     * @return mixed
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * @param mixed $publishedDate
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    /**
     * @return mixed
     */
    public function getMoveindate()
    {
        return $this->moveindate;
    }

    /**
     * @param mixed $moveindate
     */
    public function setMoveindate($moveindate)
    {
        $this->moveindate = $moveindate;
    }

    /**
     * @return mixed
     */
    public function getMoveOutDate()
    {
        return $this->moveOutDate;
    }

    /**
     * @param mixed $moveOutDate
     */
    public function setMoveOutDate($moveOutDate)
    {
        $this->moveOutDate = $moveOutDate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param mixed $image1
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return mixed
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param mixed $image3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }


}