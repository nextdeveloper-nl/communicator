<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationMessageDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationMessageDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
