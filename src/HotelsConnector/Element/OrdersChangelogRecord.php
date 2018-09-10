<?php
namespace Bronevik\HotelsConnector\Element;

class OrdersChangelogRecord
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @var string $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $serviceCreationSource
     */
    protected $serviceCreationSource = null;

    /**
     * @var \DateTime $createdAt
     */
    protected $createdAt = null;

    /**
     * @var ChangeList $changeList
     */
    protected $changeList = null;

    /**
     * @param int $id
     * @param int $orderId
     * @param int $serviceId
     * @param string $referenceId
     * @param string $serviceCreationSource
     * @param \DateTime $createdAt
     * @param ChangeList $changeList
     */
    public function __construct($id, $orderId, $serviceId, $referenceId, $serviceCreationSource, \DateTime $createdAt, $changeList)
    {
      $this->id = $id;
      $this->orderId = $orderId;
      $this->serviceId = $serviceId;
      $this->referenceId = $referenceId;
      $this->serviceCreationSource = $serviceCreationSource;
      $this->createdAt = $createdAt->format(\DateTime::ATOM);
      $this->changeList = $changeList;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return OrdersChangelogRecord
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return OrdersChangelogRecord
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return OrdersChangelogRecord
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return OrdersChangelogRecord
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCreationSource()
    {
      return $this->serviceCreationSource;
    }

    /**
     * @param string $serviceCreationSource
     * @return OrdersChangelogRecord
     */
    public function setServiceCreationSource($serviceCreationSource)
    {
      $this->serviceCreationSource = $serviceCreationSource;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
      if ($this->createdAt == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdAt);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdAt
     * @return OrdersChangelogRecord
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
      $this->createdAt = $createdAt->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ChangeList
     */
    public function getChangeList()
    {
      return $this->changeList;
    }

    /**
     * @param ChangeList $changeList
     * @return OrdersChangelogRecord
     */
    public function setChangeList($changeList)
    {
      $this->changeList = $changeList;
      return $this;
    }

}
