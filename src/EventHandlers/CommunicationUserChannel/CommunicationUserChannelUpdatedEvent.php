<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserChannelUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserChannelUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
