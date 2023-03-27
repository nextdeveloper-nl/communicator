<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationTypeCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationTypeCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
