<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $guarded = [];

    public function scopeEtat($query)
    {
        return $query->where('etat', '=', 1)->get();
    }

    public function scopeCat($query)
    {
        return $query->where('categorie_id', '=', 1)->get();
    }

    public function scopeId($query)
    {
        return $query->where('cour', '=', 1)->get();
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function module()
    {
        return $this->hasMany('App\Module');
    }
}

