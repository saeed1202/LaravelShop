<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['address', 'phone', 'postal_code', 'user_id', 'city_id', 'full_name'];

  /**
   * @var array
   */
  protected $hidden = ['created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\belongsTo
   */
  public function city()
  {
    return $this->belongsTo(City::class)->with('state');
  }

  public function carts()
  {
    return $this->hasMany(Cart::class);
  }

}
