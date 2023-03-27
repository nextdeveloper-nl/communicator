<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationMessageCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationMessageCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
