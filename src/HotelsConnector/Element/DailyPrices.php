<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPrices
{

    /**
     * @var \Bronevik\HotelsConnector\Element\DailyPrice[] $prices
     */
    protected $prices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \Bronevik\HotelsConnector\Element\DailyPrice[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param \Bronevik\HotelsConnector\Element\DailyPrice[] $prices
     * @return DailyPrices
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

}
