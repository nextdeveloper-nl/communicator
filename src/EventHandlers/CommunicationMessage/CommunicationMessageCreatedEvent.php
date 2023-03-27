<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationMessageCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationMessageCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
