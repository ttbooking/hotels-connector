<?php
namespace Bronevik\HotelsConnector\Element;

class MealPriceDetails extends ClientPriceDetails
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $included
     */
    protected $included = null;

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return MealPriceDetails
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
      return $this->included;
    }

    /**
     * @param boolean $included
     * @return MealPriceDetails
     */
    public function setIncluded($included)
    {
      $this->included = $included;
      return $this;
    }

}
