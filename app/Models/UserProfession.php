<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfession extends Model
{
    use HasFactory;
    protected $table='users_professions';
    protected $fillable = [
        'user_id',
        'profession_id'
    ];

    public function user(){
        return $this->belongsTo('users','user_id','id');
    }
    public function profession(){
        return $this->belongsTo('profession','profession_id','id');
    }
}
