<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  /**
   * @var array
   */
  protected $hidden = [
      'real_price', 'pivot', 'qty', 'user_id'
  ];

  /**
   * @var array
   */
  protected $fillable = [
      'real_price', 'price', 'name', 'slug', 'discount', 'category_id', 'qty', 'body', 'user_id'
  ];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function categories()
  {
    return $this->hasMany(Category::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function attributes()
  {
    return $this->belongsToMany(Attribute::class, 'attribute_item_product');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function carts()
  {
    return $this->belongsToMany(Cart::class);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function media()
  {
    return $this->hasMany(Media::class);
  }

  /**
   * @return Model|\Illuminate\Database\Eloquent\Relations\HasMany|object|null
   */
  public function thumbnail()
  {
    return $this->hasOne(Media::class);
  }
}

