<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationSession;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationSessionCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationSessionCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
