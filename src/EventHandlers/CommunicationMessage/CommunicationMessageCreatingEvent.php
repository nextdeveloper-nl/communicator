<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationMessageCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationMessageCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
