<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationSession;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationSessionCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'account_id'           => 'nullable|integer',
			'contact_id'           => 'nullable|integer',
			'user_id'              => 'nullable|integer',
			'support_ticket_id'    => 'nullable|integer',
			'direction'            => '',
			'state'                => 'nullable',
			'job_count'            => 'required|integer',
			'message_count'        => 'required|integer',
			'notification_channel' => 'required',
        ];
    }

}