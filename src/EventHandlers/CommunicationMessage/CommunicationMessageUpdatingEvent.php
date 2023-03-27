<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationMessageUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationMessageUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
