<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationTypeUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationTypeUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
