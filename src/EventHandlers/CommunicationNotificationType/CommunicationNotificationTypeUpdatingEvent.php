<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationTypeUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationTypeUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
