<?php
namespace Bronevik\HotelsConnector\Element;

class ChangeList
{

    /**
     * @var Change[] $change
     */
    protected $change = null;

    /**
     * @param Change[] $change
     */
    public function __construct(array $change)
    {
      $this->change = $change;
    }

    /**
     * @return Change[]
     */
    public function getChange()
    {
      return $this->change;
    }

    /**
     * @param Change[] $change
     * @return ChangeList
     */
    public function setChange(array $change)
    {
      $this->change = $change;
      return $this;
    }

}
