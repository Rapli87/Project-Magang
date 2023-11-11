<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestVideo extends Model
{
    use HasFactory;

    protected $table = 'latest_videos';
    protected $fillable = ['thumbnail', 'url'];
}
