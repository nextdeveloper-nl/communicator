<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserPreference;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserPreferenceCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserPreferenceCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
