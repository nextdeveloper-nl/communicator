<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationUserPreference;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationUserPreferenceQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationUserPreferenceTransformer;
use NextDeveloper\communicator\Services\CommunicationUserPreferenceService;
use NextDeveloper\communicator\Http\Requests\CommunicationUserPreference\CommunicationUserPreferenceCreateRequest;

class CommunicationUserPreferenceController extends AbstractController
{
    /**
    * This method returns the list of communicationuserpreferences.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationUserPreferenceQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationUserPreferenceQueryFilter $filter, Request $request) {
        $data = CommunicationUserPreferenceService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationUserPreferenceId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationUserPreferenceService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationUserPreference object on database.
    *
    * @param CommunicationUserPreferenceCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationUserPreferenceCreateRequest $request) {
        $model = CommunicationUserPreferenceService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}