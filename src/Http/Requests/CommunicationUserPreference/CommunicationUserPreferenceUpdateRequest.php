<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationUserPreference;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationUserPreferenceUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'contact_id'          => 'nullable|integer',
			'user_id'             => 'required|integer',
			'notification_id'     => 'required|integer',
			'is_sms_enabled'      => 'boolean',
			'is_email_enabled'    => 'boolean',
			'is_telegram_enabled' => 'boolean',
			'is_teams_enabled'    => 'boolean',
			'is_discord_enabled'  => 'boolean',
			'is_slack_enabled'    => 'boolean',
        ];
    }

}