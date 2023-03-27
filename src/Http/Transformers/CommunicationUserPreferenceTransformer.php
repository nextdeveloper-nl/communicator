<?php

namespace NextDeveloper\communicator\Http\Transformers;

use NextDeveloper\communicator\Database\Models\CommunicationUserPreference;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class CommunicationUserPreferenceTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\communicator\Http\Transformers
 */
class CommunicationUserPreferenceTransformer extends AbstractTransformer {

    /**
     * @param CommunicationUserPreference $model
     *
     * @return array
     */
    public function transform(CommunicationUserPreference $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'contact_id'  =>  $model->contact_id,
            'user_id'  =>  $model->user_id,
            'notification_id'  =>  $model->notification_id,
            'is_sms_enabled'  =>  $model->is_sms_enabled,
            'is_email_enabled'  =>  $model->is_email_enabled,
            'is_telegram_enabled'  =>  $model->is_telegram_enabled,
            'is_teams_enabled'  =>  $model->is_teams_enabled,
            'is_discord_enabled'  =>  $model->is_discord_enabled,
            'is_slack_enabled'  =>  $model->is_slack_enabled,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
