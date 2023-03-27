<?php

namespace NextDeveloper\communicator\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\communicator\Database\Filters\CommunicationNotificationMessageQueryFilter;
use NextDeveloper\communicator\Services\AbstractServices\AbstractCommunicationNotificationMessageService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait CommunicationNotificationMessageTestTraits
{
    public $http;

    /**
    *   Creating the Guzzle object
    */
    public function setupGuzzle()
    {
        $this->http = new Client([
            'base_uri'  =>  '127.0.0.1:8000'
        ]);
    }

    /**
    *   Destroying the Guzzle object
    */
    public function destroyGuzzle()
    {
        $this->http = null;
    }

    public function test_http_communicationnotificationmessage_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/communicator/communicationnotificationmessage');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_communicationnotificationmessage_model_get()
    {
        $result = AbstractCommunicationNotificationMessageService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationnotificationmessage_get_all()
    {
        $result = AbstractCommunicationNotificationMessageService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationnotificationmessage_get_paginated()
    {
        $result = AbstractCommunicationNotificationMessageService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_communicationnotificationmessage_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationmessage_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationMessage\CommunicationNotificationMessageRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_subject_filter()
    {
        try {
            $request = new Request([
                'subject'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_message_filter()
    {
        try {
            $request = new Request([
                'message'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_allowed_channels_filter()
    {
        try {
            $request = new Request([
                'allowed_channels'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_locale_filter()
    {
        try {
            $request = new Request([
                'locale'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_event_name_filter()
    {
        try {
            $request = new Request([
                'event_name'  =>  'a'
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationmessage_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}