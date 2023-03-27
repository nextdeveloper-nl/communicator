<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationNotificationMessageTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationNotificationMessageTransformer extends AbstractTransformer {

    /**
     * @param CommunicationNotificationMessage $model
     *
     * @return array
     */
    public function transform(CommunicationNotificationMessage $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'name'  =>  $model->name,
            'notification_id'  =>  $model->notification_id,
            'subject'  =>  $model->subject,
            'message'  =>  $model->message,
            'allowed_channels'  =>  $model->allowed_channels,
            'direction'  =>  $model->direction,
            'locale'  =>  $model->locale,
            'is_active'  =>  $model->is_active,
            'event_name'  =>  $model->event_name,
            'email_template_id'  =>  $model->email_template_id,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
