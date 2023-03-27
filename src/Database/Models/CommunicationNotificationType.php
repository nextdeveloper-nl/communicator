<?php

namespace NextDeveloper\communicator\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\communicator\Database\Observers\CommunicationNotificationTypeObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class CommunicationNotificationType.
 *
 * @package NextDeveloper\communicator\Database\Models
 */
class CommunicationNotificationType extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'communication_notification_types';

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
        'id'               => 'integer',
		'id_ref'           => 'string',
		'name'             => 'string',
		'created_at'       => 'datetime',
		'updated_at'       => 'datetime',
		'deleted_at'       => 'datetime',
		'enabled_channels' => 'string',
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
        parent::observe(CommunicationNotificationTypeObserver::class);
    }
}
