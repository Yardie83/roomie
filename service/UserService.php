<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 07.01.2018
 * Time: 11:01
 */

namespace service;

use domain\User;
use dao\UserDAO;
use http\HTTPException;
use http\HTTPStatusCode;

interface UserService
{
    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function createUser(User $user);

    /**
     * @access public
     * @param int userId
     * @return User
     * @ParamType userId int
     * @ReturnType User
     */
    public function readUser($userID);

    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function updateUser(User $user);

    /**
     * @access public
     * @param int userId
     * @ParamType userId int
     */
    public function deleteUser($userId);

    /**
     * @access public
     * @return User[]
     * @ReturnType User[]
     */
    public function findAllUser();
}