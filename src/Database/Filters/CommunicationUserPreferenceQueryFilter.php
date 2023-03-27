<?php

namespace NextDeveloper\communicator\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class CommunicationUserPreferenceQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;

    public function isSmsEnabled()
    {
        return $this->builder->where('is_sms_enabled', true);
    }
    
    public function isEmailEnabled()
    {
        return $this->builder->where('is_email_enabled', true);
    }
    
    public function isTelegramEnabled()
    {
        return $this->builder->where('is_telegram_enabled', true);
    }
    
    public function isTeamsEnabled()
    {
        return $this->builder->where('is_teams_enabled', true);
    }
    
    public function isDiscordEnabled()
    {
        return $this->builder->where('is_discord_enabled', true);
    }
    
    public function isSlackEnabled()
    {
        return $this->builder->where('is_slack_enabled', true);
    }
    
    public function createdAtStart($date) 
    {
        return $this->builder->where( 'created_at', '>=', $date );
    }

    public function createdAtEnd($date) 
    {
        return $this->builder->where( 'created_at', '<=', $date );
    }

    public function updatedAtStart($date) 
    {
        return $this->builder->where( 'updated_at', '>=', $date );
    }

    public function updatedAtEnd($date) 
    {
        return $this->builder->where( 'updated_at', '<=', $date );
    }

    public function deletedAtStart($date) 
    {
        return $this->builder->where( 'deleted_at', '>=', $date );
    }

    public function deletedAtEnd($date) 
    {
        return $this->builder->where( 'deleted_at', '<=', $date );
    }

    public function contactId($value)
    {
        $contact = Contact::where('id_ref', $value)->first();

        if($contact) {
            return $this->builder->where('contact_id', '=', $contact->id);
        }
    }

    public function userId($value)
    {
        $user = User::where('id_ref', $value)->first();

        if($user) {
            return $this->builder->where('user_id', '=', $user->id);
        }
    }

    public function notificationId($value)
    {
        $notification = Notification::where('id_ref', $value)->first();

        if($notification) {
            return $this->builder->where('notification_id', '=', $notification->id);
        }
    }

}
