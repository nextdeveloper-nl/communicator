<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationNotificationMessage;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationNotificationMessageCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'              => 'nullable|string|max:64',
			'notification_id'   => 'nullable|integer',
			'subject'           => 'nullable|string|max:200',
			'message'           => 'required|string',
			'allowed_channels'  => 'nullable|string',
			'direction'         => '',
			'locale'            => 'nullable|string|max:3',
			'is_active'         => 'boolean',
			'event_name'        => 'nullable|string|max:200',
			'email_template_id' => 'nullable|integer',
        ];
    }

}