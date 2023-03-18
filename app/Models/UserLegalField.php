<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLegalField extends Model
{
    use HasFactory;
    protected $table='user_legal_fields';
    protected $fillable = [
        'user_id','legal_field_id'
    ];
    public function user(){
        return $this->belongsTo('users','user_id','id');
    }
    public function legal_fields(){
        return $this->belongsTo('legal_fields','legal_field_id','id');
    }
}
