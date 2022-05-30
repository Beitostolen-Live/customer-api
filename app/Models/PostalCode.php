<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model {
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'postalcode', 'city'
    ];

    /**
     * The attributes excluded from the model's JSON form
     * 
     * @var array
     */
    protected $hidden = [];
}

?>