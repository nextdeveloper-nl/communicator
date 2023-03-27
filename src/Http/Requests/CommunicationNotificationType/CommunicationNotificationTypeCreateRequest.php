<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationNotificationType;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationNotificationTypeCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'             => 'required|string|max:191',
			'enabled_channels' => 'nullable|string',
        ];
    }

}