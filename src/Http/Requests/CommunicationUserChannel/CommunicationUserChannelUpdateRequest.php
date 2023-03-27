<?php

namespace NextDeveloper\communicator\Http\Requests\CommunicationUserChannel;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class CommunicationUserChannelUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'contact_id'            => 'nullable|integer',
			'user_id'               => 'nullable|integer',
			'type'                  => 'required',
			'channel_configuration' => 'required|string',
			'last_connected_at'     => 'nullable|date',
			'connection_error_at'   => 'nullable|date',
        ];
    }

}