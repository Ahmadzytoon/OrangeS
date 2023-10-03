<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = ['average', 'team_id', 'user_id',
     'adaptation_to_the_market',
     'robustness_of_the_economic_model',
     'solution_maturity',
     'scalability_and_innovation',
     'pitch_quality',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
