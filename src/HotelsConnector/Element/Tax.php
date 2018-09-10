<?php

namespace Bronevik\HotelsConnector\Element;

class Tax
{

    /**
     * @var string $type
     */
    public $type = null;

    /**
     * @var float $amount
     */
    public $amount = null;

    /**
     * @var string $currency
     */
    public $currency = null;

    /**
     * @var boolean $included
     */
    public $included = null;

    /**
     * @var string $comment
     */
    public $comment = null;

    /**
     * @param string $type
     * @param float $amount
     * @param string $currency
     * @param boolean $included
     * @param string $comment
     */
    public function __construct($type, $amount, $currency, $included, $comment)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->included = $included;
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Tax
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Tax
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Tax
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
     * @return Tax
     */
    public function setIncluded($included)
    {
        $this->included = $included;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Tax
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

}
