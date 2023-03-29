<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'accountid';

    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'last_login';

    // https://medium.com/@steno983/laravel-models-column-alias-c48a75065fb9
    // protected $maps = [
    //     'dbCol1' => 'coolName1',
    //     'dbCol2' => 'coolName2'
    // ];
    // protected $append = ['coolName1', 'coolName2'];
    // protected $hidden = ['dbCol1', 'dbCol2'];
    
}
