<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationNotificationType;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationNotificationTypeQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationNotificationTypeTransformer;
use NextDeveloper\communicator\Services\CommunicationNotificationTypeService;
use NextDeveloper\communicator\Http\Requests\CommunicationNotificationType\CommunicationNotificationTypeCreateRequest;

class CommunicationNotificationTypeController extends AbstractController
{
    /**
    * This method returns the list of communicationnotificationtypes.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationNotificationTypeQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationNotificationTypeQueryFilter $filter, Request $request) {
        $data = CommunicationNotificationTypeService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationNotificationTypeId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationNotificationTypeService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationNotificationType object on database.
    *
    * @param CommunicationNotificationTypeCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationNotificationTypeCreateRequest $request) {
        $model = CommunicationNotificationTypeService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}