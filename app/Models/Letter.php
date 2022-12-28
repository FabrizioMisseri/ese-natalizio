<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'lastname', 'address', 'city', 'arrival_date', 'gift', 'letter_text', 'rating', 'is_delivered'
    ];
}
