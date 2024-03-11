<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    public function salle()
    {
        return $this->belongsTo(Salle::class);

    }

    public function users()
    {
        return $this->belongsToMany(User::class,'notes','cours_id','user_id');
    }
}

