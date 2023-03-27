<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationUserChannel;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationUserChannelTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationUserChannelTransformer extends AbstractTransformer {

    /**
     * @param CommunicationUserChannel $model
     *
     * @return array
     */
    public function transform(CommunicationUserChannel $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'contact_id'  =>  $model->contact_id,
            'user_id'  =>  $model->user_id,
            'type'  =>  $model->type,
            'channel_configuration'  =>  $model->channel_configuration,
            'last_connected_at'  =>  $model->last_connected_at,
            'connection_error_at'  =>  $model->connection_error_at,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
