<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      'name', 'slug', 'parent_id', 'parent', 'image', 'depth'
  ];
  protected $hidden = ['created_at','updated_at'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function parent()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function children()
  {
    return $this->hasMany(Category::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function attributeGroup()
  {
    return $this->hasOne(AttributeGroup::class, 'category_id');
  }

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
  public function products()
  {
    return $this->hasMany(Product::class);
  }

}
