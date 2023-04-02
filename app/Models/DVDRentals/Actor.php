<?php

namespace App\Models\DVDRentals;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';

    // const CREATED_AT = 'created_on';
    const UPDATED_AT = 'last_update';
}
