<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  protected $fillable = ['name'];
  protected $hidden = ['created_at', 'updated_at'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function cities()
  {
    return $this->hasMany(City::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function addresses()
  {
    return $this->hasMany(City::class)->with('addresses');
  }
}
