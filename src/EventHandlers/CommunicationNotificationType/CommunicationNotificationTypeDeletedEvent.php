<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationTypeDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationTypeDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
