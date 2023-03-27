<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationNotificationMessage;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationNotificationMessageQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationNotificationMessageTransformer;
use NextDeveloper\communicator\Services\CommunicationNotificationMessageService;
use NextDeveloper\communicator\Http\Requests\CommunicationNotificationMessage\CommunicationNotificationMessageCreateRequest;

class CommunicationNotificationMessageController extends AbstractController
{
    /**
    * This method returns the list of communicationnotificationmessages.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationNotificationMessageQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationNotificationMessageQueryFilter $filter, Request $request) {
        $data = CommunicationNotificationMessageService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationNotificationMessageId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationNotificationMessageService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationNotificationMessage object on database.
    *
    * @param CommunicationNotificationMessageCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationNotificationMessageCreateRequest $request) {
        $model = CommunicationNotificationMessageService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}