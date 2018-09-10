<?php

namespace Bronevik\HotelsConnector\Element;

class HotelOffer
{
    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $code = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $name = null;

    /**
     * Флаг наличия lhp-цен в предложении
     * Type: xsd:boolean
     *
     * @var boolean
     */
    public $lhp = null;

    /**
     * Флаг невозвратности предложения
     * Type: xsd:boolean
     *
     * @var boolean
     */
    public $nonRefundable = null;

    /**
     * Type: tns:PriceDetails
     *
     * @var \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public $priceDetails = null;

    /**
     * @var \Bronevik\HotelsConnector\Element\Tax[] $taxes
     */
    public $taxes = [];

    /**
     * Type: tns:Currency
     *
     * @var string
     */
    public $currency = null;

    /**
     * Type: xsd:boolean
     *
     * @var boolean
     */
    public $immediateConfirmation = null;

    /**
     * Type: xsd:int
     *
     * @var int
     */
    public $freeRooms = null;

    /**
     * Type: tns:DailyPrice
     *
     * @var \Bronevik\HotelsConnector\Element\DailyPrice[]
     */
    public $dailyPrices = [];

    /**
     * Type: tns:AvailableMeal
     *
     * @var \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public $meals = [];

    /**
     * Type: tns:HotelOfferCancellationPolicy
     *
     * @var \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Информация о завтраке
     * Type: tns:BreakfastInfo
     *
     * @var \Bronevik\HotelsConnector\Element\BreakfastInfo
     */
    public $breakfastInfo = null;

    /**
     * Type: xsd:int
     *
     * @var int
     */
    public $roomId = null;

    /**
     * Количество гостей, которых можно
     *                                 разместить в номере
     * Type: xsd:int
     *
     * @var int
     */
    public $roomCapacity = null;

    /**
     * тип номера
     * Type: xsd:string
     *
     * @var string
     */
    public $roomType = null;

    /**
     * Type: xsd:boolean
     *
     * @var boolean
     */
    public $isSharedRoom = null;

    /**
     * Является ли номер блочным. Блочный номер - это номер с общей ванной комнатой и туалетом для
     *                                 нескольких номеров
     * Type: xsd:boolean
     *
     * @var boolean
     */
    public $isBlockRoom = null;

    /**
     * Type: tns:PaymentRecipients
     *
     * @var string
     */
    public $paymentRecipient = null;

    /**
     * @var \Bronevik\HotelsConnector\Element\OfferPolicy[] $offerPolicies
     */
    public $offerPolicies = [];

    /**
     * @var string $deepLink
     */
    protected $deepLink = null;

    /**
     *
     */
    public function __construct()
    {
        $this->priceDetails = new \Bronevik\HotelsConnector\Element\PriceDetails;
        $this->breakfastInfo = new \Bronevik\HotelsConnector\Element\BreakfastInfo;
    }

    /**
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param boolean $lhp
     */
    public function setLhp($lhp)
    {
        $this->lhp = $lhp;
    }

    /**
     *
     * @return boolean
     */
    public function getLhp()
    {
        return $this->lhp;
    }

    /**
     *
     * @param boolean $nonRefundable
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     *
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     *
     * @return \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *
     * @param boolean $immediateConfirmation
     */
    public function setImmediateConfirmation($immediateConfirmation)
    {
        $this->immediateConfirmation = $immediateConfirmation;
    }

    /**
     *
     * @return boolean
     */
    public function getImmediateConfirmation()
    {
        return $this->immediateConfirmation;
    }

    /**
     *
     * @param int $freeRooms
     */
    public function setFreeRooms($freeRooms)
    {
        $this->freeRooms = $freeRooms;
    }

    /**
     *
     * @return int
     */
    public function getFreeRooms()
    {
        return $this->freeRooms;
    }

    /**
     *
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     *
     * @return \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy $cancellationPolicies
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\BreakfastInfo $breakfastInfo
     */
    public function setBreakfastInfo($breakfastInfo)
    {
        $this->breakfastInfo = $breakfastInfo;
    }

    /**
     *
     * @return \Bronevik\HotelsConnector\Element\BreakfastInfo
     */
    public function getBreakfastInfo()
    {
        return $this->breakfastInfo;
    }

    /**
     *
     * @param int $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     *
     * @param int $roomCapacity
     */
    public function setRoomCapacity($roomCapacity)
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     *
     * @return int
     */
    public function getRoomCapacity()
    {
        return $this->roomCapacity;
    }

    /**
     *
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     *
     * @param boolean $isSharedRoom
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     *
     * @return boolean
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
    }

    /**
     *
     * @param boolean $isBlockRoom
     */
    public function setIsBlockRoom($isBlockRoom)
    {
        $this->isBlockRoom = $isBlockRoom;
    }

    /**
     *
     * @return boolean
     */
    public function getIsBlockRoom()
    {
        return $this->isBlockRoom;
    }

    /**
     *
     * @param string $paymentRecipient
     */
    public function setPaymentRecipient($paymentRecipient)
    {
        $this->paymentRecipient = $paymentRecipient;
    }

    /**
     *
     * @return string
     */
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     *
     * @return bool
     */
    public function hasDailyPrices()
    {
        return count($this->dailyPrices) > 0;
    }

    /**
     *
     * @return \Bronevik\HotelsConnector\Element\DailyPrice[]
     */
    public function getDailyPrices()
    {
        return $this->dailyPrices;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\DailyPrice $dailyPrices
     */
    public function addDailyPrices($dailyPrices)
    {
        $this->dailyPrices[] = $dailyPrices;
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
     *
     * @return \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\AvailableMeal $meals
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param Tax[] $taxes
     * @return HotelOffer
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * @return OfferPolicy[]
     */
    public function getOfferPolicies()
    {
        return $this->offerPolicies;
    }

    /**
     * @param OfferPolicy[] $offerPolicies
     * @return HotelOffer
     */
    public function setOfferPolicies($offerPolicies)
    {
        $this->offerPolicies = $offerPolicies;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @param string $deepLink
     * @return HotelOffer
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
        return $this;
    }
}

