<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miprod extends Model
{
    protected $table = 'miprods';

    protected $fillable = ['nombre','descripcion','precio','correo','foto','user_id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
