<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoritos extends Model
{   
    use HasFactory;
    protected $fillable = ['correo','nombre','habilidades','tipo'];
    
}
