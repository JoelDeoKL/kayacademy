<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaires extends Model
{
    protected $guarded = [];

    public function chapitres()
    {
        return $this->belongsTo('App\Chapitre');
    }

    public function point()
    {
        return $this->hasMany('App\Point');
    }
}
