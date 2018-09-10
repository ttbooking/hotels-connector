<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Type: xsd:date
     *
     * @var date
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
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     *
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }
}

