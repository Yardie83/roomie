<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 07.01.2018
 * Time: 11:01
 */

namespace service;

use domain\Listing;
use dao\UserDAO;
use http\HTTPException;
use http\HTTPStatusCode;

interface ListingService
{
    /**
     * @access public
     * @param Listing listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function createListing(Listing $listing);

    /**
     * @access public
     * @param int listingId
     * @return Listing
     * @ParamType listingId int
     * @ReturnType Listing
     */
    public function readListing($listingID);

    /**
     * @access public
     * @param Listing listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function updateListing(Listing $listing);

    /**
     * @access public
     * @param int listingId
     * @ParamType listingId int
     */
    public function deleteListing($listingId);

    /**
     * @access public
     * @return Listing[]
     * @ReturnType Listing[]
     */
    public function findAllListings();
}