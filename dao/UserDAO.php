<?php
/**
 * Created by PhpStorm.
 * User: LorisGrether
 * Date: 07.01.2018
 * Time: 10:44
 */

namespace dao;

use domain\User;

class UserDAO extends BasicDAO
{
    public function create(User $user) {
        $stmt = $this->pdoInstance->prepare('
        INSERT INTO RegisteredUsers (username, password, E-Mail)
          SELECT :username,:password,:E-Mail
          WHERE NOT EXISTS (
            SELECT E-Mail FROM RegisteredUsers WHERE E-Mail = :E-Mail
        );');
        $stmt->bindValue(':username', $user->getUserName());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':E-Mail', $user->getEmail());
        //$stmt->bindValue(':emailExist', $user->getEmail());
        //$stmt->bindValue(':isAdmin', $user->getIsAdmin());
        $stmt->execute();
        return $this->read($this->pdoInstance->lastInsertId());
    }

    public function read($registeredUserID) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM RegisteredUsers WHERE id = :id;');
        $stmt->bindValue(':id', $registeredUserID);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\User")[0];
        }
        return null;
    }


}