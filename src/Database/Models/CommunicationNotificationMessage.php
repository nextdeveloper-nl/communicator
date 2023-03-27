<?php

namespace NextDeveloper\communicator\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\communicator\Database\Observers\CommunicationNotificationMessageObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class CommunicationNotificationMessage.
 *
 * @package NextDeveloper\communicator\Database\Models
 */
class CommunicationNotificationMessage extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'communication_notification_messages';

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
        'id'                => 'integer',
		'id_ref'            => 'string',
		'name'              => 'string',
		'notification_id'   => 'integer',
		'subject'           => 'string',
		'message'           => 'string',
		'allowed_channels'  => 'string',
		'locale'            => 'string',
		'is_active'         => 'boolean',
		'event_name'        => 'string',
		'email_template_id' => 'integer',
		'created_at'        => 'datetime',
		'updated_at'        => 'datetime',
		'deleted_at'        => 'datetime',
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
        parent::observe(CommunicationNotificationMessageObserver::class);
    }
}
