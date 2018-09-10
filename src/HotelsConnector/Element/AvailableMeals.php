<?php
namespace Bronevik\HotelsConnector\Element;

class AvailableMeals
{

    /**
     * @var AvailableMeal[] $meal
     */
    protected $meal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableMeal[]
     */
    public function getMeal()
    {
      return $this->meal;
    }

    /**
     * @param AvailableMeal[] $meal
     * @return AvailableMeals
     */
    public function setMeal(array $meal = null)
    {
      $this->meal = $meal;
      return $this;
    }

}
