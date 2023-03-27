<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationMessageCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationMessageCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
