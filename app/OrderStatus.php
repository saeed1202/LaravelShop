<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
  protected $hidden = ['created_at', 'updated_at', 'order'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function carts()
  {
    return $this->hasMany(Cart::class);
  }
}
