<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Eloquent
{
    protected $table = 'regions';
    use SoftDeletes;
    public $timestamps = true;

    /**
     * The attributes that are mass asignable
     * @var array
     */
    protected $fillable = [
    	'name',
    	'number',
    	'event_id',
    ];

    /**
     * Belongs to relation to event collection
     * @return model
     */
    public function event()
    {
    	return $this->belongsTo('App\Event', 'event_id', '_id');
    }

}
