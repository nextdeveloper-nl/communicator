<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationMessageUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationMessageUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
