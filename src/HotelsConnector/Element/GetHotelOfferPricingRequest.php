<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingRequest extends BaseRequest
{

    /**
     * @var Service[] $services
     */
    protected $services = null;

    /**
     * @return Service[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Service[] $services
     * @return GetHotelOfferPricingRequest
     */
    public function setServices(array $services)
    {
        $this->services = $services;
        return $this;
    }

}
