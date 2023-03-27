<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationUserChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationUserChannelUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationUserChannelUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
