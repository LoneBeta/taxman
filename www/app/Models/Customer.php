<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['account_id','type_id','name'];

    protected function customer_type()
    {
    	return $this->hasOne(\App\Models\CustomerType::class);
    }
}
