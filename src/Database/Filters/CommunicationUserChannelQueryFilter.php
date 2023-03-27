<?php

namespace NextDeveloper\communicator\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class CommunicationUserChannelQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;
    
    public function channelConfiguration($value)
    {
        return $this->builder->where('channel_configuration', 'like', '%' . $value . '%');
    }

    public function lastConnectedAtStart($date) 
    {
        return $this->builder->where( 'last_connected_at', '>=', $date );
    }

    public function lastConnectedAtEnd($date) 
    {
        return $this->builder->where( 'last_connected_at', '<=', $date );
    }

    public function connectionErrorAtStart($date) 
    {
        return $this->builder->where( 'connection_error_at', '>=', $date );
    }

    public function connectionErrorAtEnd($date) 
    {
        return $this->builder->where( 'connection_error_at', '<=', $date );
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

}
