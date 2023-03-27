<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserPreference;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserPreferenceDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserPreferenceDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
