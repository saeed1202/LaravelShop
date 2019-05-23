<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $fillable = ['name', 'state_id'];
  protected $hidden = ['created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function state()
  {
    return $this->belongsTo(State::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function addresses()
  {
    return $this->hasMany(Address::class);
  }
}
