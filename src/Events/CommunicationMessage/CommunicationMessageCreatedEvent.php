<?php

namespace NextDeveloper\communicator\Events\CommunicationMessage;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationMessage;

/**
 * Class CommunicationMessageCreatedEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationMessageCreatedEvent
{
    use SerializesModels;

    /**
     * @var CommunicationMessage
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationMessage $model = null) {
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