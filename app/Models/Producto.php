<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function tipoproductos(){
        return $this->belongsTo(TipoProducto::class, 'id');
    }

    public function tipopersonas(){
        return $this->belongsTo(TipoPersona::class, 'id');
    }

    public function marcas(){
        return $this->belongsTo(Marca::class, 'id');
    }
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];
}
