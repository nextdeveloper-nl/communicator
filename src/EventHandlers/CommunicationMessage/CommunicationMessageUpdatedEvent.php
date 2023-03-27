<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationMessageUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationMessageUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
