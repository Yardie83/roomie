<?php
/**
 * Created by PhpStorm.
 * User: LorisGrether
 * Date: 07.01.2018
 * Time: 10:45
 */

namespace dao;

use domain\Listing;
use dao\BasicDAO;

class ListingDAO extends BasicDAO
{
    /**
     * @access public
     * @param Listing $listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function create(Listing $listing) {
        $stmt = $this->pdoInstance->prepare('
            INSERT INTO "listingApartment" ("userID", street, plz, city, canton, numberofrooms, price, squaremeters, publisheddate, moveindate, moveoutdate, description, image1, image2, image3)
           VALUES (:userID, :street, :plz, :city, :canton, :numberofrooms, :price, :squaremeters, :publisheddate, :moveindate, :moveoutdate, :description, :image1, :image2, :image3)');
        $stmt->bindValue(':userID', $listing->getUserID());
        $stmt->bindValue(':street', $listing->getStreet());
        $stmt->bindValue(':plz', $listing->getPlz());
        $stmt->bindValue(':city', $listing->getCity());
        $stmt->bindValue(':canton', $listing->getCanton());
        $stmt->bindValue(':numberofrooms', $listing->getNumberofrooms());
        $stmt->bindValue(':price', $listing->getPrice());
        $stmt->bindValue(':squaremeters', $listing->getSquaremeters());
        $stmt->bindValue(':publisheddate', $listing->getPublishedDate());
        $stmt->bindValue(':moveindate', $listing->getMoveInDate());
        $stmt->bindValue(':moveoutdate', $listing->getMoveOutDate());
        $stmt->bindValue(':description', $listing->getDescription());
        $stmt->bindValue(':image1', $listing->getImage1());
        $stmt->bindValue(':image2', $listing->getImage2());
        $stmt->bindValue(':image3', $listing->getImage3());
        $stmt->execute();
        return $this->read($this->pdoInstance->lastInsertId());
    }

    /**
     * @access public
     * @param int userId
     * @return Listing
     * @ParamType userId int
     * @ReturnType Listing
     */
    public function read($userId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM "listingApartment" WHERE id = :id;');
        $stmt->bindValue(':id', $userId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Listing")[0];
        }
        return null;
    }

    /**
     * @access public
     * @param Listing $listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function update(Listing $listing) {
        print_r($listing);
        $stmt = $this->pdoInstance->prepare('
            UPDATE "listingApartment" SET 
            "userID" = :userID,
            street = :street, 
            plz = :plz, 
            city = :city, 
            canton = :canton, 
            numberofrooms = :numberofrooms, 
            price = :price, 
            squaremeters = :squaremeters, 
            publisheddate = :publisheddate, 
            moveindate = :moveindate, 
            moveoutdate = :moveoutdate, 
            description = :description, 
            image1 = :image1, 
            image2 = :image2, 
            image3 = :image3
            WHERE id = :id');
        $stmt->bindValue(':id', $listing->getId());
        $stmt->bindValue(':userID', $listing->getUserID());
        $stmt->bindValue(':street', $listing->getStreet());
        $stmt->bindValue(':plz', $listing->getPlz());
        $stmt->bindValue(':city', $listing->getCity());
        $stmt->bindValue(':canton', $listing->getCanton());
        $stmt->bindValue(':numberofrooms', $listing->getNumberofrooms());
        $stmt->bindValue(':price', $listing->getPrice());
        $stmt->bindValue(':squaremeters', $listing->getSquaremeters());
        $stmt->bindValue(':publisheddate', $listing->getPublishedDate());
        $stmt->bindValue(':moveindate', $listing->getMoveInDate());
        $stmt->bindValue(':moveoutdate', $listing->getMoveOutDate());
        $stmt->bindValue(':description', $listing->getDescription());
        $stmt->bindValue(':image1', $listing->getImage1());
        $stmt->bindValue(':image2', $listing->getImage2());
        $stmt->bindValue(':image3', $listing->getImage3());
        $stmt->execute();
        return $this->read($listing->getId());
    }

    /**
     * @access public
     * @param Listing $listing
     * @ParamType listing Listing
     */
    public function delete(Listing $listing) {
        $stmt = $this->pdoInstance->prepare('
            DELETE FROM "listingApartment"
            WHERE id = :id
        ');
        $stmt->bindValue(':id', $listing->getId());
        $stmt->execute();
    }

    /**
     * @access public
     * @param int userId
     * @return Listing[]
     * @ParamType userId int
     * @ReturnType Listing[]
     */
    public function findByUserID($userId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM "listingApartment" WHERE "userID" = :Id ORDER BY id;');
        $stmt->bindValue(':Id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Listing");
    }

    /**
     * @access public
     * @param int userId
     * @return Listing[]
     * @ParamType userId int
     * @ReturnType Listing[]
     */
    public function findTopThree() {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM "listingApartment" LIMIT 3');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Listing");
    }
}