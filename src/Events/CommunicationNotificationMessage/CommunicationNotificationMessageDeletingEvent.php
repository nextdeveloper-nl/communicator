<?php

namespace NextDeveloper\communicator\Events\CommunicationNotificationMessage;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage;

/**
 * Class CommunicationNotificationMessageDeletingEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationNotificationMessageDeletingEvent
{
    use SerializesModels;

    /**
     * @var CommunicationNotificationMessage
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationNotificationMessage $model = null) {
        $this->_model = $model;
    }

    /**
    * @param int $value
    *
    * @return AbstractEvent
    */
    public function setTimestamp($value) {
        $this->timestamp = $value;

        return $this;
    }

    /**
    * @return int|null
    */
    public function getTimestamp() {
        return $this->timestamp;
    }
}