<?php

namespace BoxGrater\Merchants\Models;

use BoxGrater\Merchants\Models\Merchant;

use Illuminate\Database\Eloquent\Model;

class MerchantRep extends Model
{
  protected $guarded = ["id"];

  public function merchant()
  {
    return $this->belongsTo('Merchant');
  }
}
