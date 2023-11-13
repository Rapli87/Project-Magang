<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Network extends Model
{
    use SoftDeletes;

    protected $table = 'network';

    use HasFactory;
    protected $fillable = [
        'referral_code',
        'user_id',
        'parent_user_id',
    ];


}
