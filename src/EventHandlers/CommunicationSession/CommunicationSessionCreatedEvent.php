<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationSession;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationSessionCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationSessionCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
