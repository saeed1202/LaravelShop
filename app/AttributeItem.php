<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeItem extends Model
{

  protected $fillable = ['value', 'attribute_id', 'is_active'];
  protected $hidden = ['created_at', 'updated_at', 'is_active','pivot'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function attribute()
  {
    return $this->belongsTo(Attribute::class, 'attribute_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   *
   * hanooz moshkel dare ..... ******
   */
  public function products()
  {
    return $this->belongsToMany(Product::class, 'attribute_item_product');
  }
}
