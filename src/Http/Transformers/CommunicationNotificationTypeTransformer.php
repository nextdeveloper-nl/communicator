<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationNotificationType;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationNotificationTypeTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationNotificationTypeTransformer extends AbstractTransformer {

    /**
     * @param CommunicationNotificationType $model
     *
     * @return array
     */
    public function transform(CommunicationNotificationType $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'name'  =>  $model->name,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
            'enabled_channels'  =>  $model->enabled_channels,
        ]);
    }
}
