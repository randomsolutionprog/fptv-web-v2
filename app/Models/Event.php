<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ev_name',
        'ev_desc',
        'ev_start_date',
        'ev_end_register_date',
        'publish',
        'image_path',
    ];

}
