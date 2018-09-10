<?php
namespace Bronevik\HotelsConnector\Element;

class Change
{

    /**
     * @var string $element
     */
    protected $element = null;

    /**
     * @var string $newValue
     */
    protected $newValue = null;

    /**
     * @param string $element
     * @param string $newValue
     */
    public function __construct($element, $newValue)
    {
      $this->element = $element;
      $this->newValue = $newValue;
    }

    /**
     * @return string
     */
    public function getElement()
    {
      return $this->element;
    }

    /**
     * @param string $element
     * @return Change
     */
    public function setElement($element)
    {
      $this->element = $element;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
      return $this->newValue;
    }

    /**
     * @param string $newValue
     * @return Change
     */
    public function setNewValue($newValue)
    {
      $this->newValue = $newValue;
      return $this;
    }

}
