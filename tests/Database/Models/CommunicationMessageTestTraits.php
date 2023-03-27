<?php

namespace NextDeveloper\communicator\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\communicator\Database\Filters\CommunicationMessageQueryFilter;
use NextDeveloper\communicator\Services\AbstractServices\AbstractCommunicationMessageService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait CommunicationMessageTestTraits
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

    public function test_http_communicationmessage_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/communicator/communicationmessage');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_communicationmessage_model_get()
    {
        $result = AbstractCommunicationMessageService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationmessage_get_all()
    {
        $result = AbstractCommunicationMessageService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationmessage_get_paginated()
    {
        $result = AbstractCommunicationMessageService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_communicationmessage_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationmessage_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::first();

            event( new \NextDeveloper\communicator\Events\CommunicationMessage\CommunicationMessageRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_message_text_filter()
    {
        try {
            $request = new Request([
                'message_text'  =>  'a'
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationmessage_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationMessageQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationMessage::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}