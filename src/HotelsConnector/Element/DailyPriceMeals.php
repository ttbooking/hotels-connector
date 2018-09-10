<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPriceMeals
{

    /**
     * @var MealPriceDetails[] $meal
     */
    protected $meal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MealPriceDetails[]
     */
    public function getMeal()
    {
      return $this->meal;
    }

    /**
     * @param MealPriceDetails[] $meal
     * @return DailyPriceMeals
     */
    public function setMeal(array $meal = null)
    {
      $this->meal = $meal;
      return $this;
    }

}
