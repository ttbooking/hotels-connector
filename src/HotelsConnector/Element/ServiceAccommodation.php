<?php

namespace Bronevik\HotelsConnector\Element;

class ServiceAccommodation extends Service
{
    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $offerCode = null;

    /**
     * Type: xsd:string
     *
     * @var string[]
     */
    public $guests = [];

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $comment = null;

    /**
     * @var float $sellingPrice
     */
    public $sellingPrice = null;

    /**
     * @var int $checkinHour
     */
    protected $checkinHour = null;

    /**
     * @var int $checkoutHour
     */
    protected $checkoutHour = null;

    /**
     * Type: xsd:int
     *
     * @var int[]
     */
    public $meals = [];

    /**
     *
     * @param string $offerCode
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     *
     * @return bool
     */
    public function hasGuests()
    {
        return count($this->guests) > 0;
    }

    /**
     *
     * @return string[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     *
     * @param string $guests
     */
    public function addGuests($guests)
    {
        $this->guests[] = $guests;
    }

    /**
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     *
     * @return bool
     */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return ServiceAccommodation
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckInHour()
    {
        return $this->checkinHour;
    }

    /**
     * @param int $checkInHour
     * @return ServiceAccommodation
     */
    public function setCheckInHour($checkInHour)
    {
        $this->checkinHour = $checkInHour;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckOutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @param int $checkOutHour
     * @return ServiceAccommodation
     */
    public function setCheckOutHour($checkOutHour)
    {
        $this->checkoutHour = $checkOutHour;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     *
     * @param int $meals
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }
}

