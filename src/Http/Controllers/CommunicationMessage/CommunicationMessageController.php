<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationMessage;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationMessageQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationMessageTransformer;
use NextDeveloper\communicator\Services\CommunicationMessageService;
use NextDeveloper\communicator\Http\Requests\CommunicationMessage\CommunicationMessageCreateRequest;

class CommunicationMessageController extends AbstractController
{
    /**
    * This method returns the list of communicationmessages.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationMessageQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationMessageQueryFilter $filter, Request $request) {
        $data = CommunicationMessageService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationMessageId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationMessageService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationMessage object on database.
    *
    * @param CommunicationMessageCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationMessageCreateRequest $request) {
        $model = CommunicationMessageService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}