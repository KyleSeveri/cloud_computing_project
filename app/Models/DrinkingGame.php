<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkingGame extends Model
{
    use HasFactory;
    
    protected $table = 'drinking_games';
    
    protected $fillable = ['name', 'description'];
}
