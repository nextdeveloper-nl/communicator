<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationMessage;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationMessageCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'user_channel_id'          => 'nullable|integer',
			'communication_session_id' => 'nullable|integer',
			'user_id'                  => 'nullable|integer',
			'contact_id'               => 'nullable|integer',
			'message_id'               => 'nullable|integer',
			'third_party_id'           => 'nullable|string|max:100',
			'imap_id'                  => 'nullable|integer',
			'type'                     => '',
			'message_text'             => 'nullable|string',
			'is_from_plusclouds'       => 'boolean',
        ];
    }

}