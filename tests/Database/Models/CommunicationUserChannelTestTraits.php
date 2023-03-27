<?php

namespace NextDeveloper\communicator\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\communicator\Database\Filters\CommunicationUserChannelQueryFilter;
use NextDeveloper\communicator\Services\AbstractServices\AbstractCommunicationUserChannelService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait CommunicationUserChannelTestTraits
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

    public function test_http_communicationuserchannel_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/communicator/communicationuserchannel');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_communicationuserchannel_model_get()
    {
        $result = AbstractCommunicationUserChannelService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationuserchannel_get_all()
    {
        $result = AbstractCommunicationUserChannelService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationuserchannel_get_paginated()
    {
        $result = AbstractCommunicationUserChannelService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_communicationuserchannel_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationuserchannel_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::first();

            event( new \NextDeveloper\communicator\Events\CommunicationUserChannel\CommunicationUserChannelRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_channel_configuration_filter()
    {
        try {
            $request = new Request([
                'channel_configuration'  =>  'a'
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_last_connected_at_filter_start()
    {
        try {
            $request = new Request([
                'last_connected_atStart'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_connection_error_at_filter_start()
    {
        try {
            $request = new Request([
                'connection_error_atStart'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_last_connected_at_filter_end()
    {
        try {
            $request = new Request([
                'last_connected_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_connection_error_at_filter_end()
    {
        try {
            $request = new Request([
                'connection_error_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_last_connected_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'last_connected_atStart'  =>  now(),
                'last_connected_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_connection_error_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'connection_error_atStart'  =>  now(),
                'connection_error_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationuserchannel_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationUserChannelQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationUserChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}