<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
  protected $fillable = ['category_id', 'name', 'is_active'];

  protected $hidden = ['created_at','updated_at','is_active'];
  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function attributes()
  {
    return $this->hasMany(Attribute::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }

}
