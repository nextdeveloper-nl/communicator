<?php

namespace NextDeveloper\communicator\Events\CommunicationUserChannel;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationUserChannel;

/**
 * Class CommunicationUserChannelSavedEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationUserChannelSavedEvent
{
    use SerializesModels;

    /**
     * @var CommunicationUserChannel
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationUserChannel $model = null) {
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