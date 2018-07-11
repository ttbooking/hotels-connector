<?php
namespace Bronevik\HotelsConnector\Element;

class ServiceExtraField
{

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var string $value
     */
    public $value = null;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value)
    {
      $this->name = $name;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return ServiceExtraField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return ServiceExtraField
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
