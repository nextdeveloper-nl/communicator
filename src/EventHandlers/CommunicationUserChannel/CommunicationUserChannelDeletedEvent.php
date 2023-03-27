<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserChannelDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserChannelDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
