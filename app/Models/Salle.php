<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = ['Nom','espace','natureId'];
    // relation
    public function nature()
    {
        return $this->belongsTo(Nature::class);
    }
}
