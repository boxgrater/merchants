<?php

namespace BoxGrater\Merchants\Models;

use BoxGrater\Products\Models\Product;
use BoxGrater\Merchants\Models\MerchantRep;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function products()
    {
      return $this->hasMany('BoxGrater\Products\Models\Product');
    }

    public function reps()
    {
      return $this->hasMany('BoxGrater\Merchants\Models\MerchantRep');
    }

    public function listMerchants()
    {
      $model = $this->all();
      $merchants = [];
      $merchants[0] = 'None';
      foreach($model as $merchant) {
        $merchants[$merchant->id] = $merchant->name;
      }

      return $merchants;
    }
}
