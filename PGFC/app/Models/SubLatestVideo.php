<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLatestVideo extends Model
{
    use HasFactory;

    protected $table = 'sublatest_videos';
    protected $fillable = ['image', 'url', 'title', 'date', 'rate'];
}
