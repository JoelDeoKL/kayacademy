<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $guarded = [];

    public function questionnaires()
    {
        return $this->belongsTo('App\Questionnaires');
    }
}
