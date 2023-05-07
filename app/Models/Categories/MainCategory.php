<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'main_category'
    ];

    // リレーションの定義(1対多の「多」側なので複数形)
    public function subCategories(){
      return $this->hasMany('App\Models\Categories\SubCategory');
    }

}
