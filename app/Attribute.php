<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $fillable = ['attribute_id', 'attribute_type_id', 'is_active', 'name'];

  protected $hidden = ['created_at','updated_at','is_active','pivot'];
  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function attributeGroup()
  {
    return $this->belongsTo(AttributeGroup::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function attributeItems()
  {
    return $this->hasMany(AttributeItem::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function products()
  {
    return $this->belongsToMany(Product::class, 'attribute_item_product');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function attributeType()
  {
    return $this->belongsTo(AttributeType::class, 'attribute_type_id');
  }
}
