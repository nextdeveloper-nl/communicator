<?php

namespace NextDeveloper\communicator\Http\Controllers\CommunicationUserChannel;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\communicator\Database\Filters\CommunicationUserChannelQueryFilter;
use NextDeveloper\communicator\Http\Transformers\CommunicationUserChannelTransformer;
use NextDeveloper\communicator\Services\CommunicationUserChannelService;
use NextDeveloper\communicator\Http\Requests\CommunicationUserChannel\CommunicationUserChannelCreateRequest;

class CommunicationUserChannelController extends AbstractController
{
    /**
    * This method returns the list of communicationuserchannels.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param CommunicationUserChannelQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(CommunicationUserChannelQueryFilter $filter, Request $request) {
        $data = CommunicationUserChannelService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $communicationUserChannelId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = CommunicationUserChannelService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created CommunicationUserChannel object on database.
    *
    * @param CommunicationUserChannelCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(CommunicationUserChannelCreateRequest $request) {
        $model = CommunicationUserChannelService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}