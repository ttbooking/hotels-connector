<?php
namespace Bronevik\HotelsConnector\Element;

class OfferPolicy
{

    /**
     * @var string $description
     */
    public $description = null;

    /**
     * @param string $description
     */
    public function __construct($description)
    {
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return OfferPolicy
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
