<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationTypeCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationTypeCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
