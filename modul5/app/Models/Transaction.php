<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class, "customer_id"); //one to one
    }

    public function employee(){
        return $this->belongsTo(Employee::class, "employee_id"); //one to one
    }
}
