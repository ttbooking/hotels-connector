<?php
namespace Bronevik\HotelsConnector\Element;

class GetOrdersChangelogResponse extends BaseResponse
{

    /**
     * @var OrdersChangelogRecord[] $ordersChangelogRecord
     */
    protected $ordersChangelogRecord = null;

     /**
     * @return OrdersChangelogRecord[]
     */
    public function getOrdersChangelogRecord()
    {
      return $this->ordersChangelogRecord;
    }

    /**
     * @param OrdersChangelogRecord[] $ordersChangelogRecord
     * @return GetOrdersChangelogResponse
     */
    public function setOrdersChangelogRecord(array $ordersChangelogRecord = null)
    {
      $this->ordersChangelogRecord = $ordersChangelogRecord;
      return $this;
    }

}
