<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserChannelCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserChannelCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
