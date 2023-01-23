<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
        'name',
        'country',
        'deadline',
        'count',
        'departments',
        'start',
        'information',
    ];
}
