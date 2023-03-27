<?php

namespace NextDeveloper\communicator\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class CommunicationSessionQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;

    public function jobCount($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('job_count', $operator, $value);
    }
    
    public function messageCount($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('message_count', $operator, $value);
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

    public function accountId($value)
    {
        $account = Account::where('id_ref', $value)->first();

        if($account) {
            return $this->builder->where('account_id', '=', $account->id);
        }
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

    public function supportTicketId($value)
    {
        $supportTicket = SupportTicket::where('id_ref', $value)->first();

        if($supportTicket) {
            return $this->builder->where('support_ticket_id', '=', $supportTicket->id);
        }
    }

}
