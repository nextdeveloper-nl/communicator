<?php

namespace NextDeveloper\communicator\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\communicator\Database\Filters\CommunicationNotificationTypeQueryFilter;
use NextDeveloper\communicator\Services\AbstractServices\AbstractCommunicationNotificationTypeService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait CommunicationNotificationTypeTestTraits
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

    public function test_http_communicationnotificationtype_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/communicator/communicationnotificationtype');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_communicationnotificationtype_model_get()
    {
        $result = AbstractCommunicationNotificationTypeService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationnotificationtype_get_all()
    {
        $result = AbstractCommunicationNotificationTypeService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_communicationnotificationtype_get_paginated()
    {
        $result = AbstractCommunicationNotificationTypeService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_communicationnotificationtype_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_communicationnotificationtype_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::first();

            event( new \NextDeveloper\communicator\Events\CommunicationNotificationType\CommunicationNotificationTypeRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_enabled_channels_filter()
    {
        try {
            $request = new Request([
                'enabled_channels'  =>  'a'
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_communicationnotificationtype_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new CommunicationNotificationTypeQueryFilter($request);

            $model = \NextDeveloper\communicator\Database\Models\CommunicationNotificationType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}