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
    private $id;
    private $registeredUserID;
    private $street;
    private $plz;
    private $city;
    private $canton;
    private $numberOfRooms;
    private $price;
    private $squareMeters;
    private $publishedDate;
    private $moveInDate;
    private $moveOutDate;
    private $description;
    private $image1;
    private $image2;
    private $image3;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getRegisteredUserID()
    {
        return $this->registeredUserID;
    }

    /**
     * @param mixed $registeredUserID
     */
    public function setRegisteredUserID($registeredUserID)
    {
        $this->registeredUserID = $registeredUserID;
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
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param mixed $numberOfRooms
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
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
    public function getSquareMeters()
    {
        return $this->squareMeters;
    }

    /**
     * @param mixed $squareMeters
     */
    public function setSquareMeters($squareMeters)
    {
        $this->squareMeters = $squareMeters;
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
    public function getMoveInDate()
    {
        return $this->moveInDate;
    }

    /**
     * @param mixed $moveInDate
     */
    public function setMoveInDate($moveInDate)
    {
        $this->moveInDate = $moveInDate;
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