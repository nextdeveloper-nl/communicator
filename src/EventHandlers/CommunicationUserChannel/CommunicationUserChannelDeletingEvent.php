<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserChannelDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserChannelDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
