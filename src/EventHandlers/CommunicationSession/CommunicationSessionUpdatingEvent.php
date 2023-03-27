<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationSession;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationSessionUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationSessionUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
