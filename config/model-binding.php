<?php

return [
    'communicationmessage' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationMessage::findByRef($value);
    },

'communicationnotificationmessage' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationNotificationMessage::findByRef($value);
    },

'communicationnotificationtype' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationNotificationType::findByRef($value);
    },

'communicationsession' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationSession::findByRef($value);
    },

'communicationuserchannel' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationUserChannel::findByRef($value);
    },

'communicationuserpreference' => function ($value) {
        return NextDeveloper\communicator\Database\Models\CommunicationUserPreference::findByRef($value);
    },

//!APPENDHERE
];