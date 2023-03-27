<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationSession;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationSessionTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationSessionTransformer extends AbstractTransformer {

    /**
     * @param CommunicationSession $model
     *
     * @return array
     */
    public function transform(CommunicationSession $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'account_id'  =>  $model->account_id,
            'contact_id'  =>  $model->contact_id,
            'user_id'  =>  $model->user_id,
            'support_ticket_id'  =>  $model->support_ticket_id,
            'direction'  =>  $model->direction,
            'state'  =>  $model->state,
            'job_count'  =>  $model->job_count,
            'message_count'  =>  $model->message_count,
            'notification_channel'  =>  $model->notification_channel,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
