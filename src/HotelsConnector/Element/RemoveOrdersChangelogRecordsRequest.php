<?php
namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsRequest extends BaseRequest
{

    /**
     * @var int[] $recordId
     */
    protected $recordId = null;

    /**
     * @return int[]
     */
    public function getRecordId()
    {
      return $this->recordId;
    }

    /**
     * @param int[] $recordId
     * @return RemoveOrdersChangelogRecordsRequest
     */
    public function setRecordId(array $recordId)
    {
      $this->recordId = $recordId;
      return $this;
    }

}
