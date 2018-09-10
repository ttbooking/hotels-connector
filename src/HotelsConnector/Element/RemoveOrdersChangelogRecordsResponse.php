<?php
namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsResponse extends BaseResponse
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return RemoveOrdersChangelogRecordsResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
