<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = ['Nom','espace'];
    // relation
    public function natures()
    {
        return $this->belongsTo(Nature::class);
    }
}
