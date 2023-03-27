<?php

namespace NextDeveloper\communicator\Events\CommunicationUserPreference;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\communicator\Database\Models\CommunicationUserPreference;

/**
 * Class CommunicationUserPreferenceUpdatingEvent
 * @package NextDeveloper\communicator\Events
 */
class CommunicationUserPreferenceUpdatingEvent
{
    use SerializesModels;

    /**
     * @var CommunicationUserPreference
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(CommunicationUserPreference $model = null) {
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