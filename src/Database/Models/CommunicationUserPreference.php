<?php

namespace NextDeveloper\communicator\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\communicator\Database\Observers\CommunicationUserPreferenceObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class CommunicationUserPreference.
 *
 * @package NextDeveloper\communicator\Database\Models
 */
class CommunicationUserPreference extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'communication_user_preferences';

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
        'id'                  => 'integer',
		'id_ref'              => 'string',
		'contact_id'          => 'integer',
		'user_id'             => 'integer',
		'notification_id'     => 'integer',
		'is_sms_enabled'      => 'boolean',
		'is_email_enabled'    => 'boolean',
		'is_telegram_enabled' => 'boolean',
		'is_teams_enabled'    => 'boolean',
		'is_discord_enabled'  => 'boolean',
		'is_slack_enabled'    => 'boolean',
		'created_at'          => 'datetime',
		'updated_at'          => 'datetime',
		'deleted_at'          => 'datetime',
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
        parent::observe(CommunicationUserPreferenceObserver::class);
    }
}
