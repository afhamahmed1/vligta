<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archetype extends Model
{
    use HasFactory;
    protected $table='archetypes';
    protected $fillable = [
        'archetype_name'
    ];
}
