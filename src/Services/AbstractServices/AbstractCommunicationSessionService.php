<?php

namespace NextDeveloper\communicator\Services\AbstractServices;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use NextDeveloper\communicator\Database\Models\CommunicationSession;
use NextDeveloper\communicator\Database\Filters\CommunicationSessionQueryFilter;

use NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatedEvent;
use NextDeveloper\communicator\Events\CommunicationSession\CommunicationSessionCreatingEvent;

/**
* This class is responsible from managing the data for CommunicationSession
*
* Class CommunicationSessionService.
*
* @package NextDeveloper\communicator\Database\Models
*/
class AbstractCommunicationSessionService {
    public static function get(CommunicationSessionQueryFilter $filter = null, array $params = []) : Collection|LengthAwarePaginator {
        $enablePaginate = array_key_exists('paginate', $params);

        /**
        * Here we are adding null request since if filter is null, this means that this function is called from
        * non http application. This is actually not I think its a correct way to handle this problem but it's a workaround.
        *
        * Please let me know if you have any other idea about this; baris.bulut@nextdeveloper.com
        */
        if($filter == null)
            $filter = new CommunicationSessionQueryFilter(new Request());

        $perPage = config('commons.pagination.per_page');

        if($perPage == null)
            $perPage = 20;

        if(array_key_exists('per_page', $params)) {
            $perPage = intval($params['per_page']);

            if($perPage == 0)
                $perPage = 20;
        }

        if(array_key_exists('orderBy', $params)) {
            $filter->orderBy($params['orderBy']);
        }

        $model = CommunicationSession::filter($filter);

        if($model && $enablePaginate)
            return $model->paginate($perPage);
        else
            return $model->get();

        if(!$model && $enablePaginate)
            return CommunicationSession::paginate($perPage);
        else
            return CommunicationSession::get();
    }

    public static function getAll() {
        return CommunicationSession::all();
    }

    /**
    * This method returns the model by looking at reference id
    *
    * @param $ref
    * @return mixed
    */
    public static function getByRef($ref) : ?CommunicationSession {
        return CommunicationSession::findByRef($ref);
    }

    /**
    * This method returns the model by lookint at its id
    *
    * @param $id
    * @return CommunicationSession|null
    */
    public static function getById($id) : ?CommunicationSession {
        return CommunicationSession::where('id', $id)->first();
    }

    /**
    * This method created the model from an array.
    *
    * Throws an exception if stuck with any problem.
    *
    * @param array $data
    * @return mixed
    * @throw Exception
    */
    public static function create(array $data) {
        event( new CommunicationSessionCreatingEvent() );

        try {
            $model = CommunicationSession::create([

            ]);
        } catch(\Exception $e) {
            throw $e;
        }

        event( new CommunicationSessionCreatedEvent($model) );

        return $model;
    }
}