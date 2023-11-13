<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpcomingMatch extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'upcoming_match';

    //ada description
    // protected $fillable = [
    //     'home_team','away_team', 'match_datetime','vanue','home_team_logo','away_team_logo','description'
    // ];
    
    // tidak ada description
    protected $fillable = [
        'home_team','away_team', 'match_datetime','vanue','home_team_logo','away_team_logo'
    ];

    protected $hidden = [

    ];
}
