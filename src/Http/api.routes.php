<?php

Route::prefix('communicator')->group(function() {
    Route::prefix('communicationmessage')->group(function () {
        Route::get('/', 'CommunicationMessage\CommunicationMessageController@index');
        Route::get('/{communicationmessage}', 'CommunicationMessage\CommunicationMessageController@show');
        Route::post('/', 'CommunicationMessage\CommunicationMessageController@store');
        Route::put('/{communicationmessage}', 'CommunicationMessage\CommunicationMessageController@update');
        Route::delete('/{communicationmessage}', 'CommunicationMessage\CommunicationMessageController@destroy');
    });

Route::prefix('communicationnotificationmessage')->group(function () {
        Route::get('/', 'CommunicationNotificationMessage\CommunicationNotificationMessageController@index');
        Route::get('/{communicationnotificationmessage}', 'CommunicationNotificationMessage\CommunicationNotificationMessageController@show');
        Route::post('/', 'CommunicationNotificationMessage\CommunicationNotificationMessageController@store');
        Route::put('/{communicationnotificationmessage}', 'CommunicationNotificationMessage\CommunicationNotificationMessageController@update');
        Route::delete('/{communicationnotificationmessage}', 'CommunicationNotificationMessage\CommunicationNotificationMessageController@destroy');
    });

Route::prefix('communicationnotificationtype')->group(function () {
        Route::get('/', 'CommunicationNotificationType\CommunicationNotificationTypeController@index');
        Route::get('/{communicationnotificationtype}', 'CommunicationNotificationType\CommunicationNotificationTypeController@show');
        Route::post('/', 'CommunicationNotificationType\CommunicationNotificationTypeController@store');
        Route::put('/{communicationnotificationtype}', 'CommunicationNotificationType\CommunicationNotificationTypeController@update');
        Route::delete('/{communicationnotificationtype}', 'CommunicationNotificationType\CommunicationNotificationTypeController@destroy');
    });

Route::prefix('communicationsession')->group(function () {
        Route::get('/', 'CommunicationSession\CommunicationSessionController@index');
        Route::get('/{communicationsession}', 'CommunicationSession\CommunicationSessionController@show');
        Route::post('/', 'CommunicationSession\CommunicationSessionController@store');
        Route::put('/{communicationsession}', 'CommunicationSession\CommunicationSessionController@update');
        Route::delete('/{communicationsession}', 'CommunicationSession\CommunicationSessionController@destroy');
    });

Route::prefix('communicationuserchannel')->group(function () {
        Route::get('/', 'CommunicationUserChannel\CommunicationUserChannelController@index');
        Route::get('/{communicationuserchannel}', 'CommunicationUserChannel\CommunicationUserChannelController@show');
        Route::post('/', 'CommunicationUserChannel\CommunicationUserChannelController@store');
        Route::put('/{communicationuserchannel}', 'CommunicationUserChannel\CommunicationUserChannelController@update');
        Route::delete('/{communicationuserchannel}', 'CommunicationUserChannel\CommunicationUserChannelController@destroy');
    });

Route::prefix('communicationuserpreference')->group(function () {
        Route::get('/', 'CommunicationUserPreference\CommunicationUserPreferenceController@index');
        Route::get('/{communicationuserpreference}', 'CommunicationUserPreference\CommunicationUserPreferenceController@show');
        Route::post('/', 'CommunicationUserPreference\CommunicationUserPreferenceController@store');
        Route::put('/{communicationuserpreference}', 'CommunicationUserPreference\CommunicationUserPreferenceController@update');
        Route::delete('/{communicationuserpreference}', 'CommunicationUserPreference\CommunicationUserPreferenceController@destroy');
    });

//!APPENDHERE
});