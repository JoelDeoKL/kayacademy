<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $guarded = [];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function videos()
    {
        return $this->hasMany('App\Videos');
    }

    public function commentaires()
    {
        return $this->hasMany('App\Commentaires');
    }

    public function quiz()
    {
        return $this->hasMany('App\Quiz');
    }

}
