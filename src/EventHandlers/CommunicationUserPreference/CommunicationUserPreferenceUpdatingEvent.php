<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserPreference;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserPreferenceUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserPreferenceUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
