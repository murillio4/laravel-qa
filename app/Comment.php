<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function commentable ()
    {
        return $this->morphTo();
    }

    public function author ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function votes ()
    {
        return $this->morphMany('App\Vote', 'votable');
    }
}
