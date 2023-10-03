<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }


    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
