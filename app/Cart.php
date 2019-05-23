<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  /**
   * @var array
   */
  protected $hidden = ['created_at', 'updated_at'];

  protected $fillable = ['address_id'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function products()
  {
    return $this->belongsToMany(Product::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function address()
  {
    return $this->belongsTo(Address::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function status()
  {
    return $this->belongsTo(OrderStatus::class, 'order_status_id');
  }
}
