<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 07.01.2018
 * Time: 11:07
 */

namespace service;


use domain\Listing;
use dao\ListingDAO;
use http\HTTPException;
use http\HTTPStatusCode;

class ListingServiceImpl implements ListingService
{

    /**
     * @access public
     * @param Listing listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function createListing(Listing $listing)
    {
        // TODO: Implement createListing() method.
    }

    /**
     * @access public
     * @param int listingId
     * @return Listing
     * @ParamType listingId int
     * @ReturnType Listing
     */
    public function readListing($listingID)
    {
        // TODO: Implement readListing() method.
    }

    /**
     * @access public
     * @param Listing listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     */
    public function updateListing(Listing $listing)
    {
        // TODO: Implement updateListing() method.
    }

    /**
     * @access public
     * @param int listingId
     * @ParamType listingId int
     */
    public function deleteListing($listingId)
    {
        // TODO: Implement deleteListing() method.
    }

    /**
     * @access public
     * @return Listing[]
     * @ReturnType Listing[]
     */
    public function findAllListings()
    {
        // TODO: Implement findAllListings() method.
    }
}