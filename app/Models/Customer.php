<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'email'
    ];

    /**
     * The attributes excluded from the model's JSON form
     * 
     * @var array
     */
    protected $hidden = [];

    public function municipality_id() {
        return $this->hasOne(Muncipality::class);
    }

    public function postalcode_id() {
        return $this->hasOne(PostalCode::class);
    }

    public function region_id() {
        return $this->hasOne(Region::class);
    }
}

?>