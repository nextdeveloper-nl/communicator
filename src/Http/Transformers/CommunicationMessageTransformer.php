<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationMessage;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationMessageTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationMessageTransformer extends AbstractTransformer {

    /**
     * @param CommunicationMessage $model
     *
     * @return array
     */
    public function transform(CommunicationMessage $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'user_channel_id'  =>  $model->user_channel_id,
            'communication_session_id'  =>  $model->communication_session_id,
            'user_id'  =>  $model->user_id,
            'contact_id'  =>  $model->contact_id,
            'message_id'  =>  $model->message_id,
            'third_party_id'  =>  $model->third_party_id,
            'imap_id'  =>  $model->imap_id,
            'type'  =>  $model->type,
            'message_text'  =>  $model->message_text,
            'is_from_plusclouds'  =>  $model->is_from_plusclouds,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
