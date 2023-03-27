<?php

namespace NextDeveloper\communicator\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\communicator\Database\Observers\CommunicationMessageObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class CommunicationMessage.
 *
 * @package NextDeveloper\communicator\Database\Models
 */
class CommunicationMessage extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'communication_messages';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     *  Here we have the fulltext fields. We can use these for fulltext search if enabled.
     */
    protected $fullTextFields = [
        
    ];

    /**
     * @var array
     */
    protected $appends = [
        
    ];

    /**
     * We are casting fields to objects so that we can work on them better
     * @var array
     */
    protected $casts = [
        'id'                       => 'integer',
		'id_ref'                   => 'string',
		'user_channel_id'          => 'integer',
		'communication_session_id' => 'integer',
		'user_id'                  => 'integer',
		'contact_id'               => 'integer',
		'message_id'               => 'integer',
		'third_party_id'           => 'string',
		'imap_id'                  => 'integer',
		'message_text'             => 'string',
		'is_from_plusclouds'       => 'boolean',
		'created_at'               => 'datetime',
		'updated_at'               => 'datetime',
		'deleted_at'               => 'datetime',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        'created_at',
		'updated_at',
		'deleted_at',
    ];

    /**
     * @var array
     */
    protected $with = [

    ];

    /**
     * @var int
     */
    protected $perPage = 20;

    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        //  We create and add Observer even if we wont use it.
        parent::observe(CommunicationMessageObserver::class);
    }
}
