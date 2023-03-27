<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationSession;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationSessionUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationSessionUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
