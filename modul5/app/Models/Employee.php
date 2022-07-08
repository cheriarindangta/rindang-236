<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transactions(){
        return $this->hasMany(Transaction::class);  //one to many
    }

    public function ticket(){
        return $this->hasMany(Court::class, "ticket_id"); //many to many
    }

    public function user(){
        return $this->belongsTo(User::class, "user_id"); //one to one
    }
}
