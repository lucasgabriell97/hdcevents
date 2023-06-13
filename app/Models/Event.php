<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array' // Deixa de ser string para virar array
    ];

    protected $dates = ['date']; // Diz que o campo é um date
}
