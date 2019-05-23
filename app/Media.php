<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
  protected $fillable = ['name', 'content', 'src', 'thumbnail', 'product_id', 'path'];

  protected $hidden = ['created_at', 'updated_at', 'product_id', 'path'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
