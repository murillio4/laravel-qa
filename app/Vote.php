<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'votes';


    public function author ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function votable ()
    {
        return $this->morphTo();
    }
}
