<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'Contact'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['message','obj_message','date']; 
}
