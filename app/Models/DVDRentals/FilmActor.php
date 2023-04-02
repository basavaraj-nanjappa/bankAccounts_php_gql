<?php

namespace App\Models\DVDRentals;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FilmActor extends Model
{
    protected $table = 'film_actor';

    public $incrementing=false;

    // const CREATED_AT = 'created_on';
    const UPDATED_AT = 'last_update';

    public function actor(): HasOne
    {
        return $this->hasOne(Actor::class, "actor_id", "actor_id");
    }
}
