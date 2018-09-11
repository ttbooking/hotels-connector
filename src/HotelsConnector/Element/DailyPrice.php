<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Type: xsd:date
     *
     * @var string
     */
    public $date = null;

    /**
     * @var ClientPriceDetails $rate
     */
    protected $rate = null;

    /**
     * @var ClientPriceDetails $bookingFee
     */
    protected $bookingFee = null;

    /**
     * @var ClientPriceDetails $earlyArrival
     */
    protected $earlyArrival = null;

    /**
     * @var ClientPriceDetails $lateDeparture
     */
    protected $lateDeparture = null;

    /**
     * @var DailyPriceMeals $meals
     */
    protected $meals = null;

    /**
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param ClientPriceDetails $rate
     * @return DailyPrice
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * @param ClientPriceDetails $bookingFee
     * @return DailyPrice
     */
    public function setBookingFee($bookingFee)
    {
        $this->bookingFee = $bookingFee;
        return $this;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getEarlyArrival()
    {
        return $this->earlyArrival;
    }

    /**
     * @param ClientPriceDetails $earlyArrival
     * @return DailyPrice
     */
    public function setEarlyArrival($earlyArrival)
    {
        $this->earlyArrival = $earlyArrival;
        return $this;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getLateDeparture()
    {
        return $this->lateDeparture;
    }

    /**
     * @param ClientPriceDetails $lateDeparture
     * @return DailyPrice
     */
    public function setLateDeparture($lateDeparture)
    {
        $this->lateDeparture = $lateDeparture;
        return $this;
    }

    /**
     * @return DailyPriceMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param DailyPriceMeals $meals
     * @return DailyPrice
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
        return $this;
    }
}

