<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
    ];
    
    public function usuarios(){
       // $user = User::find($this->id_users);
        //return $user;
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
    
}
