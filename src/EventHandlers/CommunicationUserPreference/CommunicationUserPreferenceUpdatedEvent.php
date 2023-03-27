<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserPreference;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserPreferenceUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserPreferenceUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
