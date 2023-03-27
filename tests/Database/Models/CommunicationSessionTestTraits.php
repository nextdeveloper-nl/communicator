<?php

namespace NextDeveloper\communicator\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\communicator\Database\Filters\CommunicationSessionQueryFilter;
use NextDeveloper\communicator\Services\AbstractServices\AbstractCommunicationSessionService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait CommunicationSessionTestTraits
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

    public function test_http_communicationsession_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/communicator/communicationsession');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_communicationsession_model_get()
    {
        $result = AbstractCommunicationSessionService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationsession_get_all()
    {
        $result = AbstractCommunicationSessionService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationsession_get_paginated()
    {
        $result = AbstractCommunicationSessionService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_communicationsession_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationsession_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::first();

            event( new \NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_job_count_filter()
    {
        try {
            $request = new Request([
                'job_count'  =>  '1'
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_message_count_filter()
    {
        try {
            $request = new Request([
                'message_count'  =>  '1'
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationsession_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationSessionQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationSession::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}