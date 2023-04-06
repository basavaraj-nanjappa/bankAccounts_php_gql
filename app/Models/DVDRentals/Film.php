<?php

namespace App\Models\DVDRentals;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'film';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'film_id';

    // const CREATED_AT = 'created_on';
    const UPDATED_AT = 'last_update';

    public function film_actors(): HasMany
    {
        return $this->hasMany(FilmActor::class, "film_id");
    }

    public function film_category(): HasOne
    {
        return $this->hasOne(FilmCategory::class, "film_id");
    }

    public function rating_summary() 
    {
        
    }
}
