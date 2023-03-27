<?php

namespace NextDeveloper\communicator\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class CommunicationMessageQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;
    
    public function messageText($value)
    {
        return $this->builder->where('message_text', 'like', '%' . $value . '%');
    }

    public function isFromPlusclouds()
    {
        return $this->builder->where('is_from_plusclouds', true);
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

    public function userChannelId($value)
    {
        $userChannel = UserChannel::where('id_ref', $value)->first();

        if($userChannel) {
            return $this->builder->where('user_channel_id', '=', $userChannel->id);
        }
    }

    public function communicationSessionId($value)
    {
        $communicationSession = CommunicationSession::where('id_ref', $value)->first();

        if($communicationSession) {
            return $this->builder->where('communication_session_id', '=', $communicationSession->id);
        }
    }

    public function userId($value)
    {
        $user = User::where('id_ref', $value)->first();

        if($user) {
            return $this->builder->where('user_id', '=', $user->id);
        }
    }

    public function contactId($value)
    {
        $contact = Contact::where('id_ref', $value)->first();

        if($contact) {
            return $this->builder->where('contact_id', '=', $contact->id);
        }
    }

    public function messageId($value)
    {
        $message = Message::where('id_ref', $value)->first();

        if($message) {
            return $this->builder->where('message_id', '=', $message->id);
        }
    }

    public function thirdPartyId($value)
    {
        $thirdParty = ThirdParty::where('id_ref', $value)->first();

        if($thirdParty) {
            return $this->builder->where('third_party_id', '=', $thirdParty->id);
        }
    }

    public function imapId($value)
    {
        $imap = Imap::where('id_ref', $value)->first();

        if($imap) {
            return $this->builder->where('imap_id', '=', $imap->id);
        }
    }

}
