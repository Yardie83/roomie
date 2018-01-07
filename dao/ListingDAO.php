<?php
/**
 * Created by PhpStorm.
 * User: LorisGrether
 * Date: 07.01.2018
 * Time: 10:45
 */

namespace dao;

use domain\Listing;


class ListingDAO extends BasicDAO
{

    /**
     * @access public
     * @param Listing $listing
     * @return Listing
     * @ParamType customer Listing
     * @ReturnType Listing
     */
    public function create(Listing $listing) {
        $stmt = $this->pdoInstance->prepare('
            INSERT INTO ListingAppartment (name, email, mobile, agentid)
            VALUES (:name, :email , :mobile, :agentId)');
        $stmt->bindValue(':name', $listing->getName());
        $stmt->bindValue(':email', $listing->getEmail());
        $stmt->bindValue(':mobile', $listing->getMobile());
        $stmt->bindValue(':agentId', $listing->getAgentId());
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
            SELECT * FROM customer WHERE id = :id;');
        $stmt->bindValue(':id', $userId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\User")[0];
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
        $stmt = $this->pdoInstance->prepare('
            UPDATE customer SET name = :name,
                email = :email,
                mobile = :mobile
            WHERE id = :id');
        $stmt->bindValue(':name', $listing->getName());
        $stmt->bindValue(':email', $listing->getEmail());
        $stmt->bindValue(':mobile', $listing->getMobile());
        $stmt->bindValue(':id', $listing->getId());
        $stmt->execute();
        return $this->read($listing->getId());
    }

    /**
     * @access public
     * @param Listing listing
     * @ParamType listing Listing
     */
    public function delete(Listing $listing) {
        $stmt = $this->pdoInstance->prepare('
            DELETE FROM ListingAppartment
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
            SELECT * FROM RegisteredUsers WHERE id = :Id ORDER BY id;');
        $stmt->bindValue(':Id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Listing");
    }




}