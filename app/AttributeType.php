<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeType extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['name'];

  /**
   * @var array
   */
  protected $hidden = ['created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function attributes()
  {
    return $this->hasMany(Attribute::class);
  }
}
