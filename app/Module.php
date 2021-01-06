<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $guarded = [];

    public function cours()
    {
        return $this->belongsTo('App\Cours');
    }
    public function chapitres()
    {
        return $this->hasMany('App\Chapitre');
    }
}
