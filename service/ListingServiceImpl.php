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
     * @throws HTTPException
     */
    public function createListing(Listing $listing)
    {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $listingDAO = new ListingDAO();
            $listing->setAgentId(AuthServiceImpl::getInstance()->getCurrentUserId());
            return $listingDAO->create($listing);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);

    }

    /**
     * @access public
     * @param int listingId
     * @return Listing
     * @ParamType listingId int
     * @ReturnType Listing
     * @throws HTTPException
     */
    public function readListing($listingID)
    {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $listingDAO = new ListingDAO();
            return $listingDAO->read($listingID);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);

    }

    /**
     * @access public
     * @param Listing listing
     * @return Listing
     * @ParamType listing Listing
     * @ReturnType Listing
     * @throws HTTPException
     */
    public function updateListing(Listing $listing)
    {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $listingDAO = new ListingDAO();
            return $listingDAO->update($listing);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);

    }

    /**
     * @access public
     * @param int listingId
     * @ParamType listingId int
     */
    public function deleteListing($listingId)
    {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $listingDAO = new ListingDAO();
            $listing = new Listing();
            $listing->setId($listingId);
            $listingDAO->delete($listing);
        }
    }

    /**
     * @access public
     * @return Listing[]
     * @ReturnType Listing[]
     * @throws HTTPException
     */
    public function findAllListings()
    {
        if(AuthServiceImpl::getInstance()->verifyAuth()){
            $listingDAO = new ListingDAO();
            return $listingDAO->findByUserID(AuthServiceImpl::getInstance()->getCurrentUserId());
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);

    }
}