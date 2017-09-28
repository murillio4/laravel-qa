<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function comments ()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function author ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function questionable ()
    {
        return $this->belongsTo('App\Question', 'question_id');
    }

    public function votes ()
    {
        return $this->morphMany('App\Vote', 'votable');
    }
}
