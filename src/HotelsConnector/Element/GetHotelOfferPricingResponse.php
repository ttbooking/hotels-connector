<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingResponse extends BaseResponse
{

    /**
     * @var OrderServiceAccommodation[] $services
     */
    protected $services = null;

    /**
     * @return OrderServiceAccommodation[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param OrderServiceAccommodation[] $services
     * @return GetHotelOfferPricingResponse
     */
    public function setServices(array $services = null)
    {
        $this->services = $services;
        return $this;
    }

}
