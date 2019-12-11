<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $table = 'cart';

  protected $fillable = ['cantidad', 'producto_id', 'user_id'];

  public function users()
  {
      return $this->hasMany('App\User');
  }

  public function productos()
  {
      return $this->hasMany('App\Miprod');
  }

}
