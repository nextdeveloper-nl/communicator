<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationSession;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationSessionQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationSessionTransformer;
use NextDeveloper\communicator\Services\CommunicationSessionService;
use NextDeveloper\communicator\Http\Requests\CommunicationSession\CommunicationSessionCreateRequest;

class CommunicationSessionController extends AbstractController
{
    /**
    * This method returns the list of communicationsessions.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationSessionQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationSessionQueryFilter $filter, Request $request) {
        $data = CommunicationSessionService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationSessionId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationSessionService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationSession object on database.
    *
    * @param CommunicationSessionCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationSessionCreateRequest $request) {
        $model = CommunicationSessionService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}