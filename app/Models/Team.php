<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $fillable = [
      'team_name',
      'description',
  
  ];
    // public function questions()
    // {
    //     return $this->hasMany(Question::class);
    // }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
