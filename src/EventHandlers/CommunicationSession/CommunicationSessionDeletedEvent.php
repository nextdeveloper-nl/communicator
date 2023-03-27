<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationSession;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationSessionDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationSessionDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
