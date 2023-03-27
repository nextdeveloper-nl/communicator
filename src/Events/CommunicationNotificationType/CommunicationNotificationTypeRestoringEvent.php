<?php

namespace NextDeveloper\communicator\Events\CommunicationNotificationType;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationNotificationType;

/**
 * Class CommunicationNotificationTypeRestoringEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationNotificationTypeRestoringEvent
{
    use SerializesModels;

    /**
     * @var CommunicationNotificationType
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationNotificationType $model = null) {
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