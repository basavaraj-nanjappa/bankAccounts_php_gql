<?php

namespace App\Models\DVDRentals;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FilmCategory extends Model
{
    protected $table = 'film_category';

    public $incrementing=false;

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, "category_id");
    }
}
