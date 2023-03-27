<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationNotificationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationNotificationMessageDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationNotificationMessageDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
