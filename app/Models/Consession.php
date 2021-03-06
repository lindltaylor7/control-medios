<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'enterprise',
        'ruc',
        'department',
        'vigency',
        'va_c',
        'start',
        'type'
    ];
}
