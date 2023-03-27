<?php

namespace NextDeveloper\communicator\Events\CommunicationSession;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationSession;

/**
 * Class CommunicationSessionDeletedEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationSessionDeletedEvent
{
    use SerializesModels;

    /**
     * @var CommunicationSession
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationSession $model = null) {
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