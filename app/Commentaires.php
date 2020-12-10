<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    protected $guarded = [];

    public function chapitres()
    {
        return $this->belongsTo('App\Chapitre');
    }
}
