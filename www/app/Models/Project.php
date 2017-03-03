<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['customer_id','type_id'];

    public function customer()
    {
    	return $this->belongsTo(\App\Models\Customer::class);
    }
}
