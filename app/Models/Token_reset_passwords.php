<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token_reset_passwords extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
        'token',
        'intentos',
        'updated_at' 
    
    ];
}
