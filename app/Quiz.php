<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $guarded = [];

    public function chapitres()
    {
        return $this->belongsTo('App\Chapitre');
    }

}
