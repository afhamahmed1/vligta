<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalField extends Model
{
    use HasFactory;
    protected $table='legal_fields';
    protected $fillable = [
        'legal_field_name'
    ];
}
