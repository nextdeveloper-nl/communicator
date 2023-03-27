<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserPreference;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserPreferenceDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserPreferenceDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
