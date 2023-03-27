<?php

namespace NextDeveloper\communicator\EventHandlers\CommunicationMessage;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CommunicationMessageDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class CommunicationMessageDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
