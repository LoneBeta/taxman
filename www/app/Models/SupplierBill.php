<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierBill extends Model
{
    protected $fillable = ['customer_id','supplier_id','type_id'];

    public function supplier()
    {
    	return $this->belongsTo(\App\Models\Supplier::class);
    }

    public function customer()
    {
    	return $this->belongsTo(\App\Models\Customer::class);
    }
}
