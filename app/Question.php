<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use \Conner\Tagging\Taggable;

class Question extends Model
{
    use SoftDeletes;
    use Taggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

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

    public function answers ()
    {
        return $this->hasMany('App\Answer', 'question_id');
    }

    public function votes ()
    {
        return $this->morphMany('App\Vote', 'votable');
    }

}
